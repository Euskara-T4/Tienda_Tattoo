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
        $admin->izena = "admin";
        $admin->abizena = "administrador";
        $admin->email = "admin@gmail.com";
        $admin->admin = 1;
        $admin->pasahitza = bcrypt("adminadmin");
        $admin->save();

        $this->command->info('Usuario nuevo agregado correctamente!');

    }
}
