@extends('layouts.app')

@section('title', $component->title)

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex flex-col md:flex-row gap-8">
        
        <!-- Sidebar Navigation -->
        <aside class="w-full md:w-64 flex-shrink-0">
            <div class="sticky top-24 bg-white border border-gray-200 rounded-lg p-4 h-[calc(100vh-8rem)] overflow-y-auto">
                <h3 class="font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">Daftar Komponen</h3>
                
                <nav class="space-y-6">
                    @foreach($categories as $category)
                        @if($category->components->count() > 0)
                        <div>
                            <h4 class="font-semibold text-brand-dark mb-2 text-sm uppercase tracking-wider">{{ $category->name }}</h4>
                            <ul class="space-y-2">
                                @foreach($category->components as $c)
                                <li>
                                    <a href="{{ route('public.components.show', $c->id) }}" class="block text-sm py-1 px-2 rounded {{ $c->id === $component->id ? 'bg-brand-light text-white font-medium' : 'text-gray-600 hover:bg-gray-50' }}">
                                        {{ $c->title }}
                                        @if($c->version)
                                            <span class="ml-1 text-[10px] {{ $c->id === $component->id ? 'text-green-100' : 'text-gray-400' }}">{{ $c->version }}</span>
                                        @endif
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    @endforeach
                </nav>
            </div>
        </aside>

        <!-- Main Content area -->
        <main class="flex-1 bg-white border border-gray-200 rounded-lg p-4 sm:p-6 lg:p-10 shadow-sm min-w-0">
            <div class="mb-8 border-b border-gray-100 pb-4">
                <h1 class="text-3xl font-bold text-gray-900 break-words">{{ $component->title }}</h1>
                @if($component->description)
                <p class="mt-4 text-gray-600 text-lg">{{ $component->description }}</p>
                @endif
            </div>

            <!-- Preview -->
            <div class="mb-10">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Preview</h2>
                <div class="border border-gray-200 rounded-lg p-4 sm:p-6 bg-gray-50 flex items-center justify-center min-h-[200px] overflow-x-auto w-full">
                    <div class="w-full flex justify-center">
                        {!! $component->preview_html !!}
                    </div>
                </div>
            </div>

            <!-- Code -->
            <div>
                <div class="flex justify-between items-end mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Source Code (HTML/Blade)</h2>
                </div>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto w-full max-w-full">
                    <pre class="w-full"><code class="text-gray-100 font-mono text-xs sm:text-sm">{{ $component->code_snippet }}</code></pre>
                </div>
            </div>
        </main>
        
    </div>
</div>
@endsection
