<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::paginate(10);
        $type_menu = 'settings';
        return view('pages.admin.sliders.index', compact('sliders', 'type_menu'));
    }

    public function create()
    {
        $type_menu = 'settings';
        return view('pages.admin.sliders.create', compact('type_menu'));
    }

    public function store(SliderRequest $request)
    {
        $validatedData = $request->validated();
        $loggedInUserId = Auth::id();
        $validatedData['created_by'] = $loggedInUserId;
        $validatedData['updated_by'] = $loggedInUserId;
        $title = strtolower(str_replace(' ', '_', $validatedData['title']));

        // Upload Image
        if ($request->hasFile('slider_photo')) {
            $imageFileName = $title . '.' . $request->file('slider_photo')->getClientOriginalExtension();
            $request->file('slider_photo')->storeAs('public/uploads/slider_photo', $imageFileName);
            $validatedData['slider_photo'] = 'uploads/slider_photo/' . $imageFileName;
        }

        $slider = Slider::create($validatedData);

        return redirect()->route('sliders.index')->with('success', 'Slider created successfully');
    }

    public function show(Slider $slider)
    {
        $type_menu = 'settings';
        return view('pages.admin.sliders.show', compact('slider', 'type_menu'));
    }

    public function edit(Slider $slider)
    {
        $type_menu = 'settings';
        return view('pages.admin.sliders.edit', compact('slider', 'type_menu'));
    }

    public function update(SliderRequest $request, Slider $slider)
    {
        $validatedData = $request->validated();
        $loggedInUserId = Auth::id();
        $validatedData['updated_by'] = $loggedInUserId;
        $title = strtolower(str_replace(' ', '_', $validatedData['title']));

        if ($request->hasFile('slider_photo')) {
            $imageFileName = $title . '.' . $request->file('slider_photo')->getClientOriginalExtension();
            $request->file('slider_photo')->storeAs('public/uploads/slider_photo/', $imageFileName);
            $validatedData['slider_photo'] = 'uploads/slider_photo/' . $imageFileName;

            // Hapus file lama jika berhasil mengupload file baru
            if ($slider->slider_photo) {
                Storage::delete($slider->slider_photo);
            }
        }

        $slider->update($validatedData);

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('sliders.index')->with('success', 'Slider deleted successfully');
    }
}
