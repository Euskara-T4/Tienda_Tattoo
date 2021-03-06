<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lana extends Model {
    //nombre de la tabla
    protected $table = 'lana';

    // Primary key de la tabla
    protected $primaryKey = 'lana_id';

    // Datos de la base de datos
    protected $fillable = ['izena'];


    // Relaciones
    public function zita() {
        return $this->hasMany('App\Zita', 'lana_id', 'lana_id');
    }

    public function langile() {
        return $this->hasOne('App\Langilea', 'lana_id', 'lana_id');
    }

}
