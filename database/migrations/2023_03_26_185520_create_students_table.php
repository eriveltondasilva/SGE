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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schools_id')->nullable();
            $table->string('full_name', 100);
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('email', 100)->unique()->nullable();
            $table->string('address_street')->nullable();
            $table->string('address_complement')->nullable();
            $table->string('address_neighborhood')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_cep')->nullable();
            $table->string('address_state')->nullable();
            $table->string('nationality')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('gov_benefits')->nullable();
            $table->string('health_problem')->nullable();
            $table->text('note')->nullable();
            $table->date('birth_date')->nullable();
            $table->set('gender', ['F', 'M'])->nullable();
            $table->string('photo_path', 2048)->nullable();
            $table->string('kin_name', 100)->nullable();
            $table->string('kin_kinship')->nullable();
            $table->string('kin_telephone')->nullable();
            $table->timestamps();
            $table->boolean('status')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
