<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;

Route::get('/', [ProductController::class, 'popular']);
Route::get('/detailproduct/{id}', [ProductController::class, 'detailsproduct'])->name('detailproduct');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Routes
Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/products', [\App\Http\Controllers\AdminController::class, 'products'])->name('products');
    Route::get('/products/create', [\App\Http\Controllers\AdminController::class, 'create'])->name('products.create');
    Route::post('/products', [\App\Http\Controllers\AdminController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [\App\Http\Controllers\AdminController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [\App\Http\Controllers\AdminController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [\App\Http\Controllers\AdminController::class, 'destroy'])->name('products.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/products', [ProductController::class, 'index'])->name('productslist');

// Cart routes
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.update-quantity');
Route::get('/cart/count', [CartController::class, 'getCartCount'])->name('cart.count');
Route::get('/checkout', [CartController::class, 'index'])->name('checkout');

require __DIR__.'/auth.php';
