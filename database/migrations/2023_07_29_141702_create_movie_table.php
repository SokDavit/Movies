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
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('duration', 10);
            $table->string('year', 4);
            $table->string('age');
            $table->string('quality')->default('HD');
            $table->text('description');
            $table->string('poster', 255);
            $table->string('background', 255);
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('genre_id')->on('genre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
