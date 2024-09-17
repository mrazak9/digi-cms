<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $type_menu = 'post_settings';
        return view('pages.admin.categories.index', compact('categories', 'type_menu'));
    }

    public function create()
    {
        $type_menu = 'post_settings';
        return view('pages.admin.categories.create', compact('type_menu'));
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = auth()->id();
        $data['updated_by'] = auth()->id();
        Category::create($data);

        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }

    public function show(Category $category)
    {
        $type_menu = 'post_settings';
        return view('pages.admin.categories.show', compact('category', 'type_menu'));
    }

    public function edit(Category $category)
    {
        $type_menu = 'post_settings';
        return view('pages.admin.categories.edit', compact('category', 'type_menu'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $data['updated_by'] = auth()->id();
        $category->update($data);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }

    function add(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $data['created_by'] = auth()->id();
        $data['updated_by'] = auth()->id();
        $category->create($data);
        return redirect()->back()->with('success', 'Setting updated successfully!');
    }
}
