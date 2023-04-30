<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('school_class_student', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_class_id')->constrained('school_classes');
            $table->foreignId('student_id')->constrained('students');
            $table->timestamps();
        });

        //
        Schema::create('school_class_teacher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_class_id')->constrained('school_classes');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->timestamps();
        });

        //
        Schema::create('subject_teacher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->timestamps();
        });





        //
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('school_id')->constrained('schools');
            $table->foreignId('role_id')->constrained('roles');
        });

        // Chave estrangeira para adicionar o id da escola ao aluno
        Schema::table('students', function (Blueprint $table) {
            $table->foreignId('school_id')->nullable()->constrained('schools');
        });

        // Chave estrangeira para adicionar o id da escola ao professor
        Schema::table('teachers', function (Blueprint $table) {
            $table->foreignId('school_id')->nullable()->constrained('schools');
        });

        //
        Schema::table('relatives', function (Blueprint $table) {
            $table->foreignId('student_id')->nullable()->constrained('students');
        });

        // Chaves estrangeiras da tabela de endereço
        Schema::table('addresses', function (Blueprint $table) {
            $table->foreignId('student_id')->nullable()->constrained('students');
            $table->foreignId('teacher_id')->nullable()->constrained('teachers');
        });

        // Chaves estrangeiras da tabela de endereço
        Schema::table('school_classes', function (Blueprint $table) {
            $table->year('school_year')->nullable();
            $table->foreign('school_year')->references('year')->on('school_years');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('school_classes_students');
        Schema::dropIfExists('school_classes_teachers');
        Schema::dropIfExists('subjects_teachers');

    }
};
