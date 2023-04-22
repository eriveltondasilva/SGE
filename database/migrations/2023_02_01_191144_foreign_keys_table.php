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
        // !Criar tabelas pivot
        Schema::create('school_classes_students', function (Blueprint $table) {
            $table->foreignId('school_class_id')->constrained('school_classes');
            $table->foreignId('student_id')->constrained('students');
            $table->timestamps();
        });

        Schema::create('school_classes_teachers', function (Blueprint $table) {
            $table->foreignId('school_class_id')->constrained('school_classes');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->timestamps();
        });

        Schema::create('subjects_teachers', function (Blueprint $table) {
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->timestamps();
        });





        // !Adicionar colunas de chaves estrangeiras
        //
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('school_id')->constrained('schools');
            $table->foreignId('role_id')->constrained('roles');
        });


        //
        Schema::table('students', function (Blueprint $table) {
            $table->foreignId('school_id')->nullable()->constrained('schools');
        });


        //
        Schema::table('relatives', function (Blueprint $table) {
            $table->foreignId('student_id')->nullable()->constrained('students');
        });


        //
        Schema::table('teachers', function (Blueprint $table) {
            $table->foreignId('school_id')->constrained('schools');
        });


        // Chaves estrangeiras da tabela de endereço
        Schema::table('addresses', function (Blueprint $table) {
            $table->foreignId('student_id')->nullable()->constrained('students');
            $table->foreignId('teacher_id')->nullable()->constrained('teachers');
            // TODO: Adicionar a opção para guardar o endereço do responsável pelo aluno
            // $table->foreignId('relative_id')->nullable()->constrained('relatives');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_classes_students');
        Schema::dropIfExists('school_classes_teachers');
        Schema::dropIfExists('subjects_teachers');

    }
};
