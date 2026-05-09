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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->decimal('price', 10, 2)->default(0);

            // Billing
            // $table->enum('billing_cycle', ['monthly', 'yearly']);
            $table->string('billing_cycle', 50)->comment('monthly, yearly');

            // Limits
            $table->integer('max_students')->nullable();
            $table->integer('max_teachers')->nullable();
            $table->integer('max_staff')->nullable();

            // Features (flexible)
            $table->json('features')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
