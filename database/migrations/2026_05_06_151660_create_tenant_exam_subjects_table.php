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
        Schema::create('tenant_exam_subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_exam_id')->constrained('tenant_exams')->cascadeOnDelete();
            $table->foreignId('global_subject_id')->constrained()->cascadeOnDelete();

            $table->unsignedTinyInteger('written_mark')->default(0);
            $table->unsignedTinyInteger('written_pass_mark')->default(0);

            $table->unsignedTinyInteger('mcq_mark')->default(0);
            $table->unsignedTinyInteger('mcq_pass_mark')->default(0);

            $table->unsignedTinyInteger('practical_mark')->default(0);
            $table->unsignedTinyInteger('practical_pass_mark')->default(0);

            $table->unsignedTinyInteger('viva_mark')->default(0);
            $table->unsignedTinyInteger('viva_pass_mark')->default(0);

            $table->unsignedTinyInteger('assessment_mark')->default(0);
            $table->unsignedTinyInteger('assessment_pass_mark')->default(0);

            $table->unsignedTinyInteger('other_mark')->default(0);

            $table->unsignedSmallInteger('total_mark')->default(0);
            $table->unsignedSmallInteger('pass_mark')->default(0);
            $table->unsignedSmallInteger('pass_mark_percent')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_exam_subjects');
    }
};
