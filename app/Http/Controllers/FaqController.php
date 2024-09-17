<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::paginate(10);
        $type_menu = 'faq';
        return view('pages.admin.faqs.index', compact('faqs', 'type_menu'));
    }

    public function create()
    {
        return view('pages.admin.faqs.create', ['type_menu' => 'faq']);
    }

    public function store(FaqRequest $request)
    {
        $data = $request->validated();
        $loggedInUserId = Auth::id();
        $data['created_by'] = $loggedInUserId;
        $data['updated_by'] = $loggedInUserId;
        Faq::create($data);

        return redirect()->route('faqs.index')->with('success', 'Faq created successfully!');
    }

    public function show(Faq $faq)
    {
        $type_menu = 'faq';
        return view('pages.admin.faqs.show', compact('faq', 'type_menu'));
    }

    public function edit(Faq $faq)
    {
        $type_menu = 'faq';
        return view('pages.admin.faqs.edit', compact('faq', 'type_menu'));
    }

    public function update(FaqRequest $request, Faq $faq)
    {
        $data = $request->validated();
        $loggedInUserId = Auth::id();
        $data['updated_by'] = $loggedInUserId;
        $faq->update($data);

        return redirect()->route('faqs.index')->with('success', 'Faq updated successfully!');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faqs.index')->with('success', 'Faq deleted successfully!');
    }
}
