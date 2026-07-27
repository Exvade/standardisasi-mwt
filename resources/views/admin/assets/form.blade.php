@extends('layouts.admin')

@section('title', $asset->exists ? 'Edit Aset' : 'Unggah Aset')

@section('content')
<div class="mb-6 flex items-center">
    <a href="{{ route('admin.assets.index') }}" class="text-gray-500 hover:text-gray-700 mr-4">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
    </a>
    <h1 class="text-2xl font-bold text-gray-800">{{ $asset->exists ? 'Edit Aset' : 'Unggah Aset Baru' }}</h1>
</div>

<div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 max-w-2xl">
    <form action="{{ $asset->exists ? route('admin.assets.update', $asset) : route('admin.assets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($asset->exists)
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="file_name" class="block text-sm font-medium text-gray-700 mb-1">Nama File (Alias/Label)</label>
            <input type="text" name="file_name" id="file_name" value="{{ old('file_name', $asset->file_name) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2" required>
            @error('file_name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select name="status" id="status" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2" required>
                    <option value="draft" {{ old('status', $asset->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $asset->status) === 'published' ? 'selected' : '' }}>Published</option>
                </select>
                @error('status') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="version" class="block text-sm font-medium text-gray-700 mb-1">Versi (Opsional)</label>
                <input type="text" name="version" id="version" value="{{ old('version', $asset->version) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2" placeholder="e.g., v1.0">
                @error('version') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mb-6">
            <label for="file" class="block text-sm font-medium text-gray-700 mb-1">Unggah File Fisik (.md / .zip)</label>
            @if($asset->exists && $asset->file_path)
                <div class="mb-2 text-sm text-gray-600">
                    File saat ini: <a href="{{ asset('storage/' . $asset->file_path) }}" class="text-blue-600 hover:underline" target="_blank">{{ basename($asset->file_path) }}</a>
                </div>
            @endif
            <input type="file" name="file" id="file" class="w-full border-gray-300 rounded-md shadow-sm focus:border-brand-light focus:ring focus:ring-brand-light focus:ring-opacity-50 border p-2" {{ $asset->exists ? '' : 'required' }}>
            <p class="text-xs text-gray-500 mt-1">Maksimal ukuran file 10MB.</p>
            @error('file') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-brand-dark text-white rounded hover:bg-green-800 transition">
                Simpan Aset
            </button>
        </div>
    </form>
</div>
@endsection
