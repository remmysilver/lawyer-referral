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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('lawyer_name')->nullable();
            $table->string('hours')->nullable();
            $table->string('fee')->nullable();
            $table->string('image')->nullable();
            $table->string('lawyer_id')->nullable();
            $table->string('user_id')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->date('start_date')->nullable(); // New column for start date
            $table->date('end_date')->nullable();   // New column for end date
            $table->enum('status', ['active', 'expired'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
