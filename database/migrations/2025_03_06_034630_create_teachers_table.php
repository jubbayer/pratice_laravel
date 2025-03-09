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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name');
            $table->integer('t_age');
            $table->string('t_email')->unique();
            $table->string('t_gender');
            $table->text('t_number');
            $table->string('t_dept');
            $table->text('dept_img');        
            $table->integer('t_salary');
            $table->text('teacher_image');
            $table->integer('student_id');
            $table->timestamps();
        });
    }
  
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
