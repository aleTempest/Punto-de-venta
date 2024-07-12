<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'cat_id',
        'name',
        'colors',
        'purchase_date',
        'sale_price',
        'purchase_price',
        'short_desc',
        'long_desc'
    ];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}