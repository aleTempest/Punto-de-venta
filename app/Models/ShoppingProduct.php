<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'shopping_id',
        'product_id',
        'amount',
        'price',
    ];

    public function shopping()
    {
        return $this->belongsTo(Shopping::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
