<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Langilea extends Model
{
    //nombre de la tabla
    protected $table = 'langilea';

    // Primay key de la tabla
    protected $primaryKey = 'langile_id	';

    protected $foreignKey = 'lana_id';

    //nombre de las columna
    protected $fillable = ['izena','abizena', 'lana_id'];

      // Relaciones
      public function Argazkia() {

        return $this->hasMany('App\Argazkia');
    }

    public function Zita() {

        return $this->hasMany('App\Zita



        ');
    }


}
