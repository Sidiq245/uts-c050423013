<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('jabatan', function (Blueprint $table) {
            $table->id('jabatan_id');
            $table->string('nama_jabatan', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jabatan');
    }
};
