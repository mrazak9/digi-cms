<?php

namespace App\Http\Controllers;

use App\Http\Requests\FooterColumnRequest;
use App\Models\FooterColumn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FooterColumnController extends Controller
{
    public function index()
    {
        $type_menu = 'General Settings';
        $footerColumns = FooterColumn::paginate(10);
        return view('pages.admin.footer_columns.index', compact('footerColumns', 'type_menu'));
    }

    public function create()
    {
        $type_menu = 'General Settings';
        return view('pages.admin.footer_columns.create', compact('type_menu'));
    }

    public function store(FooterColumnRequest $request)
    {
        $validatedData = $request->validated();
        $loggedInUserId = Auth::id();
        $validatedData['created_by'] = $loggedInUserId;
        $validatedData['updated_by'] = $loggedInUserId;
        $footerColumn = FooterColumn::create($validatedData);

        return redirect()->route('footer_columns.index')->with('success', 'Footer Column created successfully');
    }

    public function show(FooterColumn $footerColumn)
    {
        $type_menu = 'General Settings';
        return view('pages.admin.footer_columns.show', compact('footerColumn', 'type_menu'));
    }

    public function edit(FooterColumn $footerColumn)
    {
        $type_menu = 'General Settings';
        return view('pages.admin.footer_columns.edit', compact('footerColumn', 'type_menu'));
    }

    public function update(FooterColumnRequest $request, FooterColumn $footerColumn)
    {
        $validatedData = $request->validated();
        $loggedInUserId = Auth::id();
        $data['updated_by'] = $loggedInUserId;

        $footerColumn->update($validatedData);

        return redirect()->route('footer_columns.index')->with('success', 'Footer Column updated successfully');
    }

    public function destroy(FooterColumn $footerColumn)
    {
        $footerColumn->delete();

        return redirect()->route('footer_columns.index')->with('success', 'Footer Column deleted successfully');
    }
}
