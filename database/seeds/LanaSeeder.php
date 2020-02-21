<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Lana;

class LanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lana')->delete();

        $this->command->info('Tabla inicializada con datos!');

        $tattoo = new Lana;
        $tattoo->izena = "tattoo";
        $tattoo->save();

        $piercing = new Lana;
        $piercing->izena = "Piercing";
        $piercing->save();

        $microdermal = new Lana;
        $microdermal->izena = "Microdermal";
        $microdermal->save();

        $escarificacion = new Lana;
        $escarificacion->izena = "Escarificacion";
        $escarificacion->save();


        $eliminacionTattoo = new Lana;
        $eliminacionTattoo->izena = "Eliminacion tattoo";
        $eliminacionTattoo->save();

        $this->command->info('datos nuevos agregados correctamente!');
    }
}
