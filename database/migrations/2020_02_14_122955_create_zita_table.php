<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zita', function (Blueprint $table) {
            $table->increments('zita_id');

            // campo para clave foraneas
            $table->integer('erabiltzailea_id')->unsigned();
            $table->string('deskripzioa');
            $table->dateTime('ordutegia');

            $table->integer('lana_id')->unsigned();

            //relaciones
            $table->foreign('erabiltzailea_id')->references('erabiltzailea_id')->on('users');
            $table->foreign('lana_id')->references('lana_id')->on('lana');


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
        Schema::dropIfExists('zita');
    }
}
