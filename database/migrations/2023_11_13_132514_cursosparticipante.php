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
        Schema::create('cursosparticipante', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idparticipante');
            $table->unsignedBigInteger('idcurso');
            $table->unsignedBigInteger('idcertificado');
            $table->foreign('idparticipante')->references('id')->on('participantes');
            $table->foreign('idcurso')->references('id')->on('cursos');
            $table->foreign('idcertificado')->references('id')->on('certificados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursosparticipante');
    }
};
