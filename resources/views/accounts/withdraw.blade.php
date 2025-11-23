@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Form Penarikan (Withdraw)</h2>
        <p class="text-gray-500 text-sm mt-1">Hitung saldo akhir dan bunga deposito.</p>
    </div>

    <div class="bg-primary-50 rounded-xl p-6 mb-8 border border-primary-100">
        <h3 class="text-lg font-semibold text-primary-900 mb-4">Informasi Akun</h3>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2">
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-primary-500">Nasabah</dt>
                <dd class="mt-1 text-sm text-primary-900 font-semibold">{{ $account->customer->name }}</dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-primary-500">Tipe Deposito</dt>
                <dd class="mt-1 text-sm text-primary-900 font-semibold">{{ $account->depositoType->name }} ({{ $account->depositoType->yearly_return }}%)</dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-primary-500">Saldo Awal</dt>
                <dd class="mt-1 text-sm text-primary-900 font-semibold">Rp {{ number_format($account->balance) }}</dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-primary-500">Tanggal Deposit Awal</dt>
                <dd class="mt-1 text-sm text-primary-900 font-semibold">{{ $account->transaction_date }}</dd>
            </div>
        </dl>
    </div>

    <form action="{{ url('/accounts/'.$account->id.'/calculate') }}" method="POST" class="space-y-6">
        @csrf
        
        <div>
            <label for="withdraw_date" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Penarikan</label>
            <input type="date" name="withdraw_date" id="withdraw_date" class="focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-300 rounded-lg py-3" required>
            <p class="mt-2 text-xs text-gray-500">Masukkan tanggal saat nasabah melakukan penarikan dana.</p>
        </div>

        <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-100">
            <a href="{{ route('accounts.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                Batal
            </a>
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                </svg>
                Hitung Saldo Akhir
            </button>
        </div>
    </form>
</div>
@endsection