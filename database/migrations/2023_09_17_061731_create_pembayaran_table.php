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
            $table->boolean('status_bayar');
            //users, vendor, pemesanan
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_vendor');
            $table->unsignedBigInteger('id_pemesanan');
            //fk
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_vendor')->references('id')->on('vendor');
            
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
