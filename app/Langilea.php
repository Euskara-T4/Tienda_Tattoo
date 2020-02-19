<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Langilea extends Model {
    //nombre de la tabla
    protected $table = 'langilea';

    // Primay key de la tabla
    protected $primaryKey = 'langile_id	';

    // Foreign key de la tabla
    protected $foreignKey = 'lana_id';

    // Datos de la base de datos
    protected $fillable = ['izena','abizena', 'lana_id'];

    // Relaciones
    public function argazkia() {
        return $this->hasMany('App\Argazkia');
    }

    public function zita() {
        return $this->hasMany('App\Zita');
    }


}
