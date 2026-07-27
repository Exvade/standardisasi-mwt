<?php

namespace App\Http\Controllers;

use App\Models\Guideline;
use Illuminate\Support\Str;

class GuidelineDocController extends Controller
{
    public function index()
    {
        $guidelines = Guideline::where('status', 'published')->orderBy('order')->get();

        if ($guidelines->count() > 0) {
            return redirect()->route('public.guidelines.show', $guidelines->first()->id);
        }

        return view('public.guidelines.index', compact('guidelines'));
    }

    public function show($id)
    {
        $allGuidelines = Guideline::where('status', 'published')->orderBy('order')->get();
        $guideline = Guideline::where('status', 'published')->findOrFail($id);

        // Simple Markdown parser (jika butuh yang kompleks bisa pakai Parsedown, dll)
        // Sementara kita replace basic markdown:
        // bold: **text** -> <strong>text</strong>
        // italic: *text* -> <em>text</em>
        // headers: # text -> <h1>text</h1>
        // headers: ## text -> <h2>text</h2>
        // newlines -> <br>

        // This is a naive implementation, ideally use a markdown package,
        // but for now we'll use Illuminate\Support\Str::markdown (available in newer Laravel)
        $parsedContent = Str::markdown($guideline->content);

        return view('public.guidelines.show', compact('allGuidelines', 'guideline', 'parsedContent'));
    }
}
