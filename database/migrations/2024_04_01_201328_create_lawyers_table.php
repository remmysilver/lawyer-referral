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
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->string('category')->nullable();
            $table->string('experience')->nullable();
            $table->string('lawyer_co')->nullable();
            $table->string('fees')->nullable();
            $table->string('discount_fees')->nullable();
            $table->string('city')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers');
    }
};
