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
            $table->string('name');
            $table->string('profile_pic')->nullable();
            $table->string('phone_number')->unique();
            $table->string('address')->nullable(); 
            $table->float('cash')->default(0);
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable(); 
            $table->string('password'); 
            $table->timestamps();
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
