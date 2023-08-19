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
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('codEvento');
            $table->string('nomEvento');
            $table->text('descEvento');
            $table->date('fecIniEvento');
            $table->date('fecFinEvento');
            $table->string('lugarEvento');
            $table->string('tipoEvento');
            $table->char('modEvento');
            $table->string('clasEvento');
            $table->text('obsEvento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
