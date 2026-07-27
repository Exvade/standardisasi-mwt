@extends('layouts.admin')

@section('title', $category->exists ? 'Edit Kategori' : 'Tambah Kategori')

@section('content')
<div class="mb-6 flex items-center">
    <a href="{{ route('admin.categories.index') }}" class="text-gray-500 hover:text-gray-700 mr-4">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
    </a>
    <h1 class="text-2xl font-bold text-gray-800">{{ $category->exists ? 'Edit Kategori' : 'Tambah Kategori' }}</h1>
</div>

<div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 max-w-2xl">
    <form action="{{ $category->exists ? route('admin.categories.update', $category) : route('admin.categories.store') }}" method="POST">
        @csrf
        @if($category->exists)
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Kategori</label>
            <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2" required>
            @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label for="order" class="block text-sm font-medium text-gray-700 mb-1">Urutan (Order)</label>
            <input type="number" name="order" id="order" value="{{ old('order', $category->order ?? 0) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2">
            <p class="text-xs text-gray-500 mt-1">Angka lebih kecil akan tampil lebih dulu.</p>
            @error('order') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-brand-dark text-white rounded hover:bg-green-800 transition">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
