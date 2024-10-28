<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cuti', function (Blueprint $table) {
            $table->id('id_cuti');
            //$table->foreignId('karyawan_id')->constrained('karyawan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->text('alasan');
            $table->enum('status_cuti', ['disetujui', 'ditolak', 'menunggu']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuti');
    }
};
