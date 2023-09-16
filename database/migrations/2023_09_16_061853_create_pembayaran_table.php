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
            $table->string('metode_bayar');
            $table->dateTime('tgl_bayar');
            $table->float('total_bayar');
            $table->boolean('status_bayar');
        });

        Schema::table('pembayaran', function($table) {
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_vendor')->references('id')->on('vendor')->onDelete('set null');
            $table->foreign('id_pemesanan')->references('id')->on('pemesanan')->onDelete('set null');
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
