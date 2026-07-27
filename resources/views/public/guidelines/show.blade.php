@extends('layouts.app')

@section('title', $guideline->title)

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex flex-col md:flex-row gap-8">
        
        <!-- Sidebar Navigation -->
        <aside class="w-full md:w-64 flex-shrink-0">
            <div class="sticky top-24 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-4 h-[calc(100vh-8rem)] overflow-y-auto">
                <h3 class="font-bold text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-100 dark:border-gray-700">Daftar Panduan</h3>
                
                <nav class="space-y-2">
                    @foreach($allGuidelines as $g)
                    <a href="{{ route('public.guidelines.show', $g->id) }}" class="block text-sm py-2 px-3 rounded {{ $g->id === $guideline->id ? 'bg-brand-light text-white font-medium' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700' }}">
                        {{ $g->title }}
                    </a>
                    @endforeach
                </nav>
            </div>
        </aside>

        <!-- Main Content area -->
        <main class="flex-1 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-6 lg:p-12 shadow-sm min-w-0"
              x-data="{ shown: false }"
              x-init="setTimeout(() => shown = true, 100)">
            
            <div class="mb-8 border-b border-gray-100 dark:border-gray-700 pb-4 transform transition-all duration-700 ease-out"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white break-words">{{ $guideline->title }}</h1>
                <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                    Kategori: <span class="font-medium text-brand-dark dark:text-brand-light">{{ $guideline->type }}</span>
                </div>
            </div>

            <!-- Markdown Content -->
            <div class="markdown-body transform transition-all duration-1000 delay-150 ease-out"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
                {!! $parsedContent !!}
            </div>
        </main>
        
    </div>
</div>
@endsection
