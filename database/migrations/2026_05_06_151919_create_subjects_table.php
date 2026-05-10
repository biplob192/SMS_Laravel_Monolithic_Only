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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants')->onDelete('cascade');
            $table->foreignId('tenant_class_id')->constrained('classes')->onDelete('cascade');

            // Basic Info
            $table->string('name', 100);
            $table->string('display_name', 150);
            $table->string('code', 25)->nullable();
            $table->boolean('is_common_group')->default(false);
            $table->foreignId('global_group_id')->nullable()->constrained('global_groups')->onDelete('set null');
            $table->boolean('is_common_section')->default(false);
            $table->foreignId('tenant_section_id')->nullable()->constrained('tenant_sections')->onDelete('set null');


            // $table->unsignedTinyInteger('written_mark')->default(0);
            // $table->unsignedTinyInteger('written_pass_mark')->default(0);
            // $table->unsignedTinyInteger('mcq_mark')->default(0);
            // $table->unsignedTinyInteger('mcq_pass_mark')->default(0);
            // $table->unsignedTinyInteger('practical_mark')->default(0);
            // $table->unsignedTinyInteger('practical_pass_mark')->default(0);
            // $table->unsignedTinyInteger('viva_mark')->default(0);
            // $table->unsignedTinyInteger('viva_pass_mark')->default(0);
            // $table->unsignedTinyInteger('assessment_mark')->default(0);
            // $table->unsignedTinyInteger('assessment_pass_mark')->default(0);
            // $table->unsignedTinyInteger('other_mark')->default(0);
            // $table->unsignedSmallInteger('total_mark')->default(0);
            // $table->unsignedSmallInteger('pass_mark')->default(0);
            // $table->unsignedSmallInteger('pass_mark_percent')->default(0);

            // Practical/Lab
            $table->boolean('has_practical')->default(false);

            // Status
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
