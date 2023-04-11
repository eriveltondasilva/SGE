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
        Schema::table('users', function (Blueprint $table) {
            // $table->foreignId('school_id')->constrained('users');
            // $table->foreignId('role_id')->constrained('roles');
            $table->foreignId('school_id')->nullable();
            $table->foreignId('role_id')->nullable();
        });
        
        Schema::table('students', function (Blueprint $table) {
            // $table->foreignId('school_id')->constrained('schools');
            // $table->foreignId('address_id')->constrained('addresses');
            // $table->foreignId('relative_id')->constrained('relatives');
            $table->foreignId('school_id')->nullable();
            $table->foreignId('address_id')->nullable();
            $table->foreignId('relative_id')->nullable();
        });
        
        Schema::table('teachers', function (Blueprint $table) {
            // $table->foreignId('school_id')->constrained('teachers');
            // $table->foreignId('role_id')->constrained('roles');
            // $table->foreignId('address_id')->constrained('addresses');
            $table->foreignId('school_id')->nullable();
            $table->foreignId('address_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
