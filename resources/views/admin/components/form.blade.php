@extends('layouts.admin')

@section('title', $component->exists ? 'Edit Komponen' : 'Tambah Komponen')

@section('content')
<div class="mb-6 flex items-center">
    <a href="{{ route('admin.components.index') }}" class="text-gray-500 hover:text-gray-700 mr-4">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
    </a>
    <h1 class="text-2xl font-bold text-gray-800">{{ $component->exists ? 'Edit Komponen' : 'Tambah Komponen' }}</h1>
</div>

<div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 max-w-4xl">
    <form action="{{ $component->exists ? route('admin.components.update', $component) : route('admin.components.store') }}" method="POST">
        @csrf
        @if($component->exists)
            @method('PUT')
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Komponen</label>
                <input type="text" name="title" id="title" value="{{ old('title', $component->title) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2" required>
                @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                <select name="category_id" id="category_id" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $component->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select name="status" id="status" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2" required>
                    <option value="draft" {{ old('status', $component->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $component->status) === 'published' ? 'selected' : '' }}>Published</option>
                </select>
                @error('status') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="version" class="block text-sm font-medium text-gray-700 mb-1">Versi (Opsional)</label>
                <input type="text" name="version" id="version" value="{{ old('version', $component->version) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2" placeholder="e.g., v1.0">
                @error('version') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
            <textarea name="description" id="description" rows="3" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2">{{ old('description', $component->description) }}</textarea>
            @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="code_snippet" class="block text-sm font-medium text-gray-700 mb-1">Kode HTML/Blade (Source Code)</label>
            <textarea name="code_snippet" id="code_snippet" rows="8" class="w-full font-mono text-sm border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2 bg-gray-50" required>{{ old('code_snippet', $component->code_snippet) }}</textarea>
            <p class="text-xs text-gray-500 mt-1">Kode ini yang akan disalin oleh developer.</p>
            @error('code_snippet') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label for="preview_html" class="block text-sm font-medium text-gray-700 mb-1">Preview HTML (Render Visual)</label>
            <textarea name="preview_html" id="preview_html" rows="4" class="w-full font-mono text-sm border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2 bg-gray-50" required>{{ old('preview_html', $component->preview_html) }}</textarea>
            <p class="text-xs text-gray-500 mt-1">Kode ini digunakan untuk merender tampilan visual di portal publik. Boleh disamakan dengan source code.</p>
            @error('preview_html') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-brand-dark text-white rounded hover:bg-green-800 transition">
                Simpan Komponen
            </button>
        </div>
    </form>
</div>
@endsection
