@extends('layouts.admin')

@section('title', 'Manajemen Aset Unduhan')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Daftar Aset</h1>
    <a href="{{ route('admin.assets.create') }}" class="px-4 py-2 bg-brand-dark text-white rounded hover:bg-green-800 transition">
        Unggah Aset
    </a>
</div>

<div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama File</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Versi</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Link / Path</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($assets as $asset)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $asset->file_name }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $asset->version ?? '-' }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $asset->status === 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                        {{ ucfirst($asset->status) }}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 hover:underline">
                    <a href="{{ asset('storage/' . $asset->file_path) }}" target="_blank">Lihat File</a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('admin.assets.edit', $asset) }}" class="text-brand-light hover:text-green-700 mr-3">Edit</a>
                    <form action="{{ route('admin.assets.destroy', $asset) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus aset ini? File fisik juga akan terhapus.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-500">Belum ada aset unduhan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
