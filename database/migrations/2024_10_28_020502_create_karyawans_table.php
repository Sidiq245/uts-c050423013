<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id('id_karyawan');
            $table->string('nama', 100);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('telepon', 15);
            $table->string('email', 50)->unique();
            $table->date('tanggal_masuk');
            //$table->foreignId('jabatan_id')->constrained('jabatan');
            //$table->foreignId('departemen_id')->constrained('departemen');
            $table->enum('status_karyawan', ['aktif', 'non-aktif']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
};
