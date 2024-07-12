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
        Schema::dropIfExists('inventories');
        Schema::create('inventories', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->foreignId('product_id')->references('id')->on('products')->cascadeOnDelete();
            $table->date('in_date');
            $table->date('out_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
