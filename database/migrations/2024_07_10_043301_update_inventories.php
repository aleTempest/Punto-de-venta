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
        Schema::table('inventories', function (Blueprint $table) {
            $table->integer('amount')->default(0)->after('out_date');
            $table->string('movement')->default('')->after('amount');
            $table->string('reason')->default('')->after('movement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventories', function (Blueprint $table) {
            $table->dropColumn('amount');
            $table->dropColumn('movement');
            $table->dropColumn('reason');
        });
    }
};