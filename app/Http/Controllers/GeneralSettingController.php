<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralSettingRequest;
use App\Models\GeneralSetting;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $type_menu = 'General Settings';
        $settings = GeneralSetting::all();

        return view('pages.admin.settings.index', compact('settings', 'type_menu'));
    }

    public function create()
    {
        // User::find(auth()->user()->id)->checkRole('super-admin');

        $type_setting = 'create';
        $type_menu = 'General Settings';
        return view('pages.admin.settings.create', compact('type_menu', 'type_setting'));
    }

    public function store(GeneralSettingRequest $request)
    {
        // User::find(auth()->user()->id)->checkRole('super-admin');
        $loggedInUserId = Auth::id();
        $data = $request->validated();

        $data['created_by'] = $loggedInUserId;
        $data['updated_by'] = $loggedInUserId;

        GeneralSetting::create($data);

        return redirect()->route('settings.index')->with('success', 'Setting created successfully!');
    }


    public function show(GeneralSetting $setting)
    {
        $type_menu = 'General Settings';
        return view('pages.admin.settings.show', compact('setting', 'type_menu'));
    }

    public function edit(GeneralSetting $setting)
    {
        // User::find(auth()->user()->id)->checkRole('super-admin');
        $type_menu = 'General Settings';
        $type_setting = 'edit';
        return view('pages.admin.settings.edit', compact('setting', 'type_menu', 'type_setting'));
    }

    public function update(GeneralSettingRequest $request, GeneralSetting $setting)
    {
        // User::find(auth()->user()->id)->checkRole('super-admin');
        $data = $request->validated();
        $loggedInUserId = Auth::id();
        $data['updated_by'] = $loggedInUserId;

        if (Str::contains($data['name_setting'], ['logo', 'image'])) {
            // Validasi dan simpan file logo

            if ($request->hasFile('value')) {
                // return $request;
                $imageFileName = $data['name_setting'] . '.' . $request->file('value')->getClientOriginalExtension();
                $request->file('value')->storeAs('public/uploads/settings', $imageFileName);
                // Hapus file lama jika berhasil mengupload file baru
                if ($setting->value) {
                    Storage::delete($setting->value);
                }
                // Update nilai dengan path gambar
                $data['value'] = 'uploads/settings/' . $imageFileName;
            }
        } else {
            $data['value'] = $request->value;
        }
        // return $data;

        $setting->update($data);

        return redirect()->back()->with('success', 'Setting updated successfully!');
    }

    public function destroy(GeneralSetting $setting)
    {
        // User::find(auth()->user()->id)->checkRole('super-admin');
        $setting->delete();
        Storage::delete('public/' . $setting->value);

        return redirect()->route('settings.index')->with('success', 'Setting deleted successfully!');
    }


    public function showType($type)
    {
        $type_menu = 'General Settings';

        if ($type == "other") {

            $excludeTypes = ['footer', 'contact', 'profil_company'];

            $settings = GeneralSetting::where(function ($query) use ($excludeTypes) {
                foreach ($excludeTypes as $type) {
                    $query->where('name_setting', 'not like', '%' . $type . '%');
                }
            })->get();
            return view('pages.admin.settings.index', compact('settings', 'type_menu'));
        }

        $settings = GeneralSetting::where('name_setting', 'like', '%' . $type . '%')->orderBy('name_setting')->get();

        return view('pages.admin.settings.index', compact('settings', 'type_menu'));
    }
}
