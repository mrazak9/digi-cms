<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatnerRequest;
use App\Models\Patner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PatnerController extends Controller
{
    public function index()
    {
        $patners = Patner::paginate(10);;
        $type_menu = 'our patners';
        return view('pages.admin.patners.index', compact('patners', 'type_menu'));
    }

    public function create()
    {

        $type_menu = 'patners';
        return view('pages.admin.patners.create', compact('type_menu'));
    }

    public function store(PatnerRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('logo')) {
            // return $request;
            $imageFileName = $data['name'] . '.' . $request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->storeAs('public/uploads/patners', $imageFileName);
            // Hapus file lama jika berhasil mengupload file baru
            if ($request->logo) {
                Storage::delete($request->logo);
            }
            // Update nilai dengan path gambar
            $data['logo'] = 'uploads/patners/' . $imageFileName;
        }
        Patner::create($data);

        return redirect()->route('patners.index')->with('success', 'Patner created successfully!');
    }

    public function edit(Patner $patner)
    {
        $type_menu = 'our patners';
        return view('pages.admin.patners.edit', compact('patner', 'type_menu'));
    }

    public function update(PatnerRequest $request, Patner $patner)
    {
        // return $request;
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            // return $request;
            $imageFileName = $data['name'] . '.' . $request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->storeAs('public/uploads/patners', $imageFileName);
            // Hapus file lama jika berhasil mengupload file baru
            if ($patner->logo) {
                Storage::delete($patner->logo);
            }
            // Update nilai dengan path gambar
            $data['logo'] = 'uploads/patners/' . $imageFileName;
            // return $data;
        }

        $patner->update($data);

        return redirect()->route('patners.index')->with('success', 'Patner updated successfully!');
    }

    public function show(Patner $patner)
    {
        $type_menu = 'our patners';
        return view('pages.admin.patners.show', compact('patner', 'type_menu'));
    }
    public function destroy(Patner $patner)
    {
        Storage::delete($patner->photo); // Hapus foto sebelum menghapus record
        $patner->delete();

        return redirect()->route('patners.index')->with('success', 'Patner deleted successfully!');
    }
}
