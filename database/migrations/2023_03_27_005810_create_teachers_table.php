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
            $table->string('full_name', 100);
            $table->string('email', 100)->unique()->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('address_street')->nullable();
            $table->string('address_complement')->nullable();
            $table->string('address_neighborhood')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_cep')->nullable();
            $table->string('address_state')->nullable();
            $table->string('nationality')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['F', 'M'])->nullable();
            $table->text('note')->nullable();
            $table->string('photo_path', 2048)->nullable();
            $table->timestamps();
            $table->boolean('status')->default(true);
            $table->foreignId('school_id')->nullable();
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
