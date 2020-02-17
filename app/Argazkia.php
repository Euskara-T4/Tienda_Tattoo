<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Argazkia extends Model
{
    //nombre de la tabla
    protected $table = 'argazkia';

    // Primay key de la tabla
    protected $primaryKey = 'id_img	';

    protected $foreignKey = 'id_langile';

    //nombre de las columna
    protected $fillable = ['izena','url', 'id_langile'];

      // Relaciones
      public function usuario() {

        return $this->hasOne('App\Langilea', 'id_langile' , 'id_langile');
    }

}
