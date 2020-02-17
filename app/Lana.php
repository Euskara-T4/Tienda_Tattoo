<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lana extends Model
{
//nombre de la tabla
protected $table = 'lana';

// Primay key de la tabla
protected $primaryKey = 'lana_id';


protected $fillable = ['izena'];


 // Relaciones
 public function Zita() {

    return $this->hasMany('App\Zita');
}

}
