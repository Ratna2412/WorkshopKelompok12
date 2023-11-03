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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('tgl_pemesanan');
            $table->string('keluhan');
            $table->text('ulasan')->nullable();
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_barang');

            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_barang')->references('id')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
