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
        Schema::create('barang_elektronik', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('merk_barang');
            $table->string('series_barang');
            $table->string('jenis_barang');
            $table->integer('jumlah_barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_elektronik');
    }
};
