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
            $table->increments('id_zita');

            // campo para clave foraneas
            $table->integer('id_erabiltzailea')->unsigned();
            $table->integer('id_lana')->unsigned();

            //relaciones
            $table->foreign('id_erabiltzailea')->references('id_erabiltzailea')->on('users');
            $table->foreign('id_lana')->references('id_lana')->on('lana');


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
