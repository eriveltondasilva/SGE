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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(true);
            $table->string('name', 100);
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('email', 100)->unique()->nullable();
            $table->string('telephone')->nullable();
            $table->string('nationality')->nullable();
            $table->date('birth_date')->nullable();
            $table->set('gender', ['F', 'M'])->nullable();
            $table->string('photo_path', 2048)->nullable();
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
