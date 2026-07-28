@extends('layouts.admin')

@section('title', $guideline->exists ? 'Edit Panduan' : 'Tambah Panduan')

@section('content')
<div class="mb-8 flex items-center gap-4">
    <a href="{{ route('admin.guidelines.index') }}" class="p-2 text-gray-500 hover:text-brand-dark hover:bg-green-50 rounded-lg transition-colors tooltip" title="Kembali">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
    </a>
    <div>
        <h1 class="text-3xl font-heading font-extrabold text-gray-900 tracking-tight">{{ $guideline->exists ? 'Edit Panduan' : 'Tambah Panduan Baru' }}</h1>
        <p class="text-gray-500 mt-1">Tulis aturan dan standar pengembangan proyek di form ini.</p>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 max-w-4xl relative overflow-hidden">
    <!-- Decorative accent -->
    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-green-50 to-transparent rounded-bl-full pointer-events-none"></div>

    <form action="{{ $guideline->exists ? route('admin.guidelines.update', $guideline) : route('admin.guidelines.store') }}" method="POST" class="relative z-10">
        @csrf
        @if($guideline->exists)
            @method('PUT')
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="md:col-span-2">
                <label for="title" class="block text-sm font-bold text-gray-700 mb-2">Judul Panduan <span class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" value="{{ old('title', $guideline->title) }}" class="w-full bg-gray-50 border border-gray-200 text-gray-900 rounded-xl focus:ring-brand-light focus:border-brand-light block p-3 transition-colors duration-200 ease-in-out" required>
                @error('title') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="type" class="block text-sm font-bold text-gray-700 mb-2">Tipe <span class="text-red-500">*</span></label>
                <x-select name="type" id="type" required>
                    <option value="">Pilih Tipe...</option>
                    <option value="database" {{ old('type', $guideline->type) == 'database' ? 'selected' : '' }}>Database Naming</option>
                    <option value="architecture" {{ old('type', $guideline->type) == 'architecture' ? 'selected' : '' }}>Software Architecture</option>
                    <option value="ui_ux" {{ old('type', $guideline->type) == 'ui_ux' ? 'selected' : '' }}>UI/UX Guidelines</option>
                    <option value="security" {{ old('type', $guideline->type) == 'security' ? 'selected' : '' }}>Security Rules</option>
                    <option value="other" {{ old('type', $guideline->type) == 'other' ? 'selected' : '' }}>Lainnya</option>
                </x-select>
                @error('type') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>
            
            <div>
                <label for="status" class="block text-sm font-bold text-gray-700 mb-2">Status <span class="text-red-500">*</span></label>
                <x-select name="status" id="status" required>
                    <option value="draft" {{ old('status', $guideline->status) == 'draft' ? 'selected' : '' }}>Draft (Konsep)</option>
                    <option value="published" {{ old('status', $guideline->status) == 'published' ? 'selected' : '' }}>Published (Dipublikasi)</option>
                    <option value="archived" {{ old('status', $guideline->status) == 'archived' ? 'selected' : '' }}>Archived (Diarsipkan)</option>
                </x-select>
                @error('status') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mb-6">
            <label for="order" class="block text-sm font-bold text-gray-700 mb-2">Urutan (Order)</label>
            <input type="number" name="order" id="order" value="{{ old('order', $guideline->order ?? 0) }}" class="w-full md:w-1/2 bg-gray-50 border border-gray-200 text-gray-900 rounded-xl focus:ring-brand-light focus:border-brand-light block p-3 transition-colors duration-200 ease-in-out">
            @error('order') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label for="content" class="block text-sm font-bold text-gray-700 mb-2">Konten Markdown <span class="text-red-500">*</span></label>
            <textarea name="content" id="content" rows="12" class="w-full font-mono text-sm border-gray-200 bg-[#0d1117] text-gray-300 rounded-xl focus:ring-brand-light focus:border-brand-light block p-4 transition-colors duration-200 ease-in-out shadow-inner" required>{{ old('content', $guideline->content) }}</textarea>
            <p class="text-sm text-gray-500 mt-2 flex items-center">
                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Mendukung Markdown (Gunakan # untuk heading, ** untuk bold, * untuk italic, dll).
            </p>
            @error('content') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
        </div>

        <div class="mt-8 pt-6 border-t border-gray-100 flex justify-end gap-3">
            <a href="{{ route('admin.guidelines.index') }}" class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-100 transition-all">
                Batal
            </a>
            <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-brand-dark rounded-xl hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 transition-all shadow-sm flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                Simpan Panduan
            </button>
        </div>
    </form>
</div>
@endsection
