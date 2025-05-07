<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'authenticate']);
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::put('/produk/edit', [ProdukController::class, 'create'])->name('produk.edit');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');

Route::get('/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/store', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
