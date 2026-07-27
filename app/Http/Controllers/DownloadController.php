<?php

namespace App\Http\Controllers;

use App\Models\DownloadableAsset;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class DownloadController extends Controller
{
    public function index()
    {
        $assets = DownloadableAsset::where('status', 'published')->latest()->get();

        return view('public.downloads', compact('assets'));
    }

    public function downloadAll()
    {
        $assets = DownloadableAsset::where('status', 'published')->get();

        if ($assets->isEmpty()) {
            return back()->with('error', 'Tidak ada aset untuk diunduh.');
        }

        $zip = new ZipArchive;
        $zipFileName = 'mwt-standardisasi-assets-' . date('Ymd-His') . '.zip';
        $zipPath = storage_path('app/public/' . $zipFileName);

        if ($zip->open($zipPath, ZipArchive::CREATE) === TRUE) {
            foreach ($assets as $asset) {
                $filePath = storage_path('app/public/' . $asset->file_path);
                if (file_exists($filePath)) {
                    // Extract just the filename to put in the zip root
                    $basename = basename($asset->file_path);
                    $zip->addFile($filePath, $basename);
                }
            }
            $zip->close();
        } else {
            return back()->with('error', 'Gagal membuat file ZIP.');
        }

        return response()->download($zipPath)->deleteFileAfterSend(true);
    }
}
