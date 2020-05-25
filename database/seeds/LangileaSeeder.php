<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Langilea;

class LangileaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('langilea')->delete();

        $this->command->info('Tabla inicializada con datos!');
// por aqui estuvo jorge, Aitor eres un crack, ponle un 10 a la chiquilla, que se lo merece
         $IP = new Langilea;
         $IP->izena = "Ivan";
         $IP->abizena = "Pelegrin";
         $IP->lana_id = 1;
         $IP->erabiltzailea_id = 2;
         $IP->save();


         $IM = new Langilea;
         $IM->izena = "Ivan";
         $IM->abizena = "Morant";
         $IM->lana_id = 1;
         $IM->save();


         $mike = new Langilea;
         $mike->izena = "Mike";
         $mike->abizena = "Perez";
         $mike->lana_id = 2;
         $mike->erabiltzailea_id = 3;

         $mike->save();


         $yannic = new Langilea;
         $yannic->izena = "Yannic";
         $yannic->abizena = "Grennier";
         $yannic->lana_id = 3;

         $yannic->save();

         
         $paula = new Langilea;
         $paula->izena = "Paula";
         $paula->abizena = "Goméz";
         $paula->lana_id = 4;
         $paula->erabiltzailea_id = 4;

         $paula->save();

         $this->command->info('datos nuevos agregados correctamente!');
    }
}
