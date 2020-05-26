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
        $admin->password = bcrypt("admin");
        $admin->save();

        $pelegrin = new User;
        $pelegrin->email = "pelegrin@gmail.com";
        $pelegrin->username = "pelegrin";
        $pelegrin->admin = 0;
        $pelegrin->password = bcrypt("langilea");
        $pelegrin->save();

        $mike = new User;
        $mike->email = "mike@gmail.com";
        $mike->username = "mike";
        $mike->admin = 0;
        $mike->password = bcrypt("langilea");
        $mike->save();

        $paulag = new User;
        $paulag->email = "paulag@gmail.com";
        $paulag->username = "paulag";
        $paulag->admin = 0;        
        $paulag->password = bcrypt("langilea");
        $paulag->save();

        $this->command->info('Usuario nuevo agregado correctamente!');

    }
}
