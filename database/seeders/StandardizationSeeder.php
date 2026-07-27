<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DownloadableAsset;
use App\Models\Guideline;
use Illuminate\Support\Facades\Storage;

class StandardizationSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Tambahkan ke DownloadableAssets
        $assets = [
            ['file_name' => 'Panduan UI/UX (Markdown)', 'file_path' => 'assets/mwt-ui-ux.md', 'version' => 'v1.0'],
            ['file_name' => 'Panduan Error Handling (Markdown)', 'file_path' => 'assets/mwt-error-handling.md', 'version' => 'v1.0'],
            ['file_name' => 'Panduan Database (Markdown)', 'file_path' => 'assets/mwt-database.md', 'version' => 'v1.0'],
            ['file_name' => 'Panduan Git Workflow (Markdown)', 'file_path' => 'assets/mwt-git-workflow.md', 'version' => 'v1.0'],
        ];

        foreach ($assets as $asset) {
            DownloadableAsset::updateOrCreate(
                ['file_path' => $asset['file_path']],
                [
                    'file_name' => $asset['file_name'],
                    'version' => $asset['version'],
                    'status' => 'published'
                ]
            );
        }

        // 2. Tambahkan ke Guidelines untuk dibaca langsung
        // Membaca isi file jika ada
        $uiContent = Storage::disk('public')->exists('assets/mwt-ui-ux.md') ? Storage::disk('public')->get('assets/mwt-ui-ux.md') : 'Konten UI';
        $errorContent = Storage::disk('public')->exists('assets/mwt-error-handling.md') ? Storage::disk('public')->get('assets/mwt-error-handling.md') : 'Konten Error';
        $dbContent = Storage::disk('public')->exists('assets/mwt-database.md') ? Storage::disk('public')->get('assets/mwt-database.md') : 'Konten DB';
        $gitContent = Storage::disk('public')->exists('assets/mwt-git-workflow.md') ? Storage::disk('public')->get('assets/mwt-git-workflow.md') : 'Konten Git';

        $guidelines = [
            ['title' => 'Panduan UI/UX & Frontend', 'type' => 'UI', 'content' => $uiContent, 'order' => 1],
            ['title' => 'Panduan Error Handling', 'type' => 'Lainnya', 'content' => $errorContent, 'order' => 2],
            ['title' => 'Panduan Struktur Database', 'type' => 'Database', 'content' => $dbContent, 'order' => 3],
            ['title' => 'Panduan Git Workflow', 'type' => 'Lainnya', 'content' => $gitContent, 'order' => 4],
        ];

        foreach ($guidelines as $g) {
            Guideline::updateOrCreate(
                ['title' => $g['title']],
                [
                    'type' => $g['type'],
                    'content' => $g['content'],
                    'order' => $g['order'],
                    'status' => 'published'
                ]
            );
        }
    }
}
