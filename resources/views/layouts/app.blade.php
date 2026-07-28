<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') - MWT Portal</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="{{ asset('storage/assets/logo-square.webp') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Prevent Dark Mode FOUC (Flash of Unstyled Content) -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        :root {
            --font-sans: 'Inter', sans-serif;
            --font-heading: 'Outfit', sans-serif;
        }
        body { font-family: var(--font-sans); }
        h1, h2, h3, h4, h5, h6, .font-heading { font-family: var(--font-heading); }
    </style>
    
    <!-- Highlight.js for Code Syntax Highlighting -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('pre code').forEach((el) => {
                hljs.highlightElement(el);
            });
        });
    </script>
</head>
<body x-data="{ 
        darkMode: localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches),
        searchOpen: false
      }" 
      x-init="$watch('darkMode', val => { localStorage.setItem('theme', val ? 'dark' : 'light'); if(val) { document.documentElement.classList.add('dark'); } else { document.documentElement.classList.remove('dark'); } })" 
      :class="{ 'dark': darkMode }"
      class="bg-brand-surface dark:bg-gray-900 font-sans text-brand-text dark:text-gray-100 flex flex-col min-h-screen transition-colors duration-300">
    
    <!-- Navbar -->
    <header x-data="{ mobileMenuOpen: false }" class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800 sticky top-0 z-50 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo & Nav Desktop -->
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="flex items-center gap-2">
                            <!-- Placeholder Logo Landscape -->
                            <img src="{{ asset('storage/assets/logo-landscape.png') }}" alt="MWT Portal" class="h-8 w-auto dark:hidden block">
                            <img src="{{ asset('storage/assets/logo-landscape-light.png') }}" alt="MWT Portal" class="h-8 w-auto hidden dark:block">
                            <!-- Jika belum ada gambar logo, ganti dengan text ini:
                            <span class="text-2xl font-bold text-brand-dark dark:text-white tracking-tighter">MWT Portal</span>
                            -->
                        </a>
                    </div>
                    <nav class="hidden sm:ml-8 sm:flex sm:space-x-8">
                        <a href="{{ route('public.components.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('public.components.*') ? 'border-brand-light text-brand-dark dark:text-white font-semibold' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-600' }} text-sm font-medium transition-colors">
                            Komponen UI
                        </a>
                        <a href="{{ route('public.guidelines.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('public.guidelines.*') ? 'border-brand-light text-brand-dark dark:text-white font-semibold' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-600' }} text-sm font-medium transition-colors">
                            Panduan
                        </a>
                        <a href="{{ route('public.downloads.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('public.downloads.*') ? 'border-brand-light text-brand-dark dark:text-white font-semibold' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-600' }} text-sm font-medium transition-colors">
                            Aset Unduhan
                        </a>
                    </nav>
                </div>
                
                <!-- Right Side Actions Desktop -->
                <div class="hidden sm:ml-6 sm:flex sm:items-center space-x-4">
                    <!-- Global Search Trigger -->
                    <button @click="searchOpen = true" class="text-gray-400 hover:text-brand-dark dark:hover:text-brand-light transition flex items-center p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800" title="Cari (Ctrl+K)">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                    
                    <!-- Dark Mode Toggle -->
                    <button @click="darkMode = !darkMode" class="text-gray-400 hover:text-brand-dark dark:hover:text-brand-light transition p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800">
                        <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                        <svg x-show="darkMode" class="w-5 h-5" style="display: none;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </button>

                </div>

                <!-- Mobile Menu Button -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-brand-light">
                        <span class="sr-only">Buka menu utama</span>
                        <svg x-show="!mobileMenuOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="mobileMenuOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" class="sm:hidden bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700" style="display: none;">
            <div class="pt-2 pb-3 space-y-1">
                <a href="{{ route('public.components.index') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('public.components.*') ? 'border-brand-light text-brand-dark dark:text-white bg-green-50 dark:bg-gray-800' : 'border-transparent text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 hover:border-gray-300 dark:hover:border-gray-700' }} text-base font-medium">Komponen UI</a>
                <a href="{{ route('public.guidelines.index') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('public.guidelines.*') ? 'border-brand-light text-brand-dark dark:text-white bg-green-50 dark:bg-gray-800' : 'border-transparent text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 hover:border-gray-300 dark:hover:border-gray-700' }} text-base font-medium">Panduan</a>
                <a href="{{ route('public.downloads.index') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('public.downloads.*') ? 'border-brand-light text-brand-dark dark:text-white bg-green-50 dark:bg-gray-800' : 'border-transparent text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 hover:border-gray-300 dark:hover:border-gray-700' }} text-base font-medium">Aset Unduhan</a>
                
                <!-- Search & Theme Mobile -->
                <button @click="searchOpen = true; mobileMenuOpen = false" class="w-full text-left block pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 text-base font-medium">
                    <div class="flex items-center"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg> Cari (Ctrl+K)</div>
                </button>
                <button @click="darkMode = !darkMode" class="w-full text-left block pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 text-base font-medium">
                    <div class="flex items-center">
                        <svg x-show="!darkMode" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                        <svg x-show="darkMode" class="w-5 h-5 mr-2" style="display: none;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <span x-text="darkMode ? 'Terang' : 'Gelap'"></span>
                    </div>
                </button>

            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Command Palette (Global Search) -->
    <div x-data="{ 
            search: '', 
            results: [],
            isLoading: false,
            fetchResults() {
                if (this.search.length < 2) {
                    this.results = [];
                    return;
                }
                this.isLoading = true;
                fetch('{{ route('api.search') }}?q=' + encodeURIComponent(this.search))
                    .then(res => res.json())
                    .then(data => {
                        this.results = data.results;
                        this.isLoading = false;
                    });
            },
            init() {
                this.$watch('searchOpen', value => {
                    if (value) {
                        setTimeout(() => this.$refs.searchInput.focus(), 100);
                    } else {
                        this.search = '';
                        this.results = [];
                    }
                })
            }
         }" 
         @keydown.window.ctrl.k.prevent="searchOpen = true"
         @keydown.window.meta.k.prevent="searchOpen = true"
         @keydown.escape.window="searchOpen = false"
         x-show="searchOpen" 
         class="fixed inset-0 z-[100] overflow-y-auto pt-[10vh] sm:pt-[20vh] px-4 pb-20"
         style="display: none;">
        
        <!-- Backdrop -->
        <div x-show="searchOpen" 
             x-transition.opacity.duration.300ms
             @click="searchOpen = false"
             class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm transition-opacity"></div>
             
        <!-- Modal -->
        <div x-show="searchOpen"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="relative mx-auto max-w-2xl bg-white rounded-2xl shadow-2xl ring-1 ring-black/5 overflow-hidden">
             
            <!-- Search Input -->
            <div class="relative flex items-center border-b border-gray-100 px-4">
                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input x-model="search" 
                       @input.debounce.300ms="fetchResults"
                       x-ref="searchInput"
                       type="text" 
                       class="w-full bg-transparent border-0 focus:ring-0 py-5 pl-4 pr-12 text-gray-900 placeholder-gray-400 text-lg outline-none" 
                       placeholder="Cari komponen, panduan, aset..." 
                       autofocus>
                
                <div class="absolute right-4 text-xs font-semibold text-gray-400 bg-gray-100 px-2 py-1 rounded">ESC</div>
            </div>

            <!-- Results -->
            <div class="max-h-[60vh] overflow-y-auto px-2 py-4">
                <!-- Empty State -->
                <div x-show="search.length === 0" class="px-6 py-14 text-center text-sm sm:px-14">
                    <svg class="mx-auto h-8 w-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    <p class="mt-4 font-semibold text-gray-900">Mulai Mengetik...</p>
                    <p class="mt-2 text-gray-500">Cari informasi seputar standarisasi MWT.</p>
                </div>

                <!-- Loading State -->
                <div x-show="isLoading" class="px-6 py-14 text-center text-sm sm:px-14">
                    <div class="inline-block animate-spin rounded-full h-8 w-8 border-4 border-gray-200 border-t-brand-light"></div>
                    <p class="mt-4 font-semibold text-gray-900">Mencari...</p>
                </div>

                <!-- No Results -->
                <div x-show="!isLoading && search.length >= 2 && results.length === 0" class="px-6 py-14 text-center text-sm sm:px-14" style="display: none;">
                    <svg class="mx-auto h-8 w-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="mt-4 font-semibold text-gray-900">Tidak ada hasil ditemukan.</p>
                    <p class="mt-2 text-gray-500">Coba gunakan kata kunci lain.</p>
                </div>

                <!-- Result List -->
                <ul x-show="!isLoading && results.length > 0" class="space-y-1" style="display: none;">
                    <template x-for="result in results" :key="result.id">
                        <li>
                            <a :href="result.url" class="flex items-center px-4 py-3 hover:bg-green-50 rounded-xl transition-colors group">
                                <div class="bg-gray-100 p-2 rounded-lg group-hover:bg-white transition-colors" x-html="result.icon"></div>
                                <div class="ml-4 flex-auto">
                                    <p class="text-sm font-medium text-gray-900 group-hover:text-brand-dark" x-text="result.title"></p>
                                    <p class="text-xs text-gray-500" x-text="result.type"></p>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-brand-light" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 mt-12 transition-colors duration-300">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-center md:justify-start mb-6 md:mb-0">
                    <a href="{{ route('home') }}">
                        <!-- Placeholder Logo Landscape Footer -->
                        <img src="{{ asset('storage/assets/logo-landscape.png') }}" alt="PT Mada Wikri Tunggal" class="h-8 w-auto opacity-80 hover:opacity-100 transition-opacity dark:hidden block">
                        <img src="{{ asset('storage/assets/logo-landscape-light.png') }}" alt="PT Mada Wikri Tunggal" class="h-8 w-auto opacity-80 hover:opacity-100 transition-opacity hidden dark:block">
                    </a>
                </div>
                <div class="mt-8 md:mt-0 text-center md:text-right flex flex-col items-center md:items-end">
                    <p class="text-base text-gray-400">
                        &copy; {{ date('Y') }} Portal Standardisasi Internal. Dibuat khusus untuk tim <span class="italic font-medium">developer</span>.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
