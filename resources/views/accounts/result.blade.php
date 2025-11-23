@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
        <div class="bg-green-600 px-6 py-8 text-center">
            <div class="mx-auto w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mb-4 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-white">Kalkulasi Berhasil</h2>
            <p class="text-green-100 mt-2">Berikut adalah rincian penarikan dana deposito.</p>
        </div>
        
        <div class="px-6 py-8">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="bg-gray-50 p-4 rounded-xl">
                    <p class="text-sm font-medium text-gray-500">Nasabah</p>
                    <p class="mt-1 text-lg font-bold text-gray-900">{{ $account->customer->name }}</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl">
                    <p class="text-sm font-medium text-gray-500">Durasi</p>
                    <p class="mt-1 text-lg font-bold text-gray-900">{{ $months }} Bulan</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-xl">
                    <p class="text-sm font-medium text-gray-500">Saldo Awal</p>
                    <p class="mt-1 text-lg font-bold text-gray-900">Rp {{ number_format($account->balance, 2) }}</p>
                </div>
                <div class="bg-green-50 p-4 rounded-xl border border-green-100">
                    <p class="text-sm font-medium text-green-600">Bunga Didapat</p>
                    <p class="mt-1 text-lg font-bold text-green-700">+ Rp {{ number_format($interest, 2) }}</p>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-100">
                <div class="flex flex-col sm:flex-row justify-between items-center bg-gray-900 text-white p-6 rounded-xl shadow-lg">
                    <div>
                        <p class="text-sm text-gray-400">Total Saldo Akhir</p>
                        <p class="text-xs text-gray-500">(Ending Balance)</p>
                    </div>
                    <div class="mt-2 sm:mt-0">
                        <p class="text-3xl font-bold">Rp {{ number_format($endingBalance, 2) }}</p>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-center">
                <a href="{{ route('accounts.index') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 shadow-md hover:shadow-lg transition-all">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Daftar Akun
                </a>
            </div>
        </div>
    </div>
</div>
@endsection