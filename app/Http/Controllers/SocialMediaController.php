<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialMediaRequest;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialMediaController extends Controller
{
    public function index()
    {
        $socialMedias = SocialMedia::paginate(10);
        $type_menu = 'settings';
        return view('pages.admin.social_medias.index', compact('socialMedias', 'type_menu'));
    }

    public function create()
    {
        $type_menu = 'settings';
        return view('pages.admin.social_medias.create', compact('type_menu'));
    }

    public function store(SocialMediaRequest $request)
    {
        $validatedData = $request->validated();
        $loggedInUserId = Auth::id();
        $validatedData['created_by'] = $loggedInUserId;
        $validatedData['updated_by'] = $loggedInUserId;
        $socialMedia = SocialMedia::create($validatedData);

        return redirect()->route('social_medias.index')->with('success', 'Social Media created successfully');
    }

    public function show(SocialMedia $socialMedia)
    {
        $type_menu = 'settings';
        return view('pages.admin.social_medias.show', compact('socialMedia', 'type_menu'));
    }

    public function edit($id)
    {
        $socialMedia = SocialMedia::findOrFail($id);

        $type_menu = 'settings';
        return view('pages.admin.social_medias.edit', compact('socialMedia', 'type_menu'));
    }

    public function update(SocialMediaRequest $request, SocialMedia $socialMedia)
    {
        $validatedData = $request->validated();
        $loggedInUserId = Auth::id();
        $validatedData['updated_by'] = $loggedInUserId;
        $socialMedia->update($validatedData);

        return redirect()->route('social_medias.index')->with('success', 'Social Media updated successfully');
    }

    public function destroy(SocialMedia $socialMedia)
    {
        $socialMedia->delete();

        return redirect()->route('social_medias.index')->with('success', 'Social Media deleted successfully');
    }
}
