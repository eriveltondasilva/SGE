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
        Schema::create('school_classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');             // Turma
            $table->string('shift');                  // Turno
            $table->string('schooling');              // Escolaridade
            $table->string('room');                   // Sala
            $table->timestamps();                     //
            $table->foreignId ('school_years_year');  // Ano Letivo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_classes');
    }
};
