<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DownloadableAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssetController extends Controller
{
    public function index()
    {
        $assets = DownloadableAsset::latest()->get();

        return view('admin.assets.index', compact('assets'));
    }

    public function create()
    {
        return view('admin.assets.form', ['asset' => new DownloadableAsset]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'file_name' => 'required|string|max:255',
            'version' => 'nullable|string|max:50',
            'status' => 'required|in:draft,published',
            'file' => 'required|file|max:10240', // max 10MB
        ]);

        $path = $request->file('file')->store('assets', 'public');
        $data['file_path'] = $path;
        unset($data['file']);

        DownloadableAsset::create($data);

        return redirect()->route('admin.assets.index')->with('success', 'Aset berhasil diunggah.');
    }

    public function edit(DownloadableAsset $asset)
    {
        return view('admin.assets.form', compact('asset'));
    }

    public function update(Request $request, DownloadableAsset $asset)
    {
        $data = $request->validate([
            'file_name' => 'required|string|max:255',
            'version' => 'nullable|string|max:50',
            'status' => 'required|in:draft,published',
            'file' => 'nullable|file|max:10240',
        ]);

        if ($request->hasFile('file')) {
            if ($asset->file_path && Storage::disk('public')->exists($asset->file_path)) {
                Storage::disk('public')->delete($asset->file_path);
            }
            $data['file_path'] = $request->file('file')->store('assets', 'public');
        }
        unset($data['file']);

        $asset->update($data);

        return redirect()->route('admin.assets.index')->with('success', 'Aset berhasil diperbarui.');
    }

    public function destroy(DownloadableAsset $asset)
    {
        if ($asset->file_path && Storage::disk('public')->exists($asset->file_path)) {
            Storage::disk('public')->delete($asset->file_path);
        }
        $asset->delete();

        return redirect()->route('admin.assets.index')->with('success', 'Aset berhasil dihapus.');
    }
}
