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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('alamat');
            $table->string('no_telp', 13);
            $table->rememberToken();
            $table->timestamps();
<<<<<<< HEAD
            $table->unsignedBigInteger('id_role');

            $table->foreign('id_role')->references('id')->on('role');

=======

            $table->unsignedBigInteger('id_role');

            $table->foreign('id_role')->references('id')->on('role');
>>>>>>> 5a9e08e43ceea365814c4b615142fbd9e8fa25fa
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
