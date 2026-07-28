@extends('layouts.app')

@section('title', $component->title)

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex flex-col md:flex-row gap-8">
        
        <!-- Sidebar Navigation -->
        <aside class="w-full md:w-64 flex-shrink-0">
            <div class="sticky top-24 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-4 h-[calc(100vh-8rem)] overflow-y-auto">
                <h3 class="font-bold text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-100 dark:border-gray-700">Daftar Komponen</h3>
                
                <nav class="space-y-6">
                    @foreach($categories as $category)
                        @if($category->components->count() > 0)
                        <div>
                            <h4 class="font-semibold text-brand-dark dark:text-brand-light mb-2 text-sm uppercase tracking-wider">{{ $category->name }}</h4>
                            <ul class="space-y-2">
                                @foreach($category->components as $c)
                                <li>
                                    <a href="{{ route('public.components.show', $c->id) }}" class="block text-sm py-1 px-2 rounded {{ $c->id === $component->id ? 'bg-brand-light text-white font-medium' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700' }}">
                                        {{ $c->title }}
                                        @if($c->version)
                                            <span class="ml-1 text-[10px] {{ $c->id === $component->id ? 'text-green-100' : 'text-gray-400 dark:text-gray-500' }}">{{ $c->version }}</span>
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
        <main class="flex-1 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-4 sm:p-6 lg:p-10 shadow-sm min-w-0">
            <div class="mb-8 border-b border-gray-100 dark:border-gray-700 pb-4">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white break-words">{{ $component->title }}</h1>
                @if($component->description)
                <p class="mt-4 text-gray-600 dark:text-gray-400 text-lg">{{ $component->description }}</p>
                @endif
            </div>

            <!-- Tabs with AlpineJS -->
            <div x-data="{ activeTab: 'preview', copyToClipboard(text) { navigator.clipboard.writeText(text).then(() => { Swal.fire({ toast: true, position: 'top-end', showConfirmButton: false, timer: 3000, timerProgressBar: true, icon: 'success', title: 'Kode berhasil disalin!' }) }) } }">
                <!-- Tab Navigation -->
                <div class="border-b border-gray-200 dark:border-gray-700 mb-6">
                    <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                        <button @click="activeTab = 'preview'" 
                                :class="activeTab === 'preview' ? 'border-brand-light text-brand-dark dark:text-brand-light' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-600'"
                                class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm transition-colors flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            Live Preview
                        </button>

                        <button @click="activeTab = 'code'" 
                                :class="activeTab === 'code' ? 'border-brand-light text-brand-dark dark:text-brand-light' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-600'"
                                class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm transition-colors flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            Code (HTML/Blade)
                        </button>
                    </nav>
                </div>

                <!-- Tab Panels -->
                <div>
                    <!-- Preview Panel -->
                    <div x-show="activeTab === 'preview'" class="mb-10">
                        <div class="border border-gray-200 dark:border-gray-700 rounded-lg p-4 sm:p-6 bg-gray-50 dark:bg-gray-900 flex items-center justify-center min-h-[300px] overflow-x-auto w-full relative">
                            <div class="w-full flex justify-center">
                                {!! $component->preview_html !!}
                            </div>
                        </div>
                    </div>

                    <!-- Code Panel -->
                    <div x-show="activeTab === 'code'" style="display: none;" class="relative">
                        <div class="absolute top-4 right-4">
                            <button @click="copyToClipboard($refs.codeContent.innerText)" class="p-2 bg-gray-800 text-gray-300 hover:text-white rounded-lg hover:bg-gray-700 transition-colors tooltip" title="Copy to Clipboard">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                            </button>
                        </div>
                        <div class="bg-[#282c34] rounded-lg p-6 w-full max-w-full shadow-lg border border-gray-800">
                            <pre class="w-full m-0 whitespace-pre-wrap break-words"><code x-ref="codeContent" class="language-html text-sm leading-relaxed">{{ $component->code_snippet }}</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
    </div>
</div>
@endsection
