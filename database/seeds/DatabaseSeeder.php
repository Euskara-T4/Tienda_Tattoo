<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        // seeder para insertar trabajos
        $this->call(LanaSeeder::class);

        // seeder para insertar usuarios
        $this->call(UsuariosSeeder::class);

        // seeder para introducir trabajadores
        $this->call(LangileaSeeder::class);

        //seeder para insertar informacion de las fotos 
        $this->call(ArgazkiSeeder::class);


    }

}

