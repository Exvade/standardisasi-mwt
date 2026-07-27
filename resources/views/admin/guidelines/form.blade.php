@extends('layouts.admin')

@section('title', $guideline->exists ? 'Edit Panduan' : 'Tambah Panduan')

@section('content')
<div class="mb-6 flex items-center">
    <a href="{{ route('admin.guidelines.index') }}" class="text-gray-500 hover:text-gray-700 mr-4">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
    </a>
    <h1 class="text-2xl font-bold text-gray-800">{{ $guideline->exists ? 'Edit Panduan' : 'Tambah Panduan' }}</h1>
</div>

<div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 max-w-4xl">
    <form action="{{ $guideline->exists ? route('admin.guidelines.update', $guideline) : route('admin.guidelines.store') }}" method="POST">
        @csrf
        @if($guideline->exists)
            @method('PUT')
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div class="md:col-span-2">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Panduan</label>
                <input type="text" name="title" id="title" value="{{ old('title', $guideline->title) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2" required>
                @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Tipe</label>
                <select name="type" id="type" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2" required>
                    <option value="UI" {{ old('type', $guideline->type) === 'UI' ? 'selected' : '' }}>UI/UX</option>
                    <option value="Database" {{ old('type', $guideline->type) === 'Database' ? 'selected' : '' }}>Database</option>
                    <option value="Lainnya" {{ old('type', $guideline->type) === 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
                @error('type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select name="status" id="status" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2" required>
                    <option value="draft" {{ old('status', $guideline->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $guideline->status) === 'published' ? 'selected' : '' }}>Published</option>
                </select>
                @error('status') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mb-4">
            <label for="order" class="block text-sm font-medium text-gray-700 mb-1">Urutan (Order)</label>
            <input type="number" name="order" id="order" value="{{ old('order', $guideline->order ?? 0) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2 md:w-1/2">
            @error('order') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Konten (Markdown Mendukung)</label>
            <textarea name="content" id="content" rows="12" class="w-full font-mono text-sm border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2 bg-gray-50" required>{{ old('content', $guideline->content) }}</textarea>
            <p class="text-xs text-gray-500 mt-1">Gunakan format Markdown untuk mengatur teks tebal, miring, list, dan link.</p>
            @error('content') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-brand-dark text-white rounded hover:bg-green-800 transition">
                Simpan Panduan
            </button>
        </div>
    </form>
</div>
@endsection
