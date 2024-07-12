<?php

namespace App\Http\Controllers;

use App\Models\ShoppingProduct;
use Illuminate\Http\Request;
use App\Http\Requests\StoreShoppingProductRequest;
use App\Http\Requests\UpdateShoppingProductRequest;

class ShoppingProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shoppingProduct = ShoppingProduct::create($request->validated());
        return response()->json($shoppingProduct, 201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $shoppingProduct->update($request->validated());
        return response()->json($shoppingProduct);
    }

    /**
     * Display the specified resource.
     */
    public function show(ShoppingProduct $shoppingProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShoppingProduct $shoppingProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShoppingProduct $shoppingProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShoppingProduct $shoppingProduct)
    {
        $shoppingProduct->delete();
        return response()->json(null, 204);
    }
}
