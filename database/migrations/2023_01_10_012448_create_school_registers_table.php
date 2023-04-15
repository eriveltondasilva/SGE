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
        Schema::create('school_registers', function (Blueprint $table) {
            $table->id();
            $table->start_date('date');
            $table->end_date('date');
            $table->text('summary')->nullable();
            $table->tinyInteger('class_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_registers');
    }
};
