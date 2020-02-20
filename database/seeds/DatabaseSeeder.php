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

        $this->call(LanaSeeder::class);
        $this->call(UsuariosSeeder::class);

        $this->call(LangileaSeeder::class);


    }

}

