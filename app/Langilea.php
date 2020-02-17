<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Langilea extends Model
{
    //nombre de la tabla
    protected $table = 'langilea';

    // Primay key de la tabla
    protected $primaryKey = 'id_langile	';

    protected $foreignKey = 'id_lana';

    //nombre de las columna
    protected $fillable = ['izena','abizena', 'id_lana'];

      // Relaciones
      public function usuario() {

        return $this->hasOne('App\Lana', 'id_lana' , 'id_lana');
    }
}
