<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoppingProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/products', ProductController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/suppliers', SupplierController::class);
    Route::resource('/inventory', InventoryController::class);
    Route::resource('/payments', PaymentMethodController::class);
    Route::resource('/shopping', ShoppingController::class);
    Route::resource('/sellers', SellerController::class);
    Route::resource('/clients', ClientController::class);
    Route::resource('/quotations', QuotationController::class);
    Route::resource('/sales', SaleController::class);

});

require __DIR__.'/auth.php';
