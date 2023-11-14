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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->unsignedBigInteger('idfacultad'); 
            $table->foreign('idfacultad')->references('id')->on('facultades');
            $table->unsignedBigInteger('idcarrera'); 
            $table->foreign('idcarrera')->references('id')->on('carreras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
