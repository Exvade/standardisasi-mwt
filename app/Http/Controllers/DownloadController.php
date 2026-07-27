<?php

namespace App\Http\Controllers;

use App\Models\DownloadableAsset;

class DownloadController extends Controller
{
    public function index()
    {
        $assets = DownloadableAsset::where('status', 'published')->latest()->get();

        return view('public.downloads', compact('assets'));
    }
}
