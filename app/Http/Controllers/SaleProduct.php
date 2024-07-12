<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class SaleProduct extends Controller
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'id_sale',
        'id_product',
        'amount',
        'price'
    ];  

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'id_sale');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
