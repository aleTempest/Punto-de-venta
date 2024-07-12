<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Client;
use App\Models\Product;
use App\Models\Category;
use App\Models\SaleProduct;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        $products = Product::all();
        $categories = Category::all();
        return view('sales.create', compact('clients', 'products', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validar el formulario incluyendo productos
    $request->validate([
        'id_client' => 'required|exists:clients,id',
        'id_cat' => 'required|exists:categories,id',
        'sale_date' => 'required|date',
        'IVA' => 'required|numeric',
        'total' => 'required|numeric',
        'products' => 'required|array|min:1',
        'products.*' => 'required|exists:products,id',
        'amounts.*' => 'required|integer|min:1',
        'prices.*' => 'required|numeric|min:0',
    ]);

    // Crear la venta principal
    $sale = Sale::create([
        'id_client' => $request->id_client,
        'id_cat' => $request->id_cat,
        'sale_date' => $request->sale_date,
        'IVA' => $request->IVA,
        'total' => $request->total,
    ]);

    // Agregar los productos vendidos
    foreach ($request->products as $index => $productId) {
        SaleProduct::create([
            'sale_id' => $sale->id,
            'product_id' => $productId,
            'amount' => $request->amounts[$index],
            'price' => $request->prices[$index],
        ]);
    }

    // Redirigir a la lista de ventas
    return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
