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
        $admin->admin = 1;
        $admin->pasahitza = bcrypt("adminadmin");
        $admin->save();

        $admin = new User;
        $admin->email = "pelegrin@gmail.com";
        $admin->admin = 1;
        $admin->pasahitza = bcrypt("langile");
        $admin->save();

        $admin = new User;
        $admin->email = "mike@gmail.com";
        $admin->admin = 1;
        $admin->pasahitza = bcrypt("langile");
        $admin->save();

        $admin = new User;
        $admin->email = "paulag@gmail.com";
        $admin->admin = 1;
        $admin->pasahitza = bcrypt("langile");
        $admin->save();

        $this->command->info('Usuario nuevo agregado correctamente!');

    }
}
