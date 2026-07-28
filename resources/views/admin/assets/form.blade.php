@extends('layouts.admin')

@section('title', $asset->exists ? 'Edit Aset' : 'Unggah Aset')

@section('content')
<div class="mb-8 flex items-center gap-4">
    <a href="{{ route('admin.assets.index') }}" class="p-2 text-gray-500 hover:text-brand-dark hover:bg-green-50 rounded-lg transition-colors tooltip" title="Kembali">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
    </a>
    <div>
        <h1 class="text-3xl font-heading font-extrabold text-gray-900 tracking-tight">{{ $asset->exists ? 'Edit Aset' : 'Unggah Aset Baru' }}</h1>
        <p class="text-gray-500 mt-1">Unggah file pendukung, starter kit, atau aset lainnya untuk developer.</p>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 max-w-2xl relative overflow-hidden">
    <!-- Decorative accent -->
    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-green-50 to-transparent rounded-bl-full pointer-events-none"></div>

    <form action="{{ $asset->exists ? route('admin.assets.update', $asset) : route('admin.assets.store') }}" method="POST" enctype="multipart/form-data" class="relative z-10">
        @csrf
        @if($asset->exists)
            @method('PUT')
        @endif

        <div class="space-y-6">
            <div>
                <label for="file_name" class="block text-sm font-bold text-gray-700 mb-2">Nama File (Alias/Label) <span class="text-red-500">*</span></label>
                <input type="text" name="file_name" id="file_name" value="{{ old('file_name', $asset->file_name) }}" class="w-full bg-gray-50 border border-gray-200 text-gray-900 rounded-xl focus:ring-brand-light focus:border-brand-light block p-3 transition-colors duration-200 ease-in-out" placeholder="Contoh: Laravel 12 Starter Kit" required>
                @error('file_name') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="status" class="block text-sm font-bold text-gray-700 mb-2">Status <span class="text-red-500">*</span></label>
                    <x-select name="status" id="status" required>
                        <option value="active" {{ old('status', $asset->status) == 'active' ? 'selected' : '' }}>Active (Direkomendasikan)</option>
                        <option value="deprecated" {{ old('status', $asset->status) == 'deprecated' ? 'selected' : '' }}>Deprecated (Sudah Usang)</option>
                    </x-select>
                    @error('status') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="version" class="block text-sm font-bold text-gray-700 mb-2">Versi (Opsional)</label>
                    <input type="text" name="version" id="version" value="{{ old('version', $asset->version) }}" class="w-full bg-gray-50 border border-gray-200 text-gray-900 rounded-xl focus:ring-brand-light focus:border-brand-light block p-3 transition-colors duration-200 ease-in-out" placeholder="Contoh: v1.0.0">
                    @error('version') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="pt-4">
                <label for="file" class="block text-sm font-bold text-gray-700 mb-2">Unggah File Fisik <span class="text-red-500">*</span></label>
                @if($asset->exists && $asset->file_path)
                    <div class="mb-4 p-4 bg-green-50/50 border border-green-100 rounded-xl flex items-center justify-between">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-brand-dark mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            <div>
                                <p class="text-sm font-medium text-gray-800">File Saat Ini</p>
                                <a href="{{ asset('storage/' . $asset->file_path) }}" class="text-xs text-brand-light hover:underline font-mono" target="_blank">{{ basename($asset->file_path) }}</a>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl bg-gray-50 hover:bg-gray-100 transition-colors">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600 justify-center">
                            <label for="file" class="relative cursor-pointer bg-white rounded-md font-medium text-brand-light hover:text-green-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-brand-light px-1">
                                <span>Pilih file untuk diunggah</span>
                                <input id="file" name="file" type="file" class="sr-only" {{ $asset->exists ? '' : 'required' }}>
                            </label>
                        </div>
                        <p class="text-xs text-gray-500">ZIP, RAR, atau Markdown maksimal 10MB</p>
                    </div>
                </div>
                @error('file') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-gray-100 flex justify-end gap-3">
            <a href="{{ route('admin.assets.index') }}" class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-100 transition-all">
                Batal
            </a>
            <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-brand-dark rounded-xl hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 transition-all shadow-sm flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                Simpan Aset
            </button>
        </div>
    </form>
</div>
@endsection
