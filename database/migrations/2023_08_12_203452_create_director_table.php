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
        Schema::create('director', function (Blueprint $table) {
            $table->string('nomDir');
            $table->string('emailDir');
            $table->string('telDir');
            $table->string('picDir');
            $table->string('usuDir');
            $table->string('passDir');
            $table->timestamps();
            $table->primary('nomDir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('director');
    }
};
