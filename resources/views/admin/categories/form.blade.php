@extends('layouts.admin')

@section('title', $category->exists ? 'Edit Kategori' : 'Tambah Kategori')

@section('content')
<div class="mb-8 flex items-center gap-4">
    <a href="{{ route('admin.categories.index') }}" class="p-2 text-gray-500 hover:text-brand-dark hover:bg-green-50 rounded-lg transition-colors tooltip" title="Kembali">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
    </a>
    <div>
        <h1 class="text-3xl font-heading font-extrabold text-gray-900 tracking-tight">{{ $category->exists ? 'Edit Kategori' : 'Tambah Kategori Baru' }}</h1>
        <p class="text-gray-500 mt-1">Silakan isi form di bawah ini dengan detail yang sesuai.</p>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 max-w-3xl relative overflow-hidden">
    <!-- Decorative accent -->
    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-green-50 to-transparent rounded-bl-full pointer-events-none"></div>

    <form action="{{ $category->exists ? route('admin.categories.update', $category) : route('admin.categories.store') }}" method="POST" class="relative z-10">
        @csrf
        @if($category->exists)
            @method('PUT')
        @endif

        <div class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Nama Kategori <span class="text-red-500">*</span></label>
                <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" class="w-full bg-gray-50 border border-gray-200 text-gray-900 rounded-xl focus:ring-brand-light focus:border-brand-light block p-3 transition-colors duration-200 ease-in-out" placeholder="Contoh: Buttons, Navigation, Cards..." required>
                @error('name') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="order" class="block text-sm font-bold text-gray-700 mb-2">Urutan (Order)</label>
                <input type="number" name="order" id="order" value="{{ old('order', $category->order ?? 0) }}" class="w-full bg-gray-50 border border-gray-200 text-gray-900 rounded-xl focus:ring-brand-light focus:border-brand-light block p-3 transition-colors duration-200 ease-in-out">
                <p class="text-sm text-gray-500 mt-2 flex items-center">
                    <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Angka lebih kecil akan membuat kategori ini tampil lebih dulu di daftar.
                </p>
                @error('order') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-gray-100 flex justify-end gap-3">
            <a href="{{ route('admin.categories.index') }}" class="px-5 py-2.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-gray-100 transition-all">
                Batal
            </a>
            <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-brand-dark rounded-xl hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 transition-all shadow-sm flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                Simpan Data
            </button>
        </div>
    </form>
</div>
@endsection
