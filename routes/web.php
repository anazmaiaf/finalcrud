<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rotas para produto
    Route::get('/produto', [ProdutoController::class, 'index'])->name('produto');
    // Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');
    // Route::post('/produto', [ProdutoController::class, 'store'])->name('produto.store');
    // Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');
    // Route::put('/produto/{id}', [ProdutoController::class, 'update'])->name('produto.update');
    // Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.destroy');
});

require __DIR__.'/auth.php';
