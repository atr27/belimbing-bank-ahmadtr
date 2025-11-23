@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Buka Rekening Deposito Baru</h2>
        <p class="text-gray-500 text-sm mt-1">Isi formulir di bawah ini untuk membuka rekening deposito baru.</p>
    </div>

    <form action="{{ route('accounts.store') }}" method="POST" class="space-y-6">
        @csrf
        
        <div>
            <label for="customer_id" class="block text-sm font-medium text-gray-700 mb-1">Nasabah</label>
            <select name="customer_id" id="customer_id" class="block w-full pl-3 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm rounded-lg" required>
                <option value="">-- Pilih Nasabah --</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="deposito_type_id" class="block text-sm font-medium text-gray-700 mb-1">Jenis Deposito</label>
            <select name="deposito_type_id" id="deposito_type_id" class="block w-full pl-3 pr-10 py-3 text-base border-gray-300 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm rounded-lg" required>
                <option value="">-- Pilih Jenis Deposito --</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }} ({{ $type->yearly_return }}%)</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="balance" class="block text-sm font-medium text-gray-700 mb-1">Saldo Awal (Rp)</label>
            <div class="relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="text-gray-500 sm:text-sm">Rp</span>
                </div>
                <input type="number" name="balance" id="balance" class="focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-lg py-3" placeholder="0" required min="0">
            </div>
        </div>

        <div>
            <label for="transaction_date" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Transaksi</label>
            <input type="date" name="transaction_date" id="transaction_date" value="{{ date('Y-m-d') }}" class="focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-300 rounded-lg py-3" required>
        </div>

        <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-100">
            <a href="{{ route('accounts.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                Batal
            </a>
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Simpan Rekening
            </button>
        </div>
    </form>
</div>
@endsection
