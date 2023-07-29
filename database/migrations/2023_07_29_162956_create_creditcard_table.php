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
        Schema::create('creditcard', function (Blueprint $table) {
            $table->id();
            $table->string('cardnumber');
            $table->string('expiration_date');
            $table->string('cvv');
            $table->string('cardHolderName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creditcard');
    }
};
