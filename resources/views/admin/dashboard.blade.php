@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Ringkasan Sistem</h1>
    <p class="text-gray-600">Selamat datang di Panel Admin Portal Standardisasi MWT.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Card Kategori -->
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100 flex items-center">
        <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
        </div>
        <div>
            <p class="text-sm text-gray-500 font-medium">Total Kategori</p>
            <p class="text-2xl font-bold text-gray-800">{{ $stats['categories'] }}</p>
        </div>
    </div>

    <!-- Card Komponen UI -->
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100 flex items-center">
        <div class="p-3 rounded-full bg-brand-light bg-opacity-20 text-brand-dark mr-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
        </div>
        <div>
            <p class="text-sm text-gray-500 font-medium">Komponen UI</p>
            <p class="text-2xl font-bold text-gray-800">{{ $stats['components'] }}</p>
        </div>
    </div>

    <!-- Card Panduan -->
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100 flex items-center">
        <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
        </div>
        <div>
            <p class="text-sm text-gray-500 font-medium">Panduan Tersedia</p>
            <p class="text-2xl font-bold text-gray-800">{{ $stats['guidelines'] }}</p>
        </div>
    </div>

    <!-- Card Aset -->
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100 flex items-center">
        <div class="p-3 rounded-full bg-orange-100 text-orange-600 mr-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
        </div>
        <div>
            <p class="text-sm text-gray-500 font-medium">Aset Unduhan</p>
            <p class="text-2xl font-bold text-gray-800">{{ $stats['assets'] }}</p>
        </div>
    </div>
</div>
@endsection
