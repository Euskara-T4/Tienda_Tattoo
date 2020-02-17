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
            $table->increments('id_langile');
            $table->string('izena');
            $table->string('abizena');


             // campo para clave foraneas
            $table->integer('id_lana')->unsigned();

            //relacion
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
        Schema::dropIfExists('langilea');
    }
}
