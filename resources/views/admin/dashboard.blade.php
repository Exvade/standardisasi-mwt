@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-heading font-extrabold text-gray-900 tracking-tight">Ringkasan Sistem</h1>
    <p class="text-gray-500 mt-1">Selamat datang di Panel Admin Portal Standardisasi MWT.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
    <!-- Card Kategori -->
    <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 relative overflow-hidden group hover:shadow-md transition-shadow">
        <div class="absolute -right-6 -top-6 w-24 h-24 bg-blue-50 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
        <div class="relative z-10 flex justify-between items-start">
            <div>
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Total Kategori</p>
                <p class="text-4xl font-extrabold text-gray-900">{{ $stats['categories'] }}</p>
            </div>
            <div class="p-3 rounded-xl bg-blue-100 text-blue-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
            </div>
        </div>
    </div>

    <!-- Card Komponen UI -->
    <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 relative overflow-hidden group hover:shadow-md transition-shadow">
        <div class="absolute -right-6 -top-6 w-24 h-24 bg-green-50 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
        <div class="relative z-10 flex justify-between items-start">
            <div>
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Komponen UI</p>
                <p class="text-4xl font-extrabold text-gray-900">{{ $stats['components'] }}</p>
            </div>
            <div class="p-3 rounded-xl bg-green-100 text-green-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
            </div>
        </div>
    </div>

    <!-- Card Panduan -->
    <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 relative overflow-hidden group hover:shadow-md transition-shadow">
        <div class="absolute -right-6 -top-6 w-24 h-24 bg-purple-50 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
        <div class="relative z-10 flex justify-between items-start">
            <div>
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Panduan Terbit</p>
                <p class="text-4xl font-extrabold text-gray-900">{{ $stats['guidelines'] }}</p>
            </div>
            <div class="p-3 rounded-xl bg-purple-100 text-purple-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
            </div>
        </div>
    </div>

    <!-- Card Aset -->
    <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 relative overflow-hidden group hover:shadow-md transition-shadow">
        <div class="absolute -right-6 -top-6 w-24 h-24 bg-orange-50 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
        <div class="relative z-10 flex justify-between items-start">
            <div>
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Aset Unduhan</p>
                <p class="text-4xl font-extrabold text-gray-900">{{ $stats['assets'] }}</p>
            </div>
            <div class="p-3 rounded-xl bg-orange-100 text-orange-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            </div>
        </div>
    </div>
</div>
@endsection
