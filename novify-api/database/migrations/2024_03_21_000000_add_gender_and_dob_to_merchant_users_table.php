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
        Schema::table('merchant_users', function (Blueprint $table) {
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->date('dob')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('merchant_users', function (Blueprint $table) {
            $table->dropColumn(['gender', 'dob']);
        });
    }
}; 