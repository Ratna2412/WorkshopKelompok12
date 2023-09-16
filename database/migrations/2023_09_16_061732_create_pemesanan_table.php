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
            $table->string('status_pemesanan');
            $table->text('ulasan')->nullable();
        });

        Schema::table('pemesanan', function($table) {
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_vendor')->references('id')->on('vendor')->onDelete('set null');
            $table->foreign('id_bayar')->references('id')->on('pembayaran')->onDelete('set null');
            $table->foreign('id_barang')->references('id')->on('barang_elektronik')->onDelete('set null');
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
