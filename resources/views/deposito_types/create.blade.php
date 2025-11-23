@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Tambah Tipe Deposito</h2>
        <p class="text-gray-500 text-sm mt-1">Buat jenis deposito baru dengan suku bunga tertentu.</p>
    </div>

    <form action="{{ route('deposito-types.store') }}" method="POST" class="space-y-6">
        @csrf
        
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Tipe</label>
            <input type="text" name="name" id="name" class="focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-300 rounded-lg py-3" placeholder="Contoh: Deposito Gold" required>
        </div>

        <div>
            <label for="yearly_return" class="block text-sm font-medium text-gray-700 mb-1">Bunga Tahunan / Yearly Return (%)</label>
            <div class="relative rounded-md shadow-sm">
                <input type="number" step="0.01" name="yearly_return" id="yearly_return" class="focus:ring-primary-500 focus:border-primary-500 block w-full pr-12 sm:text-sm border-gray-300 rounded-lg py-3" placeholder="0.00" required>
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <span class="text-gray-500 sm:text-sm">%</span>
                </div>
            </div>
            <p class="mt-2 text-xs text-gray-500">Masukkan angka persentase bunga per tahun.</p>
        </div>

        <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-100">
            <a href="{{ route('deposito-types.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                Batal
            </a>
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                Simpan Tipe
            </button>
        </div>
    </form>
</div>
@endsection