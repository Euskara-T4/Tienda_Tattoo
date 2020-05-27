<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArgazkiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('argazkia', function (Blueprint $table) {
            $table->increments('img_id');
            $table->string('izena');
            $table->string('url');

            // Claves foraneas           
            $table->integer('langile_id')->unsigned()->nullable();
            
            // Relaciones
            $table->foreign('langile_id')->references('langile_id')->on('langilea');

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
        Schema::dropIfExists('argazkia');
    }
}
