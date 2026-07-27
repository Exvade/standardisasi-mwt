<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Component;
use Illuminate\Database\Seeder;

class DummyComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        if ($categories->isEmpty()) {
            return;
        }

        $components = [
            [
                'category_id' => $categories->where('slug', 'elements')->first()->id ?? 1,
                'title' => 'Primary Button',
                'description' => 'Tombol utama untuk aksi penting seperti menyimpan form atau aksi konfirmasi.',
                'code_snippet' => '<button class="px-4 py-2 bg-brand-dark text-white rounded-md hover:bg-green-800 transition-colors">Primary Button</button>',
                'preview_html' => '<button class="px-4 py-2 bg-brand-dark text-white rounded-md hover:bg-green-800 transition-colors">Primary Button</button>',
                'status' => 'published',
                'version' => '1.0.0',
            ],
            [
                'category_id' => $categories->where('slug', 'elements')->first()->id ?? 1,
                'title' => 'Secondary Button',
                'description' => 'Tombol sekunder untuk aksi batal atau aksi minor.',
                'code_snippet' => '<button class="px-4 py-2 border border-gray-300 text-gray-700 bg-white rounded-md hover:bg-gray-50 transition-colors dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-700">Secondary Button</button>',
                'preview_html' => '<button class="px-4 py-2 border border-gray-300 text-gray-700 bg-white rounded-md hover:bg-gray-50 transition-colors dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-700">Secondary Button</button>',
                'status' => 'published',
                'version' => '1.0.0',
            ],
            [
                'category_id' => $categories->where('slug', 'elements')->first()->id ?? 1,
                'title' => 'Success Badge',
                'description' => 'Badge untuk menandakan status sukses atau aktif.',
                'code_snippet' => '<span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 ring-1 ring-green-600/20 dark:bg-green-900/40 dark:text-green-400">Aktif</span>',
                'preview_html' => '<span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700 ring-1 ring-green-600/20 dark:bg-green-900/40 dark:text-green-400">Aktif</span>',
                'status' => 'published',
                'version' => '1.0.0',
            ],
            [
                'category_id' => $categories->where('slug', 'elements')->first()->id ?? 1,
                'title' => 'Danger Badge',
                'description' => 'Badge untuk menandakan status error, bahaya atau tidak aktif.',
                'code_snippet' => '<span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-700 ring-1 ring-red-600/20 dark:bg-red-900/40 dark:text-red-400">Error</span>',
                'preview_html' => '<span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-700 ring-1 ring-red-600/20 dark:bg-red-900/40 dark:text-red-400">Error</span>',
                'status' => 'published',
                'version' => '1.0.0',
            ],
            [
                'category_id' => $categories->where('slug', 'forms')->first()->id ?? 3,
                'title' => 'Email Input',
                'description' => 'Input form untuk email dengan icon.',
                'code_snippet' => '<div class="relative rounded-md shadow-sm"><div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg></div><input type="email" class="focus:ring-brand-light focus:border-brand-light block w-full pl-10 sm:text-sm border-gray-300 rounded-md py-2 dark:border-gray-700 dark:bg-gray-800 dark:text-white" placeholder="nama@madawikri.com"></div>',
                'preview_html' => '<div class="relative rounded-md shadow-sm max-w-sm"><div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"><svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg></div><input type="email" class="focus:ring-brand-light focus:border-brand-light block w-full pl-10 sm:text-sm border-gray-300 rounded-md py-2 dark:border-gray-700 dark:bg-gray-800 dark:text-white" placeholder="nama@madawikri.com"></div>',
                'status' => 'published',
                'version' => '1.0.0',
            ],
            [
                'category_id' => $categories->where('slug', 'forms')->first()->id ?? 3,
                'title' => 'Toggle Switch',
                'description' => 'Toggle switch ala iOS.',
                'code_snippet' => '<button type="button" class="bg-brand-dark relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-light"><span aria-hidden="true" class="translate-x-5 pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span></button>',
                'preview_html' => '<button type="button" class="bg-brand-dark relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-light"><span aria-hidden="true" class="translate-x-5 pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span></button>',
                'status' => 'published',
                'version' => '1.0.0',
            ],
            [
                'category_id' => $categories->where('slug', 'dashboard-widgets')->first()->id ?? 2,
                'title' => 'Stats Card',
                'description' => 'Kartu untuk menampilkan ringkasan data statistik.',
                'code_snippet' => '<div class="bg-white p-6 rounded-xl border border-gray-200 dark:bg-gray-800 dark:border-gray-700"><div class="text-sm font-semibold text-gray-500 mb-1 dark:text-gray-400">Total Penjualan</div><div class="text-3xl font-bold text-gray-900 dark:text-white">Rp 2.450.000</div><div class="mt-2 text-sm text-green-600 dark:text-green-400 font-medium">↑ 12% dari bulan lalu</div></div>',
                'preview_html' => '<div class="bg-white p-6 rounded-xl border border-gray-200 max-w-sm dark:bg-gray-800 dark:border-gray-700"><div class="text-sm font-semibold text-gray-500 mb-1 dark:text-gray-400">Total Penjualan</div><div class="text-3xl font-bold text-gray-900 dark:text-white">Rp 2.450.000</div><div class="mt-2 text-sm text-green-600 dark:text-green-400 font-medium">↑ 12% dari bulan lalu</div></div>',
                'status' => 'published',
                'version' => '1.0.0',
            ],
            [
                'category_id' => $categories->where('slug', 'data-display')->first()->id ?? 4,
                'title' => 'User List Item',
                'description' => 'Menampilkan ringkasan data user dalam list.',
                'code_snippet' => '<div class="flex items-center gap-4"><div class="w-10 h-10 rounded-full bg-brand-light text-white flex items-center justify-center font-bold">AS</div><div><div class="font-bold text-gray-900 dark:text-white">Ahmad Santoso</div><div class="text-sm text-gray-500 dark:text-gray-400">ahmad@mwt.co.id</div></div></div>',
                'preview_html' => '<div class="flex items-center gap-4"><div class="w-10 h-10 rounded-full bg-brand-light text-white flex items-center justify-center font-bold">AS</div><div><div class="font-bold text-gray-900 dark:text-white">Ahmad Santoso</div><div class="text-sm text-gray-500 dark:text-gray-400">ahmad@mwt.co.id</div></div></div>',
                'status' => 'published',
                'version' => '1.0.0',
            ],
            [
                'category_id' => $categories->where('slug', 'data-display')->first()->id ?? 4,
                'title' => 'Info Alert',
                'description' => 'Notifikasi informatif berwarna biru.',
                'code_snippet' => '<div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-r-md dark:bg-blue-900/20"><div class="flex"><div class="flex-shrink-0"><svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg></div><div class="ml-3"><p class="text-sm text-blue-700 dark:text-blue-300">Pembaruan telah berhasil diterapkan ke sistem Anda.</p></div></div></div>',
                'preview_html' => '<div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-r-md dark:bg-blue-900/20 max-w-md"><div class="flex"><div class="flex-shrink-0"><svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg></div><div class="ml-3"><p class="text-sm text-blue-700 dark:text-blue-300">Pembaruan telah berhasil diterapkan ke sistem Anda.</p></div></div></div>',
                'status' => 'published',
                'version' => '1.0.0',
            ]
        ];

        foreach ($components as $component) {
            Component::firstOrCreate(
                ['title' => $component['title']],
                $component
            );
        }
    }
}
