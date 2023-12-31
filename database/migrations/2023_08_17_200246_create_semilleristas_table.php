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
        Schema::create('semilleristas', function (Blueprint $table) {
            $table->increments('codSemillerista');
            $table->string('nomSemillerista');
            $table->string('dirSemillerista');
            $table->string('telSemillerista');
            $table->string('emailSemillerista');
            $table->char('sexSemillerista','1');
            $table->date('fecNacSemillerista');
            $table->integer('semSemillerista');
            $table->string('picSemillerista');
            $table->string('repMatricula');
            $table->string('progSemillerista');
            $table->date('fecVincSemillerista');
            $table->char('estSemillerista');
            $table->unsignedInteger('usuario')->nullable();
            $table->unsignedInteger('semillero');
            $table->unsignedInteger('proyecto')->nullable();
            $table->timestamps();
            $table->foreign('semillero')->references('codSemillero')->on('semilleros');
            $table->foreign('proyecto')->references('codProy')->on('proyectos');
            $table->foreign('usuario')->references('idUsuario')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semilleristas');
    }
};
