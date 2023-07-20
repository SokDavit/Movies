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
        Schema::create('movie_poster', function (Blueprint $table) {
            $table->unsignedBigInteger('poster_id');
            $table->foreign('poster_id')->references('id')->on('movie');
            $table->string('background',255);
            $table->string('poster-1',255)->nullable();
            $table->string('poster-2',255)->nullable();
            $table->string('poster-3',255)->nullable();
            $table->string('poster-4',255)->nullable();
            $table->string('poster-5',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_poster');
    }
};
