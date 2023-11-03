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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('tgl_bayar');
            $table->float('total_bayar');
            $table->char('status');

            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_pemesanan');

            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->foreign('id_pemesanan')->references('id')->on('pemesanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
