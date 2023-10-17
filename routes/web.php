<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/deposit', [App\Http\Controllers\DepositController::class, 'index'])->name('deposit');
Route::get('/deposit/create', [App\Http\Controllers\DepositController::class, 'create'])->name('deposit.create');
Route::post('/deposit/create', [App\Http\Controllers\DepositController::class, 'store'])->name('deposit.store');
Route::get('/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'index'])->name('withdrawal');
Route::get('/withdrawal/create', [App\Http\Controllers\WithdrawalController::class, 'create'])->name('withdrawal.create');
Route::post('/withdrawal/create', [App\Http\Controllers\WithdrawalController::class, 'store'])->name('withdrawal.store');
Route::get('/transaction', [App\Http\Controllers\TransactionController::class, 'index'])->name('transaction');

