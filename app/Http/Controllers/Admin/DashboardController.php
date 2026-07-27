<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Component;
use App\Models\DownloadableAsset;
use App\Models\Guideline;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'categories' => Category::count(),
            'components' => Component::count(),
            'guidelines' => Guideline::count(),
            'assets' => DownloadableAsset::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
