<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('categories')->insert([
            [ 'cat_id' => 1, 'name' => 'Category 1', 'created_at' => now(), 'updated_at' => now()],
            [ 'cat_id' => 2, 'name' => 'Category 2', 'created_at' => now(), 'updated_at' => now()],
            [ 'cat_id' => 3, 'name' => 'Category 3', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('products')->insert([
            ['cat_id' => 1, 'name' => 'Product 1', 'purchase_price' => 0.0, 'sale_price' => 0.0, 'colors' => 'color', 'purchase_date' => now(), 'short_desc' => 'short desc', 'long_desc' => 'long desc', 'created_at' => now(), 'updated_at' => now()],
            ['cat_id' => 2, 'name' => 'Product 2', 'purchase_price' => 0.0, 'sale_price' => 0.0, 'colors' => 'color', 'purchase_date' => now(), 'short_desc' => 'short desc', 'long_desc' => 'long desc', 'created_at' => now(), 'updated_at' => now()],
            ['cat_id' => 3, 'name' => 'Product 3', 'purchase_price' => 0.0, 'sale_price' => 0.0, 'colors' => 'color', 'purchase_date' => now(), 'short_desc' => 'short desc', 'long_desc' => 'long desc', 'created_at' => now(), 'updated_at' => now()],
            ['cat_id' => 1, 'name' => 'Product 4', 'purchase_price' => 0.0, 'sale_price' => 0.0, 'colors' => 'color', 'purchase_date' => now(), 'short_desc' => 'short desc', 'long_desc' => 'long desc', 'created_at' => now(), 'updated_at' => now()],
            ['cat_id' => 2, 'name' => 'Product 5', 'purchase_price' => 0.0, 'sale_price' => 0.0, 'colors' => 'color', 'purchase_date' => now(), 'short_desc' => 'short desc', 'long_desc' => 'long desc', 'created_at' => now(), 'updated_at' => now()],
            ['cat_id' => 3, 'name' => 'Product 6', 'purchase_price' => 0.0, 'sale_price' => 0.0, 'colors' => 'color', 'purchase_date' => now(), 'short_desc' => 'short desc', 'long_desc' => 'long desc', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('categories')->delete();
        DB::table('products')->delete();
    }
};
