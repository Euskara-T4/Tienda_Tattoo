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
            $table->string('bezero_izena');
            $table->string('bezero_email');
            $table->string('deskripzioa')->nullable();
            $table->bigInteger('telefonoa');
            $table->string('ordua')->nullable();
            $table->string('eguna')->nullable();
            /* $table->dateTime('ordua')->nullable();
            $table->dateTime('eguna')->nullable(); */

            // Claves foraneas
            $table->integer('lana_id')->unsigned();

            // Relaciones
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
