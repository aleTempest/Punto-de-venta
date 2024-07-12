<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shopping extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_supp',
        'discount',
        'purchase_date',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supp');
    }

    public function shoppingProducts()
    {
        return $this->hasMany(ShoppingProduct::class);
    }
}
