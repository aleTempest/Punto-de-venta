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
        Schema::dropIfExists('sales');
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cat')->references('cat_id')->on('categories')->onDelete('cascade');
            $table->foreignId('id_client')->references('id')->on('clients')->onDelete('cascade');
            $table->date('sale_date');
            $table->decimal('IVA', 8, 2)->default(1);
            $table->decimal('total', 10, 2)->default(0);
            $table->timestamps();
        });

        // tabla para poder vender varios productos a la vez
        Schema::create('sale_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->constrained('sales')->cascadeOnDelete();
            $table->foreignId('id_product')->constrained('products')->cascadeOnDelete();
            $table->integer('amount')->default(1);
            $table->decimal('price', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_product');
        Schema::dropIfExists('sales');
    }
};
