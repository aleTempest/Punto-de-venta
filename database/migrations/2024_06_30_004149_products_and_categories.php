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
        Schema::create('categories', function(Blueprint $table) {
            $table->id('cat_id')->primary();
            $table->string('name', length: 100)->nullable(false);
            $table->timestamps();
        });

        Schema::create('products', function(Blueprint $table) {
            $table->id('id')->primary();
            $table->foreignId('cat_id')->references('cat_id')->on('categories')->cascadeOnDelete();
            $table->string('name');
            $table->decimal('purchase_price',8,2)->default(0);
            $table->decimal('sale_price',8,2)->default(0);
            $table->string('colors');
            $table->date('purchase_date');
            $table->text('short_desc')->nullable();
            $table->text('long_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
    }
};
