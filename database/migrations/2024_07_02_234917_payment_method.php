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
        Schema::create('shoppings', function(Blueprint $table) {
            $table->id('id')->primary();
            $table->foreignId('id_supp')->references('id')->on('suppliers')->cascadeOnDelete();
            $table->foreignId('id_product')->references('id')->on('products')->cascadeOnDelete();
            $table->integer('amount');
            $table->decimal('price',10,2)->default(0);
            $table->date('purchase_date');
            $table->integer('discount');
            $table->timestamps();
        });

        Schema::dropIfExists('payment_methods');
        Schema::create('payment_methods', function(Blueprint $table) {
            $table->id('id')->primary();
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
        Schema::dropIfExists('shoppings');
    }
};
