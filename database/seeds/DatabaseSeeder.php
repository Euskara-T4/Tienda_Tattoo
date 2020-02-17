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

        // Llamada al seed de los USUARIOS
        self::seedUsuarios();
        $this->command->info('Tabla USUARIOS inicializada con datos!');
    }

    // INSERTAMOS EN LA BASE DE DATOS
    private function seedUsuarios(){
        // Borramos la tabla
        DB::table('users')->delete();

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

