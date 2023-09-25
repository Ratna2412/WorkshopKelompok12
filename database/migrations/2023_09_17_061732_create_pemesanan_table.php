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
            
            // Foreign keys
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_vendor')->nullable();
            $table->unsignedBigInteger('id_bayar')->nullable();
            $table->unsignedBigInteger('id_barang')->nullable();
            
            // Define foreign key constraints
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_vendor')->references('id')->on('vendor');
            $table->foreign('id_bayar')->references('id')->on('pembayaran');
            $table->foreign('id_barang')->references('id')->on('barang_elektronik');
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
