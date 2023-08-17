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
            $table->integer('codProy');
            $table->string('titProy');
            $table->text('tipProy');
            $table->string('estProy');
            $table->date('fecIniProy');
            $table->date('fecFinProy');
            $table->string('propProy');
            $table->char('finProy');
            $table->timestamps();
            $table->primary('codProy');
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
