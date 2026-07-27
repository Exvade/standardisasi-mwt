@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-brand-surface dark:bg-gray-900 overflow-hidden border-b border-gray-100 dark:border-gray-800">
        <!-- Decorative blobs -->
        <div
            class="absolute top-0 -left-4 w-72 h-72 bg-green-200 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob">
        </div>
        <div
            class="absolute top-0 -right-4 w-72 h-72 bg-green-300 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob animation-delay-2000">
        </div>
        <div
            class="absolute -bottom-8 left-20 w-72 h-72 bg-brand-light rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob animation-delay-4000">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative z-10 py-16 md:py-24 lg:py-32 flex flex-col lg:flex-row items-center gap-12 lg:gap-8">

                <!-- Text Content -->
                <div class="w-full lg:w-1/2 text-center lg:text-left">
                    <div
                        class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-brand-dark text-xs font-semibold uppercase tracking-wide mb-6 border border-green-200">
                        <span class="flex h-2 w-2 rounded-full bg-brand-light mr-2 animate-pulse"></span>
                        MWT Standardization Hub
                    </div>
                    <h1
                        class="text-4xl font-heading font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl leading-tight tracking-tight">
                        <span class="block">Membangun Sistem</span>
                        <span
                            class="block text-transparent bg-clip-text bg-gradient-to-r from-brand-dark dark:from-brand-light to-brand-light dark:to-green-300 pb-2">Lebih
                            Cepat & Seragam</span>
                    </h1>
                    <p
                        class="mt-4 max-w-md mx-auto lg:mx-0 text-base text-gray-600 dark:text-gray-300 sm:text-lg md:mt-6 md:text-xl md:max-w-3xl font-light">
                        Pusat referensi <em class="font-medium italic text-gray-800 dark:text-gray-200">Single Source of
                            Truth</em> untuk para pengembang PT Mada Wikri Tunggal. Dapatkan panduan lengkap, aturan basis
                        data, dan komponen UI siap pakai.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                        <button
                            onclick="navigator.clipboard.writeText('git clone https://github.com/PT-MWT/starter-kit.git'); Swal.fire({icon: 'success', title: 'Berhasil', text: 'Perintah clone berhasil disalin!', toast: true, position: 'top-end', showConfirmButton: false, timer: 3000, timerProgressBar: true});"
                            class="group flex items-center justify-center px-6 py-3.5 text-sm font-semibold rounded-full text-white bg-brand-dark hover:bg-green-900 shadow-lg shadow-green-900/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-light">
                            <svg class="w-5 h-5 mr-2.5 text-green-400 group-hover:text-white transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                </path>
                            </svg>
                            Salin Perintah Clone
                        </button>
                        <a href="{{ route('public.downloads.index') }}"
                            class="flex items-center justify-center px-6 py-3.5 text-sm font-semibold rounded-full text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 shadow-sm transition-all duration-300">
                            Unduh Aset (.md)
                        </a>
                    </div>
                </div>

                <!-- Graphic / Code Window -->
                <div class="w-full lg:w-1/2 relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-tr from-brand-light to-brand-dark rounded-2xl transform rotate-3 scale-105 opacity-20 blur-xl animate-pulse">
                    </div>
                    <div
                        class="relative rounded-2xl bg-[#0d1117] shadow-2xl border border-gray-800 overflow-hidden transform transition-transform hover:scale-[1.02] duration-500">
                        <div class="flex items-center px-4 py-3 bg-[#161b22] border-b border-gray-800">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                                <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                                <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                            </div>
                            <div class="ml-4 text-xs font-mono text-gray-500">app.blade.php</div>
                        </div>
                        <div class="p-6 text-sm font-mono text-gray-300 overflow-hidden relative">
                            <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-brand-light to-transparent">
                            </div>
                            <p><span class="text-[#ff7b72]">@@extends</span>(<span
                                    class="text-[#a5d6ff]">'layouts.mwt'</span>)</p>
                            <p class="mt-3"><span class="text-[#ff7b72]">@@section</span>(<span
                                    class="text-[#a5d6ff]">'content'</span>)</p>
                            <p class="pl-4 mt-1">&lt;<span class="text-[#7ee787]">div</span> <span
                                    class="text-[#79c0ff]">class</span>=<span class="text-[#a5d6ff]">"container
                                    mx-auto"</span>&gt;</p>
                            <p class="pl-8">&lt;<span class="text-[#7ee787]">h1</span> <span
                                    class="text-[#79c0ff]">class</span>=<span class="text-[#a5d6ff]">"text-brand-dark
                                    font-heading"</span>&gt;</p>
                            <p class="pl-12 text-gray-100">Selamat Bekerja, Developer!</p>
                            <p class="pl-8">&lt;/<span class="text-[#7ee787]">h1</span>&gt;</p>
                            <p class="pl-8 mt-1">&lt;<span class="text-[#7ee787]">x-button</span> <span
                                    class="text-[#79c0ff]">variant</span>=<span class="text-[#a5d6ff]">"primary"</span>&gt;
                            </p>
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
    <div class="bg-white dark:bg-gray-800 py-12 border-b border-gray-100 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-sm font-semibold uppercase text-gray-500 dark:text-gray-400 tracking-wider mb-8">
                Didukung oleh Teknologi Modern</p>
            <div class="flex justify-center items-center gap-8 md:gap-16 flex-wrap transition-all duration-500">
                <!-- Tailwind Logo -->
                <div class="flex items-center gap-2 group cursor-default">
                    <svg class="w-8 h-8 text-[#38B2AC] group-hover:scale-110 transition-transform" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z" />
                    </svg>
                    <span class="font-bold text-xl text-gray-800 dark:text-gray-200 tracking-tight">Tailwind</span>
                </div>
                <!-- Laravel Logo -->
                <div class="flex items-center gap-2 group cursor-default">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32"
                        class="w-8 h-8 text-[#FF2D20] group-hover:scale-110 transition-transform">
                        <path d="M0 0h32v32H0z" fill="none" />
                        <path fill="#ff5252"
                            d="M31.963 9.12c-.008-.03-.023-.056-.034-.085a1 1 0 0 0-.07-.156a2 2 0 0 0-.162-.205a1 1 0 0 0-.088-.072a1 1 0 0 0-.083-.068l-.044-.02l-.035-.024l-6-3a1 1 0 0 0-.894 0l-6 3l-.035.024l-.044.02a1 1 0 0 0-.083.068a.7.7 0 0 0-.187.191a1 1 0 0 0-.064.086a1 1 0 0 0-.069.156c-.01.029-.026.055-.034.085a1 1 0 0 0-.037.265v5.382l-4 2V5.385a1 1 0 0 0-.037-.265c-.008-.03-.023-.056-.034-.085a1 1 0 0 0-.07-.156a1 1 0 0 0-.063-.086a.7.7 0 0 0-.187-.191a1 1 0 0 0-.083-.068l-.044-.02l-.035-.024l-6-3a1 1 0 0 0-.894 0l-6 3l-.035.024l-.044.02a1 1 0 0 0-.083.068a1 1 0 0 0-.088.072a1 1 0 0 0-.1.119a1 1 0 0 0-.063.086a1 1 0 0 0-.069.156c-.01.029-.026.055-.034.085A1 1 0 0 0 0 5.385v19a1 1 0 0 0 .553.894l6 3l6 3c.014.007.03.005.046.011a.9.9 0 0 0 .802 0c.015-.006.032-.004.046-.01l12-6a1 1 0 0 0 .553-.895v-5.382l5.447-2.724a1 1 0 0 0 .553-.894v-6a1 1 0 0 0-.037-.265M9.236 21.385l4.211-2.106h.001L19 16.503l3.764 1.882L13 23.267ZM24 13.003v3.764l-4-2v-3.764Zm1-5.5l3.764 1.882L25 11.267l-3.764-1.882ZM8 19.767V9.003l4-2v10.764ZM7 3.503l3.764 1.882L7 7.267L3.236 5.385Zm-5 3.5l4 2v16.764l-4-2Zm6 16l4 2v3.764l-4-2Zm16 .764l-10 5v-3.764l10-5Zm6-9l-4 2v-3.764l4-2Z" />
                    </svg>

                    <span class="font-bold text-xl text-gray-800 dark:text-gray-200 tracking-tight">Laravel</span>
                </div>
                <!-- Alpine Logo -->
                <div class="flex items-center gap-2 group cursor-default">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 256 118"
                        class="w-8 h-8 text-[#8BC0D0] group-hover:scale-110 transition-transform">
                        <path d="M0 0h256v118H0z" fill="none" />
                        <path fill="#77c1d2" d="M199.111 0L256 56.639l-56.889 56.64l-56.889-56.64z" />
                        <path fill="#2d3441" d="m56.889 0l117.938 117.421H61.049L0 56.639z" />
                    </svg>

                    <span class="font-bold text-xl text-gray-800 dark:text-gray-200 tracking-tight">Alpine.js</span>
                </div>
                <!-- Database -->
                <div class="flex items-center gap-2 group cursor-default">
                    <svg class="w-8 h-8 text-gray-600 dark:text-gray-400 group-hover:scale-110 transition-transform"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                        </path>
                    </svg>
                    <span class="font-bold text-xl text-gray-800 dark:text-gray-200 tracking-tight">Database</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Mengapa Standardisasi Section -->
    <div class="py-24 bg-brand-surface dark:bg-gray-900 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-brand-light font-semibold tracking-wide uppercase text-sm mb-3">Solusi Internal</h2>
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 dark:text-white">Mengapa Kita Butuh
                    Standardisasi?</h3>
                <p class="mt-4 text-gray-600 dark:text-gray-400 text-lg">Meninggalkan kebiasaan <em
                        class="font-medium italic">spaghetti code</em> dan antarmuka yang tidak konsisten antar proyek.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Feature 1 -->
                <div
                    class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-xl transition-shadow duration-300 relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-green-50 dark:bg-green-900/20 transition-transform group-hover:scale-150 duration-500 ease-in-out">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 bg-green-100 dark:bg-green-900/40 rounded-xl flex items-center justify-center text-brand-dark dark:text-brand-light mb-6">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-3 font-heading">Development Cepat
                        </h4>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Tidak perlu lagi memikirkan komponen UI dari nol. Semua tombol, <span
                                class="italic font-medium">form</span>, dan tabel sudah tersedia. Tinggal panggil dan
                            gunakan.
                        </p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div
                    class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-xl transition-shadow duration-300 relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-green-50 dark:bg-green-900/20 transition-transform group-hover:scale-150 duration-500 ease-in-out">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 bg-green-100 dark:bg-green-900/40 rounded-xl flex items-center justify-center text-brand-dark dark:text-brand-light mb-6">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-3 font-heading">Error Terkendali</h4>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Aturan baku terkait <span class="italic font-medium">Error Handling</span> dan <span
                                class="italic font-medium">API Responses</span> membuat aplikasi terhindar dari <span
                                class="italic font-medium">crash</span> tak terduga yang membingungkan <span
                                class="italic font-medium">user</span>.
                        </p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div
                    class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700 hover:shadow-xl transition-shadow duration-300 relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-green-50 dark:bg-green-900/20 transition-transform group-hover:scale-150 duration-500 ease-in-out">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 bg-green-100 dark:bg-green-900/40 rounded-xl flex items-center justify-center text-brand-dark dark:text-brand-light mb-6">
                            <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-3 font-heading">Onboarding Mudah</h4>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Developer baru tidak perlu menebak-nebak struktur folder atau cara merancang <span
                                class="italic font-medium">database</span>. Semuanya tertulis rapi di satu portal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Highlight Section: Komponen UI -->
    <div class="py-24 bg-white dark:bg-gray-800 overflow-hidden relative">
        <!-- Background Decor -->
        <div
            class="absolute inset-y-0 right-0 w-1/2 bg-gradient-to-l from-green-50 to-transparent dark:from-green-900/10 dark:to-transparent">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-brand-light font-semibold tracking-wide uppercase text-sm mb-3">Pustaka Komponen</h2>
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 dark:text-white mb-6">Antarmuka yang
                    Indah & Konsisten</h3>
                <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                    Ribuan jam telah dihemat dengan tidak mendesain ulang elemen yang sama. Kami telah merangkai
                    komponen-komponen siap pakai yang estetis, fungsional, dan sepenuhnya mematuhi identitas <span
                        class="italic font-medium">Brand</span> PT MWT.
                </p>
            </div>

            <!-- Showcase Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

                <!-- Column 1: Stats & Alerts -->
                <div class="space-y-8">
                    <!-- Stat Card -->
                    <div
                        class="bg-white dark:bg-gray-900 p-6 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-800 transform transition-transform hover:-translate-y-1 hover:shadow-2xl duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-sm font-semibold text-gray-500 dark:text-gray-400">Total Pengguna</h4>
                            <span
                                class="flex items-center text-xs font-bold text-green-600 bg-green-100 dark:bg-green-900/30 dark:text-green-400 px-2 py-1 rounded-full">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                                12.5%
                            </span>
                        </div>
                        <div class="text-3xl font-extrabold text-gray-900 dark:text-white font-heading">8,429</div>
                        <div class="mt-4 w-full bg-gray-100 dark:bg-gray-800 rounded-full h-1.5">
                            <div class="bg-brand-light h-1.5 rounded-full" style="width: 70%"></div>
                        </div>
                    </div>

                    <!-- Alert/Notification -->
                    <div class="bg-blue-50 dark:bg-blue-900/20 border-l-4 border-blue-500 p-4 rounded-r-xl shadow-md">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-blue-800 dark:text-blue-300">Pembaruan Sistem</h3>
                                <p class="text-sm text-blue-700 dark:text-blue-400 mt-1">Versi terbaru portal telah dirilis
                                    dengan fitur dark mode.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Data List (Center - Larger) -->
                <div
                    class="bg-brand-surface dark:bg-gray-900 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-2xl relative lg:col-span-1 transform transition-transform hover:-translate-y-1 hover:shadow-2xl duration-300">
                    <div
                        class="absolute -top-6 -right-6 w-24 h-24 bg-brand-light rounded-full mix-blend-multiply opacity-40 blur-xl">
                    </div>
                    <div
                        class="p-6 border-b border-gray-100 dark:border-gray-800 flex justify-between items-center relative z-10">
                        <h4 class="font-bold text-gray-900 dark:text-white">Data Karyawan</h4>
                        <button class="p-1 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300"><svg
                                class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                                </path>
                            </svg></button>
                    </div>
                    <div class="p-0">
                        <!-- List Item 1 -->
                        <div
                            class="flex items-center justify-between p-4 bg-white dark:bg-gray-900 border-b border-gray-50 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-gradient-to-tr from-brand-dark to-brand-light flex items-center justify-center text-white font-bold text-sm shadow-inner">
                                    AS</div>
                                <div>
                                    <div class="text-sm font-bold text-gray-900 dark:text-white">Ahmad Santoso</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">IT Developer</div>
                                </div>
                            </div>
                            <span
                                class="px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 dark:bg-green-900/40 text-green-700 dark:text-green-400 ring-1 ring-green-600/20">Aktif</span>
                        </div>
                        <!-- List Item 2 -->
                        <div
                            class="flex items-center justify-between p-4 bg-white dark:bg-gray-900 border-b border-gray-50 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-600 dark:text-gray-300 font-bold text-sm shadow-inner">
                                    BW</div>
                                <div>
                                    <div class="text-sm font-bold text-gray-900 dark:text-white">Budi Wibowo</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">HR Manager</div>
                                </div>
                            </div>
                            <span
                                class="px-2.5 py-1 rounded-full text-xs font-semibold bg-red-100 dark:bg-red-900/40 text-red-700 dark:text-red-400 ring-1 ring-red-600/20">Cuti</span>
                        </div>
                        <!-- List Item 3 -->
                        <div
                            class="flex items-center justify-between p-4 bg-white dark:bg-gray-900 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors rounded-b-2xl">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-gradient-to-tr from-blue-600 to-blue-400 flex items-center justify-center text-white font-bold text-sm shadow-inner">
                                    CW</div>
                                <div>
                                    <div class="text-sm font-bold text-gray-900 dark:text-white">Citra Wijaya</div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">Finance</div>
                                </div>
                            </div>
                            <span
                                class="px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 dark:bg-green-900/40 text-green-700 dark:text-green-400 ring-1 ring-green-600/20">Aktif</span>
                        </div>
                    </div>
                </div>

                <!-- Column 3: Forms & Buttons -->
                <div class="space-y-8">
                    <!-- Form Group -->
                    <div
                        class="bg-white dark:bg-gray-900 p-6 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-800 transform transition-transform hover:-translate-y-1 hover:shadow-2xl duration-300">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Alamat Email</label>
                        <div class="relative rounded-md shadow-sm mb-4">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                    </path>
                                </svg>
                            </div>
                            <input type="email"
                                class="focus:ring-brand-light focus:border-brand-light block w-full pl-10 sm:text-sm border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white rounded-md py-2.5 transition-colors"
                                placeholder="nama@madawikri.com" value="developer@madawikri.com">
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <label class="flex items-center">
                                <input type="checkbox" checked
                                    class="rounded border-gray-300 text-brand-dark focus:ring-brand-light dark:border-gray-600 dark:bg-gray-700 dark:checked:bg-brand-dark">
                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Ingat saya</span>
                            </label>
                            <!-- Toggle Switch -->
                            <button type="button"
                                class="bg-brand-dark relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-light"
                                role="switch" aria-checked="true">
                                <span aria-hidden="true"
                                    class="translate-x-5 pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                            </button>
                        </div>

                        <div class="flex gap-3">
                            <button type="button"
                                class="flex-1 inline-flex justify-center items-center px-4 py-2 border border-gray-300 dark:border-gray-600 shadow-sm text-sm font-medium rounded-md text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-light transition-colors">
                                Batal
                            </button>
                            <button type="button"
                                class="flex-1 inline-flex justify-center items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-brand-dark hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-light transition-colors">
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-16 text-center">
                <a href="{{ route('public.components.index') }}"
                    class="inline-flex items-center text-brand-dark dark:text-brand-light font-bold hover:text-green-700 dark:hover:text-white text-lg group transition-colors px-6 py-3 rounded-full bg-green-50 dark:bg-gray-900 border border-green-100 dark:border-gray-700 hover:border-green-200 dark:hover:border-gray-600 shadow-sm">
                    Jelajahi Katalog Komponen Lengkap
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Tutorial / Cara Mulai Section -->
    <div class="py-24 bg-brand-surface dark:bg-gray-900 relative border-t border-gray-100 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-brand-light font-semibold tracking-wide uppercase text-sm mb-3">Quick Start</h2>
                <h3 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 dark:text-white">Cara Memulai Proyek
                    Baru</h3>
                <p class="mt-4 text-gray-600 dark:text-gray-400 text-lg">Hanya butuh 3 langkah sederhana untuk menjalankan
                    aplikasi standar MWT di mesin lokal Anda.</p>
            </div>

            <div class="relative max-w-4xl mx-auto">
                <!-- Garis Penghubung (Desktop) -->
                <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-green-200 dark:bg-green-900"></div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <!-- Langkah 1 -->
                    <div class="relative flex flex-col items-center text-center">
                        <div
                            class="w-24 h-24 bg-white dark:bg-gray-800 rounded-full border-4 border-green-100 dark:border-green-900 shadow-lg flex items-center justify-center relative z-10 mb-6">
                            <span
                                class="text-3xl font-heading font-extrabold text-brand-dark dark:text-brand-light">1</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2 font-heading">Clone Starter Repo
                        </h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Unduh repositori kerangka dasar yang sudah
                            dilengkapi dengan Tailwind V4 dan konfigurasi standar.</p>
                        <div class="bg-gray-900 rounded-lg p-3 text-left w-full shadow-md">
                            <code class="text-green-400 text-xs font-mono">git clone
                                https://github.com/PT-MWT/starter-kit.git</code>
                        </div>
                    </div>

                    <!-- Langkah 2 -->
                    <div class="relative flex flex-col items-center text-center">
                        <div
                            class="w-24 h-24 bg-white dark:bg-gray-800 rounded-full border-4 border-green-100 dark:border-green-900 shadow-lg flex items-center justify-center relative z-10 mb-6">
                            <span
                                class="text-3xl font-heading font-extrabold text-brand-dark dark:text-brand-light">2</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2 font-heading">Install Dependencies
                        </h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Masuk ke dalam folder proyek dan pasang seluruh
                            paket PHP maupun Node.js yang dibutuhkan.</p>
                        <div class="bg-gray-900 rounded-lg p-3 text-left w-full shadow-md">
                            <code class="text-yellow-300 text-xs font-mono">composer install<br>npm install</code>
                        </div>
                    </div>

                    <!-- Langkah 3 -->
                    <div class="relative flex flex-col items-center text-center">
                        <div
                            class="w-24 h-24 bg-white dark:bg-gray-800 rounded-full border-4 border-green-100 dark:border-green-900 shadow-lg flex items-center justify-center relative z-10 mb-6">
                            <span
                                class="text-3xl font-heading font-extrabold text-brand-dark dark:text-brand-light">3</span>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2 font-heading">Siapkan Environment
                        </h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">Salin file .env, <span
                                class="italic font-medium">generate application key</span>, dan jalankan server
                            pengembangan lokal.</p>
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
            <svg class="absolute left-1/2 transform -translate-x-1/2 w-full h-full text-green-900 opacity-20"
                fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="0,100 100,0 100,100" />
            </svg>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-heading font-extrabold text-white mb-6">Siap Menulis Kode yang Lebih Baik?
            </h2>
            <p class="text-green-100 text-lg mb-10 max-w-2xl mx-auto">
                Pelajari aturan basis data, struktur <em class="italic">error handling</em>, dan serahkan gaya visual
                kepada pustaka standardisasi ini. Mari membangun perangkat lunak kelas enterprise.
            </p>
            <a href="{{ route('public.guidelines.index') }}"
                class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-full text-brand-dark bg-white hover:bg-green-50 shadow-xl transition-all duration-300 transform hover:scale-105">
                Baca Panduan Sekarang
            </a>
        </div>
    </div>
@endsection
