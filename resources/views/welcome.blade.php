@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
<!-- Hero Section -->
<div class="bg-brand-surface py-20 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl tracking-tight font-extrabold text-brand-dark sm:text-5xl md:text-6xl">
            <span class="block">Standardisasi</span>
            <span class="block text-brand-light">PT Mada Wikri Tunggal</span>
        </h1>
        <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
            Pusat referensi dan sumber kebenaran tunggal (*Single Source of Truth*) untuk seluruh *developer* MWT. Temukan komponen UI yang konsisten, panduan basis data, dan aset pendukung proyek di sini.
        </p>
        <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
            <div class="rounded-md shadow w-full sm:w-auto mb-3 sm:mb-0">
                <button onclick="navigator.clipboard.writeText('git clone https://github.com/PT-MWT/starter-kit.git'); alert('Perintah clone berhasil disalin!');" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-brand-dark hover:bg-green-800 md:py-4 md:text-lg transition cursor-pointer">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    Salin Link Clone Starter Repo
                </button>
            </div>
            <div class="rounded-md shadow sm:ml-3 w-full sm:w-auto">
                <a href="{{ route('public.downloads.index') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-brand-dark bg-white hover:bg-gray-50 md:py-4 md:text-lg transition border-gray-200">
                    Unduh File Aset (.md)
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="text-center p-6 rounded-lg bg-brand-surface border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-md bg-brand-light text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <h3 class="mt-5 text-lg font-medium text-brand-dark">UI Konsisten</h3>
                <p class="mt-2 text-base text-gray-500">
                    Gunakan komponen siap pakai yang telah disesuaikan dengan identitas *brand* perusahaan untuk mempercepat *development*.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="text-center p-6 rounded-lg bg-brand-surface border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-md bg-brand-light text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="mt-5 text-lg font-medium text-brand-dark">Panduan Jelas</h3>
                <p class="mt-2 text-base text-gray-500">
                    Tidak ada lagi *error handling* yang cacat. Ikuti panduan standardisasi struktur proyek dan *database* yang sudah disetujui.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="text-center p-6 rounded-lg bg-brand-surface border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-md bg-brand-light text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                </div>
                <h3 class="mt-5 text-lg font-medium text-brand-dark">Aset Pendukung</h3>
                <p class="mt-2 text-base text-gray-500">
                    Unduh file *starter template*, ikon, hingga aset *guideline* secara langsung untuk mempercepat inisialisasi proyek baru.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
