<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index()
    {
        $components = Component::with('category')->latest()->get();

        return view('admin.components.index', compact('components'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.components.form', ['component' => new Component, 'categories' => $categories]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'code_snippet' => 'required|string',
            'preview_html' => 'required|string',
            'status' => 'required|in:draft,published',
            'version' => 'nullable|string|max:50',
        ]);

        Component::create($data);

        return redirect()->route('admin.components.index')->with('success', 'Komponen UI berhasil ditambahkan.');
    }

    public function edit(Component $component)
    {
        $categories = Category::orderBy('name')->get();

        return view('admin.components.form', compact('component', 'categories'));
    }

    public function update(Request $request, Component $component)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'code_snippet' => 'required|string',
            'preview_html' => 'required|string',
            'status' => 'required|in:draft,published',
            'version' => 'nullable|string|max:50',
        ]);

        $component->update($data);

        return redirect()->route('admin.components.index')->with('success', 'Komponen UI berhasil diperbarui.');
    }

    public function destroy(Component $component)
    {
        $component->delete();

        return redirect()->route('admin.components.index')->with('success', 'Komponen UI berhasil dihapus.');
    }
}
