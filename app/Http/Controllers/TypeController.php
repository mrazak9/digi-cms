<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        $type_menu = 'post_settings';
        return view('pages.admin.types.index', compact('types', 'type_menu'));
    }

    public function create()
    {
        return view('pages.admin.types.create', ['type_menu' => 'post_settings']);
    }

    public function store(TypeRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = auth()->id();
        $data['updated_by'] = auth()->id();
        Type::create($data);

        return redirect()->route('types.index')->with('success', 'Type created successfully!');
    }

    public function show(Type $type)
    {
        $type_menu = 'post_settings';
        return view('pages.admin.types.show', compact('type', 'type_menu'));
    }

    public function edit(Type $type)
    {
        $type_menu = 'post_settings';
        return view('pages.admin.types.edit', compact('type', 'type_menu'));
    }

    public function update(TypeRequest $request, Type $type)
    {
        $data = $request->validated();
        $data['updated_by'] = auth()->id();
        $type->slug = null;
        $type->update($data);

        return redirect()->route('types.index')->with('success', 'Type updated successfully!');
    }

    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->route('types.index')->with('success', 'Type deleted successfully!');
    }
}
