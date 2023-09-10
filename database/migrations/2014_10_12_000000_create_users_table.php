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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('nisn');
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('sekolah_asal');
            $table->string('nama_wali');
            // $table->string('alamat');
            $table->string('no_hp');

            $table->string('jurusan')->nullable();
            $table->string('foto')->nullable();
            $table->string('status')->nullable();

            $table->string('role')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
