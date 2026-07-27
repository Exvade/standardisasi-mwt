@extends('layouts.app')

@section('title', 'Aset Unduhan')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-10 text-center md:text-left">
        <h1 class="text-3xl font-extrabold text-brand-dark dark:text-white sm:text-4xl">
            Aset & Starter Kit
        </h1>
        <p class="mt-4 text-lg text-gray-500 dark:text-gray-400 max-w-3xl">
            Unduh file <em class="italic font-medium">starter template</em>, ikon <em class="italic font-medium">branding</em>, maupun dokumen standardisasi fisik untuk mempermudah inisialisasi <em class="italic font-medium">project</em> Anda.
        </p>
    </div>

    @if($assets->count() > 0)
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($assets as $asset)
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-md transition-shadow duration-300 flex flex-col h-full">
            <div class="p-6 flex-grow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-green-50 dark:bg-green-900/40 rounded-lg flex items-center justify-center text-brand-light">
                        <!-- File Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    @if($asset->version)
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200">
                        {{ $asset->version }}
                    </span>
                    @endif
                </div>
                
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 truncate" title="{{ $asset->file_name }}">
                    {{ $asset->file_name }}
                </h3>
                
                <p class="text-sm text-gray-500 dark:text-gray-400 mb-4 line-clamp-2">
                    Diunggah pada: {{ $asset->created_at->format('d M Y') }}
                </p>
            </div>
            
            <div class="px-6 py-4 bg-gray-50 dark:bg-gray-900/50 border-t border-gray-100 dark:border-gray-700 mt-auto">
                <a href="{{ asset('storage/' . $asset->file_path) }}" download class="w-full inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-brand-dark hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-light transition">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    Unduh File
                </a>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="text-center py-12 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
        </svg>
        <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">Belum ada aset</h3>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Belum ada file yang dipublikasikan oleh administrator.</p>
    </div>
    @endif
</div>
@endsection
