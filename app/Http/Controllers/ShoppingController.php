<?php

namespace App\Http\Controllers;

use App\Models\Shopping;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\ShoppingProduct;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreShoppingRequest;
use App\Http\Requests\UpdateShoppingRequest;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('shopping.index', [
            'shoppings' => Shopping::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $suppliers = Supplier::all();
        $products = Product::all();
        return view('shopping.create', compact('suppliers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShoppingRequest $request): RedirectResponse
    {
        Shopping::create($request->validated());
        return to_route('shopping.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shopping $shopping): View
    {
        $suppliers = Supplier::all();
        $products = Product::all();
        return view('shopping.show', compact('shopping', 'suppliers', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shopping $shopping): View
    {
        $suppliers = Supplier::all();
        $products = Product::all();
        return view('shopping.edit', compact('shopping', 'suppliers', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShoppingRequest $request, Shopping $shopping): RedirectResponse
    {
        $shopping->update($request->validated());
        return to_route('shopping.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shopping $shopping): RedirectResponse
    {
        $shopping->delete();
        return to_route('shopping.index');
    }
}