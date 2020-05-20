<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLangileaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langilea', function (Blueprint $table) {
            $table->increments('langile_id');
            $table->string('izena');
            $table->string('abizena');


             // campo para clave foraneas
            $table->integer('lana_id')->unsigned();
            $table->integer('erabiltzailea_id')->unsigned()->nullable();


            //relacion
            $table->foreign('lana_id')->references('lana_id')->on('lana');
            $table->foreign('erabiltzailea_id')->references('erabiltzailea_id')->on('users');



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
        Schema::dropIfExists('langilea');
    }
}
