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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->foreignId('id_product')->references('id')->on('products')->onDelete('cascade');
            $table->foreignId('id_client')->references('id')->on('clients')->onDelete('cascade');
            $table->date('quotation_date');
            $table->date('validity');
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
