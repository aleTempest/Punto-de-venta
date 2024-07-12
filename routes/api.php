<?php
use App\Http\Controllers\ShoppingProductController;

Route::post('/shopping-products', [ShoppingProductController::class, 'store']);
Route::put('/shopping-products/{shoppingProduct}', [ShoppingProductController::class, 'update']);
Route::delete('/shopping-products/{shoppingProduct}', [ShoppingProductController::class, 'destroy']);