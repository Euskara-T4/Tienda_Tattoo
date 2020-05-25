<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Zita;

class ZitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zita')->delete();

        $this->command->info('Tabla inicializada con datos!');

        $cita = new Zita;
        $cita->bezero_izena = "Jon";
        $cita->bezero_email = "jon23@gmail.com";
        $cita->deskripzioa = "tattoo de lobo en el pecho";
        $cita->telefonoa = 345879123;
        $cita->ordua = "12:00";
        $cita->eguna = "02/05/2020";
        $cita->lana_id = 1;
        $cita->save();

        $cita = new Zita;
        $cita->bezero_izena = "Maria";
        $cita->bezero_email = "maritxu90@gmail.com";
        $cita->telefonoa = 456158325;
        $cita->ordua = "18:00";
        $cita->eguna = "02/05/2020";
        $cita->lana_id = 2;
        $cita->save();

        $cita = new Zita;
        $cita->bezero_izena = "Pepe";
        $cita->bezero_email = "Pepe342@hotmail.com";
        $cita->telefonoa = 2345671234;
        $cita->ordua = "11:30";
        $cita->eguna = "03/06/2020";
        $cita->lana_id = 4;
        $cita->save();

        $cita = new Zita;
        $cita->bezero_izena = "Nerea";
        $cita->bezero_email = "nereaa15@gmail.com";
        $cita->telefonoa = 624958756;
        $cita->ordua = "08:15";
        $cita->eguna = "10/06/2020";
        $cita->lana_id = 5;
        $cita->save();

        $this->command->info('datos nuevos agregados correctamente!');

    }
}
