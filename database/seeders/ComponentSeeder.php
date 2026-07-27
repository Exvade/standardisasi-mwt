<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Component;
use Illuminate\Support\Str;

class ComponentSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Kategori
        $catElements = Category::firstOrCreate(['name' => 'Elements', 'slug' => 'elements'], ['order' => 1]);
        $catDashboard = Category::firstOrCreate(['name' => 'Dashboard Widgets', 'slug' => 'dashboard-widgets'], ['order' => 2]);
        $catForms = Category::firstOrCreate(['name' => 'Forms', 'slug' => 'forms'], ['order' => 3]);
        $catData = Category::firstOrCreate(['name' => 'Data Display', 'slug' => 'data-display'], ['order' => 4]);

        // 2. Buat Komponen: Tombol & Badge
        $buttonCode = <<<'HTML'
<!-- Tombol Primer (Brand Dark) -->
<button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-brand-dark hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-light transition-colors">
    Simpan Data
</button>

<!-- Tombol Sekunder (Brand Light) -->
<button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-brand-light hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-light transition-colors">
    Tambah Baru
</button>

<!-- Tombol Outline -->
<button type="button" class="inline-flex items-center px-4 py-2 border border-brand-dark text-sm font-medium rounded-md text-brand-dark bg-transparent hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-light transition-colors">
    Batal
</button>

<!-- Badge Aktif -->
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-brand-dark border border-green-200">
    Aktif
</span>
HTML;

        Component::updateOrCreate(
            ['title' => 'Buttons & Badges'],
            [
                'category_id' => $catElements->id,
                'description' => 'Varian tombol standar aplikasi internal MWT beserta lencana status.',
                'version' => 'v1.0',
                'status' => 'published',
                'code_snippet' => $buttonCode,
                'preview_html' => '<div class="flex flex-wrap items-center gap-4">' . $buttonCode . '</div>'
            ]
        );

        // 3. Buat Komponen: Kartu Statistik
        $statCode = <<<'HTML'
<div class="bg-white overflow-hidden shadow rounded-lg border border-gray-200 w-full max-w-sm">
    <div class="p-5">
        <div class="flex items-center">
            <div class="flex-shrink-0 bg-brand-dark rounded-md p-3">
                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
            <div class="ml-5 w-0 flex-1">
                <dl>
                    <dt class="text-sm font-medium text-gray-500 truncate">Total Karyawan</dt>
                    <dd class="flex items-baseline">
                        <div class="text-2xl font-semibold text-gray-900">1,240</div>
                        <div class="ml-2 flex items-baseline text-sm font-semibold text-brand-light">
                            <svg class="self-center flex-shrink-0 h-4 w-4 text-brand-light" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Naik</span>
                            12%
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>
HTML;
        
        Component::updateOrCreate(
            ['title' => 'Statistik Dashboard'],
            [
                'category_id' => $catDashboard->id,
                'description' => 'Kartu widget untuk menampilkan metrik data di halaman depan.',
                'version' => 'v1.0',
                'status' => 'published',
                'code_snippet' => $statCode,
                'preview_html' => $statCode
            ]
        );

        // 4. Buat Komponen: Form Input
        $formBlade = <<<'BLADE'
<!-- Standar form input di file Blade -->
<div>
    <label for="email" class="block text-sm font-medium text-brand-dark">Alamat Email</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <!-- Input dengan ring focus brand-light -->
        <input type="email" name="email" id="email" class="focus:ring-brand-light focus:border-brand-light block w-full sm:text-sm border-gray-300 rounded-md py-2 px-3 border" placeholder="nama@mwt.com" value="{{ old('email') }}">
    </div>
    <!-- Menampilkan pesan error validasi Laravel -->
    @error('email')
        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
    @enderror
</div>
BLADE;
        $formPreview = <<<'HTML'
<div class="w-full max-w-sm">
    <label for="email" class="block text-sm font-medium text-brand-dark">Alamat Email</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <input type="email" name="email" id="email" class="focus:ring-brand-light focus:border-brand-light block w-full sm:text-sm border-gray-300 rounded-md py-2 px-3 border" placeholder="nama@mwt.com">
    </div>
</div>
HTML;
        Component::updateOrCreate(
            ['title' => 'Form Input Standar'],
            [
                'category_id' => $catForms->id,
                'description' => 'Input text/email dengan style ring focus hijau.',
                'version' => 'v1.0',
                'status' => 'published',
                'code_snippet' => $formBlade,
                'preview_html' => $formPreview
            ]
        );

        // 5. Buat Komponen: Tabel Data
        $tableCode = <<<'HTML'
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-brand-dark">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Nama Karyawan</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Divisi</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Status</th>
              <th scope="col" class="relative px-6 py-3"><span class="sr-only">Aksi</span></th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <!-- Baris Tabel -->
            <tr class="hover:bg-gray-50 transition-colors">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900">Andi Saputra</div>
                <div class="text-sm text-gray-500">andi@mwt.com</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">IT Support</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-brand-dark">Aktif</span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-brand-light hover:text-green-700">Edit</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
HTML;
        Component::updateOrCreate(
            ['title' => 'Tabel Data'],
            [
                'category_id' => $catData->id,
                'description' => 'Desain tabel utama dengan header Brand Dark.',
                'version' => 'v1.0',
                'status' => 'published',
                'code_snippet' => $tableCode,
                'preview_html' => $tableCode
            ]
        );
    }
}
