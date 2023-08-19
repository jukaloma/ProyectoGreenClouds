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
        Schema::create('coordinadores', function (Blueprint $table) {
            $table->increments('idCoord');
            $table->string('nomCoord');
            $table->string('dirCoord');
            $table->string('telCoord');
            $table->string('emailCoord');
            $table->char('sexCoord','1');
            $table->string('picCoord');
            $table->date('fecNacCoord');
            $table->string('progCoord');
            $table->string('areaCoord');
            $table->date('fecVincCoord');
            $table->string('acuerNomCoord');
            $table->unsignedInteger('usuario')->nullable();
            $table->unsignedInteger('semillero')->nullable();
            $table->timestamps();
            $table->foreign('semillero')->references('codSemillero')->on('semilleros');
            $table->foreign('usuario')->references('idUsuario')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordinadores');
    }
};
