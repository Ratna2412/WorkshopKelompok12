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
        Schema::create('jenis_barang', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jenis_barang');
            $table->unsignedBigInteger('id_barang');

            $table->foreign('id_barang')->references('id')->on('barang_elektronik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_barang');
    }
};