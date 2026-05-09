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
        Schema::create('tenant_details', function (Blueprint $table) {
            $table->id();

            // Relation to tenants table (stancl/tenancy uses string/uuid usually)
            $table->string('tenant_id')->unique();

            // School Information
            $table->string('school_name');
            $table->string('school_code')->unique();

            // Contact Info
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();

            // Address
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();

            // Branding
            $table->string('logo')->nullable();

            // Localization
            $table->string('timezone')->default('UTC');
            $table->string('currency')->default('USD');
            $table->string('language')->default('en');

            // Extra Info
            $table->year('established_year')->nullable();
            $table->string('principal_name')->nullable();
            $table->text('description')->nullable();

            $table->timestamps();

            // Foreign key (optional depending on tenancy setup)
            // $table->foreign('tenant_id')
            //       ->references('id')
            //       ->on('tenants')
            //       ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_details');
    }
};
