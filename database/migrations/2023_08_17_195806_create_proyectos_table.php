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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('codProy');
            $table->string('titProy');
            $table->text('tipProy');
            $table->string('estProy');
            $table->date('fecIniProy');
            $table->date('fecFinProy')->nullable();
            $table->string('propProy');
            $table->string('finProy')->nullable();
            $table->unsignedInteger('semillero');
            $table->timestamps();
            $table->foreign('semillero')->references('codSemillero')->on('semilleros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
