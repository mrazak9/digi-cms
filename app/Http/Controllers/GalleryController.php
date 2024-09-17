<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        $type_menu = 'settings';
        return view('pages.admin.galleries.index', compact('galleries', 'type_menu'));
    }

    public function add($post_id)
    {
        $type_menu = 'settings';
        $galleries = Gallery::where('post_id', $post_id)->get();
        $post = Post::findOrFail($post_id);
        return view('pages.admin.posts.add_gallery', compact('type_menu', 'post', 'galleries'));
    }

    public function store(GalleryRequest $request)
    {
        $validatedData = $request->validated();
        $loggedInUserId = Auth::id();
        $validatedData['created_by'] = $loggedInUserId;
        $validatedData['updated_by'] = $loggedInUserId;
        // Upload Image
        if ($request->hasFile('content')) {
            $randomNumbers = rand(1, 999);
            $imageFileName = $validatedData['alt_text'] . '.' . $request->file('content')->getClientOriginalExtension();
            $request->file('content')->storeAs('public/uploads/posts/' . $validatedData['post_id'] . '/', $randomNumbers . $imageFileName);
            $validatedData['content'] = 'uploads/posts/' . $validatedData['post_id'] . '/' . $randomNumbers . $imageFileName;
        }

        Gallery::create($validatedData);
        return redirect()->back()->with('success', 'Setting updated successfully!');
        // return redirect()->route('galleries.index')->with('success', 'Gallery created successfully');
    }

    public function show(Gallery $gallery)
    {
        return view('pages.admin.galleries.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        return view('pages.admin.galleries.edit', compact('gallery'));
    }

    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $validatedData = $request->validated();

        $loggedInUserId = Auth::id();
        $validatedData['updated_by'] = $loggedInUserId;
        $gallery->update($validatedData);

        return redirect()->route('galleries.index')->with('success', 'Gallery updated successfully');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        Storage::delete('public/' . $gallery->content);


        return redirect()->back()->with('success', 'Setting updated successfully!');
    }
}
