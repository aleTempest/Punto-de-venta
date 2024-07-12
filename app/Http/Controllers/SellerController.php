<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\UpdateSellerRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('sellers.index', [
            'sellers' => Seller::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('sellers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSellerRequest $request): RedirectResponse
    {
        Seller::create($request->validated());
        return to_route('sellers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Seller $seller): View
    {
        return view('sellers.show', compact('seller'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seller $seller): View
    {
        return view('sellers.edit', compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSellerRequest $request, Seller $seller): RedirectResponse
    {
        $seller->update($request->validated());
        return to_route('sellers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seller $seller): RedirectResponse
    {
        $seller->delete();
        return to_route('sellers.index');
    }
}