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
        Schema::create('exam_marks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_exam_subject_id')->constrained('tenant_exam_subjects')->cascadeOnDelete();
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();

            // Marks breakdown
            $table->unsignedTinyInteger('written_mark_obtained')->default(0);
            $table->unsignedTinyInteger('mcq_mark_obtained')->default(0);
            $table->unsignedTinyInteger('practical_mark_obtained')->default(0);
            $table->unsignedTinyInteger('viva_mark_obtained')->default(0);
            $table->unsignedTinyInteger('assessment_mark_obtained')->default(0);
            $table->unsignedTinyInteger('other_mark_obtained')->default(0);

            // Final result
            $table->unsignedSmallInteger('total_obtained')->default(0);
            $table->boolean('is_pass')->default(true);
            $table->string('grade')->nullable();
            $table->decimal('gpa', 3, 2)->nullable();

            $table->timestamps();

            // Prevent duplicate entries
            $table->unique(['tenant_exam_subject_id', 'student_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_marks');
    }
};
