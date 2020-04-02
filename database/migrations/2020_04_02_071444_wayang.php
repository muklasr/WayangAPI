<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Wayang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wayangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('golongan');
            $table->string('kasta');
            $table->string('senjata');
            $table->string('ayah');
            $table->string('ibu');
            $table->string('pasangan');
            $table->string('anak');
            $table->string('image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wayangs');
    }
}
