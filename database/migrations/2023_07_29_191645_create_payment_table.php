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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('user');
            $table->unsignedBigInteger('subId');
            $table->foreign('subId')->references('id')->on('subscription');
            $table->date('payment_date');
            $table->double('amount');
            $table->unsignedBigInteger('cardId');
            $table->foreign('cardId')->references('id')->on('creditcard');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
