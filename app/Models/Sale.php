<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $fillable = [
        'id_cat',
        'id_client',
        'sale_date',
        'IVA',
        'total'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_cat');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'sale_product', 'sale_id', 'product_id')
                    ->withPivot('amount', 'price')
                    ->withTimestamps();
    }
}