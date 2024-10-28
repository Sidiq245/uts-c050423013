<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();
            $table->decimal('jumlah_gaji', 15, 2);
            $table->date('tanggal_dibayarkan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gajis');
    }
}
