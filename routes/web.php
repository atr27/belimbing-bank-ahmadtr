<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepositoTypeController;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('accounts.index');
});

// Resource Routes otomatis membuat route untuk index, create, store, edit, update, destroy
Route::resource('customers', CustomerController::class);
Route::resource('deposito-types', DepositoTypeController::class);
Route::resource('accounts', AccountController::class);

// Custom Routes untuk Withdraw logic
Route::get('/accounts/{id}/withdraw', [AccountController::class, 'withdrawForm']);
Route::post('/accounts/{id}/calculate', [AccountController::class, 'calculateWithdraw']);
