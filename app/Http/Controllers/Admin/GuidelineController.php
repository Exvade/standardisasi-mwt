<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guideline;
use Illuminate\Http\Request;

class GuidelineController extends Controller
{
    public function index()
    {
        $guidelines = Guideline::orderBy('order')->get();

        return view('admin.guidelines.index', compact('guidelines'));
    }

    public function create()
    {
        return view('admin.guidelines.form', ['guideline' => new Guideline]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'type' => 'required|in:UI,Database,Lainnya',
            'status' => 'required|in:draft,published',
            'order' => 'integer',
        ]);

        Guideline::create($data);

        return redirect()->route('admin.guidelines.index')->with('success', 'Panduan berhasil ditambahkan.');
    }

    public function edit(Guideline $guideline)
    {
        return view('admin.guidelines.form', compact('guideline'));
    }

    public function update(Request $request, Guideline $guideline)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'type' => 'required|in:UI,Database,Lainnya',
            'status' => 'required|in:draft,published',
            'order' => 'integer',
        ]);

        $guideline->update($data);

        return redirect()->route('admin.guidelines.index')->with('success', 'Panduan berhasil diperbarui.');
    }

    public function destroy(Guideline $guideline)
    {
        $guideline->delete();

        return redirect()->route('admin.guidelines.index')->with('success', 'Panduan berhasil dihapus.');
    }
}
