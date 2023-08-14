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
        Schema::create('semilleros', function (Blueprint $table) {
            $table->string('nomSemillero');
            $table->string('emailSemillero');
            $table->string('logoSemillero');
            $table->text('descSemillero');
            $table->text('misSemillero');
            $table->text('visSemillero');
            $table->text('valSemillero');
            $table->text('objSemillero');
            $table->string('lineaSemillero');
            $table->string('presSemillero');
            $table->date('fecCreaSemillero');
            $table->string('resCreaSemillero');
            $table->timestamps();
            $table->primary('nomSemillero');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semilleros');
    }
};
