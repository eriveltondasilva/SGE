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
        Schema::create('schoolRegisters', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('classNumber');
            $table->text('summary');
            $table->tinyInteger('class_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schoolRegisters');
    }
};
