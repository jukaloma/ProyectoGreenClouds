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
        Schema::create('participaciones', function (Blueprint $table) {
            $table->increments('codPart');
            $table->string('modPart');
            $table->string('califPart');
            $table->string('certPart');
            $table->string('evidencias');
            $table->unsignedInteger('proyecto');
            $table->unsignedInteger('evento');
            $table->timestamps();
            $table->foreign('proyecto')->references('codProy')->on('proyectos');
            $table->foreign('evento')->references('codEvento')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participaciones');
    }
};
