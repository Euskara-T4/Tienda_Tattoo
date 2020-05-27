<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Argazkia;

class ArgazkiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('argazkia')->delete();

        $this->command->info('Tabla inicializada con datos!');

        // Admin
        $admin = new Argazkia;
        $admin->izena = "avatar";
        $admin->url = "./img/avatar.png";
        $admin->save();

        // Ivan morant
        $ivan1 = new Argazkia;
        $ivan1->izena = "chicaLobo";
        $ivan1->url = "./img/ivan_morant/chicaLobo.PNG";
        $ivan1->langile_id = 2;
        $ivan1->save();


        $ivan2 = new Argazkia;
        $ivan2->izena = "hombreTigre";
        $ivan2->url = "./img/ivan_morant/hombreTigre.PNG";
        $ivan2->langile_id = 2;
        $ivan2->save();


        $ivan3 = new Argazkia;
        $ivan3->izena = "perfil";
        $ivan3->url = "./img/ivan_morant/Perfil.jpg";
        $ivan3->langile_id = 2;
        $ivan3->save();


        // ivan pelegrin
        $pele = new Argazkia;
        $pele->izena = "drStone";
        $pele->url = "./img/ivan_pelegrin/drStone.jpg";
        $pele->langile_id = 1;
        $pele->save();


        $pele2 = new Argazkia;
        $pele2->izena = "gogeta";
        $pele2->url = "./img/ivan_pelegrin/gogeta.PNG";
        $pele2->langile_id = 1;
        $pele2->save();


        $pele3 = new Argazkia;
        $pele3->izena = "inuyasha";
        $pele3->url = "./img/ivan_pelegrin/inuyasha.PNG";
        $pele3->langile_id = 1;
        $pele3->save();


        $pele4 = new Argazkia;
        $pele4->izena = "perfil";
        $pele4->url = "./img/ivan_pelegrin/perfil.jpg";
        $pele4->langile_id = 1;
        $pele4->save();


        // Yyannick grenier

        $yannick = new Argazkia;
        $yannick->izena = "columna";
        $yannick->url = "./img/yennick/columna.jpg";
        $yannick->langile_id = 4;
        $yannick->save();


        $yannick2 = new Argazkia;
        $yannick2->izena = "cuello";
        $yannick2->url = "./img/yennick/cuello.jpg";
        $yannick2->langile_id = 4;
        $yannick2->save();


        $yannick3 = new Argazkia;
        $yannick3->izena = "pomulo";
        $yannick3->url = "./img/yennick/pomulo.jpg";
        $yannick3->langile_id = 4;
        $yannick3->save();


        $yannick4 = new Argazkia;
        $yannick4->izena = "espalda";
        $yannick4->url = "./img/yennick/espalda.jpg";
        $yannick4->langile_id = 4;
        $yannick4->save();


        $yannick5 = new Argazkia;
        $yannick5->izena = "nariz";
        $yannick5->url = "./img/yennick/nariz.jpg";
        $yannick5->langile_id = 4;
        $yannick5->save();


        $yannick6 = new Argazkia;
        $yannick6->izena = "oreja";
        $yannick6->url = "./img/yennick/oreja.jpg";
        $yannick6->langile_id = 4;
        $yannick6->save();


        $yannick7 = new Argazkia;
        $yannick7->izena = "pecho";
        $yannick7->url = "./img/yennick/pecho.jpg";
        $yannick7->langile_id = 4;
        $yannick7->save();


        // Paula goméz
        $paula = new Argazkia;
        $paula->izena = "elimnacion 1";
        $paula->url = "./img/paula/1.jpg";
        $paula->langile_id = 5;
        $paula->save();


        $paula2 = new Argazkia;
        $paula2->izena = "eliminacion 2";
        $paula2->url = "./img/paula/2.jpg";
        $paula2->langile_id = 5;
        $paula2->save();


        $paula3 = new Argazkia;
        $paula3->izena = "eliminacion 3";
        $paula3->url = "./img/paula/3.jpg";
        $paula3->langile_id = 5;
        $paula3->save();


        $paula4 = new Argazkia;
        $paula4->izena = "elimacion 4";
        $paula4->url = "./img/paula/4.jpg";
        $paula4->langile_id = 5;
        $paula4->save();


        $paula5 = new Argazkia;
        $paula5->izena = "perfil";
        $paula5->url = "./img/paula/perfil.jpg";
        $paula5->langile_id = 5;
        $paula5->save();


        //mike
        $mike = new Argazkia;
        $mike->izena = "brujula";
        $mike->url = "./img/mike/brujula.jpg";
        $mike->langile_id = 3;
        $mike->save();


        $mike2 = new Argazkia;
        $mike2->izena = "flor";
        $mike2->url = "./img/mike/flor.jpg";
        $mike2->langile_id = 3;
        $mike2->save();


        $mike3 = new Argazkia;
        $mike3->izena = "flor2";
        $mike3->url = "./img/mike/flor2.jpg";
        $mike3->langile_id = 3;
        $mike3->save();


        $mike4 = new Argazkia;
        $mike4->izena = "escarificacion";
        $mike4->url = "./img/mike/escar.jpg";
        $mike4->langile_id = 3;
        $mike4->save();


        $mike5 = new Argazkia;
        $mike5->izena = "perfil";
        $mike5->url = "./img/mike/perfil.jpg";
        $mike5->langile_id = 3;
        $mike5->save();
    }
}
