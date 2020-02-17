<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Argazkia extends Model
{
    //nombre de la tabla
    protected $table = 'argazkia';

    // Primay key de la tabla
    protected $primaryKey = 'img_id';

    protected $foreignKey = 'langile_id';

    //nombre de las columna
    protected $fillable = ['izena','url', 'langile_id'];

      // Relaciones
      public function Langilea() {

        return $this->belongsTo('App\Argazkia');
    }

}
