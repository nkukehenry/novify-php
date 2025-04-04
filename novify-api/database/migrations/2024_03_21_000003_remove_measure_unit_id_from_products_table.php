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
        Schema::table('products', function (Blueprint $table) {
            // First, drop the foreign key if it exists
            $table->dropForeign(['measure_unit_id']);
            
            // Then drop the column
            $table->dropColumn('measure_unit_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Recreate the column
            $table->foreignId('measure_unit_id')->nullable()->constrained('product_measure_units');
        });
    }
}; 