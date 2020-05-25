<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();
        
        $this->command->info('Tabla inicializada con datos!');

        $admin = new User;
        $admin->email = "admin@gmail.com";
        $admin->username = "admin";
        $admin->admin = 1;
        $admin->pasahitza = bcrypt("adminadmin");
        $admin->save();

        $pelegrin = new User;
        $pelegrin->email = "pelegrin@gmail.com";
        $pelegrin->username = "pelegrin";
        $pelegrin->admin = 0;
        $pelegrin->pasahitza = bcrypt("langile");
        $pelegrin->save();

        $mike = new User;
        $mike->email = "mike@gmail.com";
        $mike->username = "mike";
        $mike->admin = 0;
        $mike->pasahitza = bcrypt("langile");
        $mike->save();

        $paulag = new User;
        $paulag->email = "paulag@gmail.com";
        $paulag->username = "paulag";
        $paulag->admin = 0;        
        $paulag->pasahitza = bcrypt("langile");
        $paulag->save();

        $this->command->info('Usuario nuevo agregado correctamente!');

    }
}
