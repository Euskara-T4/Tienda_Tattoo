<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zita extends Model
{
    //nombre de la tabla
    protected $table = 'zita';

    // Primay key de la tabla
    protected $primaryKey = 'id_zita	';

    protected $foreignKey = 'id_erabiltzaile';


    //nombre de las columna
    protected $fillable = ['izena','url', 'id_langile'];

      // Relaciones
      public function usuario() {

        return $this->hasMany('App\Langilea', 'id_langile' , 'id_langile');
    }
}
