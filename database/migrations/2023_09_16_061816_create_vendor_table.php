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
        Schema::create('vendor', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_vendor');
            $table->string('alamat_vendor');
            $table->string('email_vendor')->unique();
            $table->string('no_Telp_vendor');
            $table->dateTime('jadwal_vendor');
        });

        Schema::table('vendor', function($table) {
            $table->foreign('id_layanan')->references('id')->on('layanan')->onDelete('set null');
            $table->foreign('id_lokasi')->references('id')->on('lokasi')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor');
    }
};
