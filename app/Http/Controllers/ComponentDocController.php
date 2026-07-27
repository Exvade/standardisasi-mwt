<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Component;

class ComponentDocController extends Controller
{
    public function index()
    {
        $categories = Category::with(['components' => function ($q) {
            $q->where('status', 'published');
        }])->orderBy('order')->get();

        // Pilih komponen pertama jika ada, atau tampilkan halaman kosong
        $firstComponent = null;
        foreach ($categories as $category) {
            if ($category->components->count() > 0) {
                $firstComponent = $category->components->first();
                break;
            }
        }

        if ($firstComponent) {
            return redirect()->route('public.components.show', $firstComponent->id);
        }

        return view('public.components.index', compact('categories'));
    }

    public function show($id)
    {
        $categories = Category::with(['components' => function ($q) {
            $q->where('status', 'published');
        }])->orderBy('order')->get();

        $component = Component::where('status', 'published')->findOrFail($id);

        return view('public.components.show', compact('categories', 'component'));
    }
}
