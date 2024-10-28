<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->id('id_gaji');
            //$table->foreignId('karyawan_id')->constrained('karyawan');
            $table->decimal('gaji_pokok', 15, 2);
            $table->decimal('tunjangan', 15, 2)->nullable();
            $table->decimal('potongan', 15, 2)->nullable();
            $table->date('tanggal_gaji');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gaji');
    }
};
