@extends('layouts.admin')

@section('title', $component->exists ? 'Edit Komponen' : 'Tambah Komponen')

@section('content')
<div class="mb-8 flex items-center gap-4">
    <a href="{{ route('admin.components.index') }}" class="p-2 text-gray-500 hover:text-brand-dark hover:bg-green-50 rounded-lg transition-colors tooltip" title="Kembali">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
    </a>
    <div>
        <h1 class="text-3xl font-heading font-extrabold text-gray-900 tracking-tight">{{ $component->exists ? 'Edit Komponen UI' : 'Tambah Komponen UI' }}</h1>
        <p class="text-gray-500 mt-1">Lengkapi form di bawah ini untuk mengelola komponen.</p>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 max-w-4xl relative overflow-hidden">
    <!-- Decorative accent -->
    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-green-50 to-transparent rounded-bl-full pointer-events-none"></div>

    <form action="{{ $component->exists ? route('admin.components.update', $component) : route('admin.components.store') }}" method="POST" class="relative z-10">
        @csrf
        @if($component->exists)
            @method('PUT')
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="title" class="block text-sm font-bold text-gray-700 mb-2">Judul Komponen <span class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" value="{{ old('title', $component->title) }}" class="w-full bg-gray-50 border border-gray-200 text-gray-900 rounded-xl focus:ring-brand-light focus:border-brand-light block p-3 transition-colors duration-200 ease-in-out" required>
                @error('title') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="category_id" class="block text-sm font-bold text-gray-700 mb-2">Kategori <span class="text-red-500">*</span></label>
                <x-select name="category_id" id="category_id" required>
                    <option value="">Pilih Kategori...</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $component->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </x-select>
                @error('category_id') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="status" class="block text-sm font-bold text-gray-700 mb-2">Status <span class="text-red-500">*</span></label>
                <x-select name="status" id="status" required>
                    <option value="draft" {{ old('status', $component->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $component->status) == 'published' ? 'selected' : '' }}>Published</option>
                    <option value="deprecated" {{ old('status', $component->status) == 'deprecated' ? 'selected' : '' }}>Deprecated</option>
                </x-select>
                @error('status') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="version" class="block text-sm font-bold text-gray-700 mb-2">Versi (Opsional)</label>
                <input type="text" name="version" id="version" value="{{ old('version', $component->version) }}" class="w-full bg-gray-50 border border-gray-200 text-gray-900 rounded-xl focus:ring-brand-light focus:border-brand-light block p-3 transition-colors duration-200 ease-in-out" placeholder="Contoh: v1.0.0">
                @error('version') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mb-6">
            <label for="description" class="block text-sm font-bold text-gray-700 mb-2">Deskripsi Komponen</label>
            <textarea name="description" id="description" rows="3" class="w-full bg-gray-50 border border-gray-200 text-gray-900 rounded-xl focus:ring-brand-light focus:border-brand-light block p-3 transition-colors duration-200 ease-in-out" placeholder="Jelaskan kegunaan komponen ini...">{{ old('description', $component->description) }}</textarea>
            @error('description') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label for="code_snippet" class="block text-sm font-bold text-gray-700 mb-2">Kode HTML/Blade (Source Code) <span class="text-red-500">*</span></label>
            <textarea name="code_snippet" id="code_snippet" rows="8" class="w-full font-mono text-sm border-gray-200 bg-[#0d1117] text-gray-300 rounded-xl focus:ring-brand-light focus:border-brand-light block p-4 transition-colors duration-200 ease-in-out shadow-inner" required>{{ old('code_snippet', $component->code_snippet) }}</textarea>
            <p class="text-sm text-gray-500 mt-2 flex items-center">
                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Kode ini yang akan disalin oleh developer di halaman publik.
            </p>
            @error('code_snippet') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label for="preview_html" class="block text-sm font-bold text-gray-700 mb-2">Preview HTML (Render Visual) <span class="text-red-500">*</span></label>
            <textarea name="preview_html" id="preview_html" rows="5" class="w-full font-mono text-sm border-gray-200 bg-[#0d1117] text-gray-300 rounded-xl focus:ring-brand-light focus:border-brand-light block p-4 transition-colors duration-200 ease-in-out shadow-inner" required>{{ old('preview_html', $component->preview_html) }}</textarea>
            <p class="text-sm text-gray-500 mt-2 flex items-center">
                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Kode ini digunakan untuk merender tampilan visual di portal publik. Biasanya sama dengan source code.
            </p>
            @error('preview_html') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
        </div>

        <div class="mt-8 pt-6 border-t border-gray-100 flex justify-end gap-3">
            <a href="{{ route('admin.components.index') }}" class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-100 transition-all">
                Batal
            </a>
            <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-brand-dark rounded-xl hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 transition-all shadow-sm flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                Simpan Komponen
            </button>
        </div>
    </form>
</div>
@endsection
