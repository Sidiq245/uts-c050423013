<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepertemensTable extends Migration
{
    public function up()
    {
        Schema::create('departemens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_departemen');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('departemens');
    }
}
