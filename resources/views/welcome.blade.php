@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
<!-- Hero Section -->
<div class="relative bg-brand-surface overflow-hidden border-b border-gray-100">
    <!-- Decorative blobs -->
    <div class="absolute top-0 -left-4 w-72 h-72 bg-green-200 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob"></div>
    <div class="absolute top-0 -right-4 w-72 h-72 bg-green-300 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 bg-brand-light rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob animation-delay-4000"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative z-10 py-16 md:py-24 lg:py-32 flex flex-col lg:flex-row items-center gap-12 lg:gap-8">
            
            <!-- Text Content -->
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <div class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-brand-dark text-xs font-semibold uppercase tracking-wide mb-6 border border-green-200">
                    <span class="flex h-2 w-2 rounded-full bg-brand-light mr-2 animate-pulse"></span>
                    MWT Standardization Hub
                </div>
                <h1 class="text-4xl font-heading font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl leading-tight tracking-tight">
                    <span class="block">Membangun Sistem</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-brand-dark to-brand-light pb-2">Lebih Cepat & Seragam</span>
                </h1>
                <p class="mt-4 max-w-md mx-auto lg:mx-0 text-base text-gray-600 sm:text-lg md:mt-6 md:text-xl md:max-w-3xl font-light">
                    Pusat referensi <em class="font-medium italic text-gray-800">Single Source of Truth</em> untuk para pengembang PT Mada Wikri Tunggal. Dapatkan panduan lengkap, aturan basis data, dan komponen UI siap pakai.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <button onclick="navigator.clipboard.writeText('git clone https://github.com/PT-MWT/starter-kit.git'); Swal.fire({icon: 'success', title: 'Berhasil', text: 'Perintah clone berhasil disalin!', toast: true, position: 'top-end', showConfirmButton: false, timer: 3000, timerProgressBar: true});" class="group flex items-center justify-center px-6 py-3.5 text-sm font-semibold rounded-full text-white bg-brand-dark hover:bg-green-900 shadow-lg shadow-green-900/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-light">
                        <svg class="w-5 h-5 mr-2.5 text-green-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                        Salin Perintah Clone
                    </button>
                    <a href="{{ route('public.downloads.index') }}" class="flex items-center justify-center px-6 py-3.5 text-sm font-semibold rounded-full text-gray-700 bg-white border border-gray-200 hover:bg-gray-50 hover:border-gray-300 shadow-sm transition-all duration-300">
                        Unduh Aset (.md)
                    </a>
                </div>
            </div>

            <!-- Graphic / Code Window -->
            <div class="w-full lg:w-1/2 relative">
                <div class="absolute inset-0 bg-gradient-to-tr from-brand-light to-brand-dark rounded-2xl transform rotate-3 scale-105 opacity-20 blur-xl animate-pulse"></div>
                <div class="relative rounded-2xl bg-[#0d1117] shadow-2xl border border-gray-800 overflow-hidden transform transition-transform hover:scale-[1.02] duration-500">
                    <div class="flex items-center px-4 py-3 bg-[#161b22] border-b border-gray-800">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                        </div>
                        <div class="ml-4 text-xs font-mono text-gray-500">app.blade.php</div>
                    </div>
                    <div class="p-6 text-sm font-mono text-gray-300 overflow-hidden relative">
                        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-brand-light to-transparent"></div>
                        <p><span class="text-[#ff7b72]">@@extends</span>(<span class="text-[#a5d6ff]">'layouts.mwt'</span>)</p>
                        <p class="mt-3"><span class="text-[#ff7b72]">@@section</span>(<span class="text-[#a5d6ff]">'content'</span>)</p>
                        <p class="pl-4 mt-1">&lt;<span class="text-[#7ee787]">div</span> <span class="text-[#79c0ff]">class</span>=<span class="text-[#a5d6ff]">"container mx-auto"</span>&gt;</p>
                        <p class="pl-8">&lt;<span class="text-[#7ee787]">h1</span> <span class="text-[#79c0ff]">class</span>=<span class="text-[#a5d6ff]">"text-brand-dark font-heading"</span>&gt;</p>
                        <p class="pl-12 text-gray-100">Selamat Bekerja, Developer!</p>
                        <p class="pl-8">&lt;/<span class="text-[#7ee787]">h1</span>&gt;</p>
                        <p class="pl-8 mt-1">&lt;<span class="text-[#7ee787]">x-button</span> <span class="text-[#79c0ff]">variant</span>=<span class="text-[#a5d6ff]">"primary"</span>&gt;</p>
                        <p class="pl-12 text-gray-100">Simpan Perubahan</p>
                        <p class="pl-8">&lt;/<span class="text-[#7ee787]">x-button</span>&gt;</p>
                        <p class="pl-4">&lt;/<span class="text-[#7ee787]">div</span>&gt;</p>
                        <p class="mt-1"><span class="text-[#ff7b72]">@@endsection</span></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Logo Cloud / Tech Stack -->
<div class="bg-white py-12 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-sm font-semibold uppercase text-gray-500 tracking-wider mb-8">Didukung oleh Teknologi Modern</p>
        <div class="flex justify-center items-center gap-8 md:gap-16 flex-wrap opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
            <!-- Tailwind Logo -->
            <div class="flex items-center gap-2">
                <svg class="w-8 h-8 text-[#06B6D4]" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/></svg>
                <span class="font-bold text-xl text-gray-800 tracking-tight">Tailwind</span>
            </div>
            <!-- Laravel Logo -->
            <div class="flex items-center gap-2">
                <svg class="w-8 h-8 text-[#FF2D20]" viewBox="0 0 24 24" fill="currentColor"><path d="M22.756 12L21.365 9.176l-8.62-5.467c-.45-.284-1.04-.284-1.49 0l-8.62 5.467L1.244 12l1.39 2.824 8.62 5.467c.45.284 1.04.284 1.49 0l8.62-5.467L22.756 12zm-4.708 0l-1.39 2.824-4.658 2.955-4.658-2.955-1.39-2.824 1.39-2.824 4.658-2.955 4.658 2.955 1.39 2.824z"/></svg>
                <span class="font-bold text-xl text-gray-800 tracking-tight">Laravel</span>
            </div>
            <!-- Alpine Logo -->
            <div class="flex items-center gap-2">
                <svg class="w-8 h-8 text-[#8BC0D0]" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12l-5.72 5.746-5.724-5.742 5.724-5.75L24 12zM5.72 6.254L0 12l5.72 5.746h11.44l-5.72-5.746 5.72-5.75H5.72z"/></svg>
                <span class="font-bold text-xl text-gray-800 tracking-tight">Alpine.js</span>
            </div>
            <!-- SQLite / DB -->
            <div class="flex items-center gap-2">
                <svg class="w-8 h-8 text-[#003B57]" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 4.02 2 6.5s4.48 4.5 10 4.5 10-2.02 10-4.5S17.52 2 12 2zm0 6.5c-4.42 0-8-1.57-8-3.5S7.58 1.5 12 1.5s8 1.57 8 3.5-3.58 3.5-8 3.5zm0 13c-5.52 0-10-2.02-10-4.5V11c0 2.48 4.48 4.5 10 4.5s10-2.02 10-4.5V17c0 2.48-4.48 4.5-10 4.5zm-8-4.5c0 1.93 3.58 3.5 8 3.5s8-1.57 8-3.5v-2.08c-2.31 1.25-5.12 1.98-8 1.98s-5.69-.73-8-1.98V17z"/></svg>
                <span class="font-bold text-xl text-gray-800 tracking-tight">Database</span>
            </div>
        </div>
    </div>
</div>

<!-- Mengapa Standardisasi Section -->
<div class="py-24 bg-brand-surface relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-brand-light font-semibold tracking-wide uppercase text-sm mb-3">Solusi Internal</h2>
            <h3 class="text-3xl md:text-4xl font-heading font-bold text-gray-900">Mengapa Kita Butuh Standardisasi?</h3>
            <p class="mt-4 text-gray-600 text-lg">Meninggalkan kebiasaan <em class="font-medium italic">spaghetti code</em> dan antarmuka yang tidak konsisten antar proyek.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Feature 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-shadow duration-300 relative overflow-hidden group">
                <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-green-50 transition-transform group-hover:scale-150 duration-500 ease-in-out"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center text-brand-dark mb-6">
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3 font-heading">Development Cepat</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Tidak perlu lagi memikirkan komponen UI dari nol. Semua tombol, *form*, dan tabel sudah tersedia. Tinggal panggil dan gunakan.
                    </p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-shadow duration-300 relative overflow-hidden group">
                <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-green-50 transition-transform group-hover:scale-150 duration-500 ease-in-out"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center text-brand-dark mb-6">
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3 font-heading">Error Terkendali</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Aturan baku terkait *Error Handling* dan *API Responses* membuat aplikasi terhindar dari *crash* tak terduga yang membingungkan *user*.
                    </p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-shadow duration-300 relative overflow-hidden group">
                <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-green-50 transition-transform group-hover:scale-150 duration-500 ease-in-out"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center text-brand-dark mb-6">
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3 font-heading">Onboarding Mudah</h4>
                    <p class="text-gray-600 leading-relaxed">
                        Developer baru tidak perlu menebak-nebak struktur folder atau cara merancang *database*. Semuanya tertulis rapi di satu portal.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Highlight Section: Komponen UI -->
<div class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <div>
                <h3 class="text-3xl font-heading font-bold text-gray-900 mb-6">Pustaka UI yang Konsisten</h3>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Jangan buang waktu mendesain dari awal. Kami telah mengumpulkan komponen-komponen antarmuka yang sudah disesuaikan dengan warna identitas *Brand* PT Mada Wikri Tunggal.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-brand-light mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Responsif di semua perangkat (Desktop, Tablet, Mobile)
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-brand-light mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Menggunakan sintaks Tailwind CSS V4 modern
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-6 h-6 text-brand-light mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Dilengkapi interaksi mulus dengan Alpine.js
                    </li>
                </ul>
                <a href="{{ route('public.components.index') }}" class="inline-flex items-center text-brand-dark font-bold hover:text-green-700 text-lg group transition-colors">
                    Lihat Katalog Komponen
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
            
            <div class="mt-12 lg:mt-0 relative">
                <!-- Floating Elements decoration -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-green-100 rounded-full mix-blend-multiply opacity-50 blur-2xl"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-brand-light rounded-full mix-blend-multiply opacity-30 blur-2xl"></div>
                
                <div class="bg-brand-surface rounded-2xl border border-gray-200 p-8 shadow-xl relative z-10">
                    <div class="space-y-6">
                        <!-- Simulated UI component -->
                        <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm border border-gray-100">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-gray-200"></div>
                                <div>
                                    <div class="h-4 w-24 bg-gray-300 rounded mb-2"></div>
                                    <div class="h-3 w-32 bg-gray-200 rounded"></div>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-brand-dark">Aktif</span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm border border-gray-100">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-gray-200"></div>
                                <div>
                                    <div class="h-4 w-24 bg-gray-300 rounded mb-2"></div>
                                    <div class="h-3 w-32 bg-gray-200 rounded"></div>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">Cuti</span>
                        </div>
                        <div class="pt-4 flex gap-3">
                            <button class="flex-1 py-2 bg-brand-dark rounded-md text-white font-medium text-sm">Simpan</button>
                            <button class="flex-1 py-2 bg-white border border-gray-300 rounded-md text-gray-700 font-medium text-sm">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tutorial / Cara Mulai Section -->
<div class="py-24 bg-brand-surface relative border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-brand-light font-semibold tracking-wide uppercase text-sm mb-3">Quick Start</h2>
            <h3 class="text-3xl md:text-4xl font-heading font-bold text-gray-900">Cara Memulai Proyek Baru</h3>
            <p class="mt-4 text-gray-600 text-lg">Hanya butuh 3 langkah sederhana untuk menjalankan aplikasi standar MWT di mesin lokal Anda.</p>
        </div>

        <div class="relative max-w-4xl mx-auto">
            <!-- Garis Penghubung (Desktop) -->
            <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-green-200"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Langkah 1 -->
                <div class="relative flex flex-col items-center text-center">
                    <div class="w-24 h-24 bg-white rounded-full border-4 border-green-100 shadow-lg flex items-center justify-center relative z-10 mb-6">
                        <span class="text-3xl font-heading font-extrabold text-brand-dark">1</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2 font-heading">Clone Starter Repo</h4>
                    <p class="text-gray-600 mb-4">Unduh repositori kerangka dasar yang sudah dilengkapi dengan Tailwind V4 dan konfigurasi standar.</p>
                    <div class="bg-gray-900 rounded-lg p-3 text-left w-full shadow-md">
                        <code class="text-green-400 text-xs font-mono">git clone https://github.com/PT-MWT/starter-kit.git</code>
                    </div>
                </div>

                <!-- Langkah 2 -->
                <div class="relative flex flex-col items-center text-center">
                    <div class="w-24 h-24 bg-white rounded-full border-4 border-green-100 shadow-lg flex items-center justify-center relative z-10 mb-6">
                        <span class="text-3xl font-heading font-extrabold text-brand-dark">2</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2 font-heading">Install Dependencies</h4>
                    <p class="text-gray-600 mb-4">Masuk ke dalam folder proyek dan pasang seluruh paket PHP maupun Node.js yang dibutuhkan.</p>
                    <div class="bg-gray-900 rounded-lg p-3 text-left w-full shadow-md">
                        <code class="text-yellow-300 text-xs font-mono">composer install<br>npm install</code>
                    </div>
                </div>

                <!-- Langkah 3 -->
                <div class="relative flex flex-col items-center text-center">
                    <div class="w-24 h-24 bg-white rounded-full border-4 border-green-100 shadow-lg flex items-center justify-center relative z-10 mb-6">
                        <span class="text-3xl font-heading font-extrabold text-brand-dark">3</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-2 font-heading">Siapkan Environment</h4>
                    <p class="text-gray-600 mb-4">Salin file .env, *generate application key*, dan jalankan server pengembangan lokal.</p>
                    <div class="bg-gray-900 rounded-lg p-3 text-left w-full shadow-md">
                        <code class="text-blue-300 text-xs font-mono">php artisan key:generate<br>npm run dev</code>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-brand-dark py-20 relative overflow-hidden">
    <div class="absolute inset-0">
        <svg class="absolute left-1/2 transform -translate-x-1/2 w-full h-full text-green-900 opacity-20" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="0,100 100,0 100,100" />
        </svg>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-heading font-extrabold text-white mb-6">Siap Menulis Kode yang Lebih Baik?</h2>
        <p class="text-green-100 text-lg mb-10 max-w-2xl mx-auto">
            Pelajari aturan basis data, struktur <em class="italic">error handling</em>, dan serahkan gaya visual kepada pustaka standardisasi ini. Mari membangun perangkat lunak kelas enterprise.
        </p>
        <a href="{{ route('public.guidelines.index') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-full text-brand-dark bg-white hover:bg-green-50 shadow-xl transition-all duration-300 transform hover:scale-105">
            Baca Panduan Sekarang
        </a>
    </div>
</div>
@endsection
