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
        Schema::create('jenis_bayar', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('metode_bayar');
            $table->unsignedBigInteger('id_bayar');

            $table->foreign('id_bayar')->references('id')->on('pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_bayar');
    }
};
