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
        Schema::create('nisns', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->unsignedBigInteger('id_student');
            $table->foreign('id_student')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nisns');
    }
};
