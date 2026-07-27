<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') - MWT Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        /* Markdown Styles for Guideline Content */
        .markdown-body h1 { @apply text-3xl font-bold mb-4 mt-8 text-brand-dark; }
        .markdown-body h2 { @apply text-2xl font-semibold mb-3 mt-6 text-brand-dark border-b pb-2; }
        .markdown-body h3 { @apply text-xl font-medium mb-2 mt-4 text-gray-800; }
        .markdown-body p { @apply mb-4 text-gray-700 leading-relaxed; }
        .markdown-body ul { @apply list-disc list-inside mb-4 text-gray-700; }
        .markdown-body ol { @apply list-decimal list-inside mb-4 text-gray-700; }
        .markdown-body li { @apply mb-1; }
        .markdown-body a { @apply text-brand-light hover:underline; }
        .markdown-body blockquote { @apply border-l-4 border-brand-light pl-4 py-1 mb-4 italic text-gray-600 bg-gray-50; }
        .markdown-body pre { @apply bg-gray-900 text-gray-100 p-4 rounded-lg mb-4 overflow-x-auto text-sm font-mono; }
        .markdown-body code { @apply bg-gray-100 text-red-600 px-1 py-0.5 rounded text-sm font-mono; }
        .markdown-body pre code { @apply bg-transparent text-gray-100 p-0 text-sm; }
    </style>
</head>
<body class="bg-brand-surface font-sans text-brand-text flex flex-col min-h-screen">
    
    <!-- Navbar -->
    <header x-data="{ mobileMenuOpen: false }" class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo & Nav Desktop -->
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="text-2xl font-bold text-brand-dark tracking-tighter flex items-center gap-2">
                            <svg class="w-8 h-8 text-brand-light" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                            MWT Portal
                        </a>
                    </div>
                    <nav class="hidden sm:ml-8 sm:flex sm:space-x-8">
                        <a href="{{ route('public.components.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('public.components.*') ? 'border-brand-light text-brand-dark font-semibold' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} text-sm font-medium">
                            Komponen UI
                        </a>
                        <a href="{{ route('public.guidelines.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('public.guidelines.*') ? 'border-brand-light text-brand-dark font-semibold' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} text-sm font-medium">
                            Panduan
                        </a>
                        <a href="{{ route('public.downloads.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('public.downloads.*') ? 'border-brand-light text-brand-dark font-semibold' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} text-sm font-medium">
                            Aset Unduhan
                        </a>
                    </nav>
                </div>
                
                <!-- Admin Link Desktop -->
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-500 hover:text-brand-dark transition flex items-center text-sm font-medium">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
                        Admin Panel
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand-light">
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
        <div x-show="mobileMenuOpen" class="sm:hidden" style="display: none;">
            <div class="pt-2 pb-3 space-y-1">
                <a href="{{ route('public.components.index') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('public.components.*') ? 'border-brand-light text-brand-dark bg-green-50' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium">Komponen UI</a>
                <a href="{{ route('public.guidelines.index') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('public.guidelines.*') ? 'border-brand-light text-brand-dark bg-green-50' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium">Panduan</a>
                <a href="{{ route('public.downloads.index') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('public.downloads.*') ? 'border-brand-light text-brand-dark bg-green-50' : 'border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium">Aset Unduhan</a>
                <a href="{{ route('admin.dashboard') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 text-base font-medium">Admin Panel</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-12">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-center md:justify-start mb-6 md:mb-0">
                    <span class="text-xl font-bold text-brand-dark">PT Mada Wikri Tunggal</span>
                </div>
                <div class="mt-8 md:mt-0 text-center md:text-right">
                    <p class="text-base text-gray-400">
                        &copy; {{ date('Y') }} Portal Standardisasi Internal. Dibuat khusus untuk tim *developer*.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
