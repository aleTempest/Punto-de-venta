<?php
namespace App\Http\Controllers;

use App\Models\Quotation;
use App\Models\Product;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreQuotationRequest;
use App\Http\Requests\UpdateQuotationRequest;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotations = Quotation::all();
        return view('quotations.index', compact('quotations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        $clients = Client::all();
        return view('quotations.create', compact('products', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuotationRequest $request)
    {
        Quotation::create($request->validated());
        return to_route('quotations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quotation $quotation)
    {
        $products = Product::all();
        $clients = Client::all();
        return view('quotations.show', compact('quotation','products', 'clients'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quotation $quotation)
    {
        $products = Product::all();
        $clients = Client::all();
        return view('quotations.edit', compact('quotation','products', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuotationRequest $request, Quotation $quotation)
    {
        $quotation->update($request->validated());
        return to_route('quotations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quotation $quotation)
    {
        $quotation->delete();
        return to_route('quotations.index');
    }
}