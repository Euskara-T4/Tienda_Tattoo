<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zita extends Model {
    // Nombre de la tabla
    protected $table = 'zita';

    // Primay key de la tabla
    protected $primaryKey = 'zita_id';

    // Foreign key de la tabla
    protected $foreignKey = 'lana_id';


    // Nombre de las columna
    protected $fillable = ['lana_id', 'bezero_izena', 'bezero_email', 'telefonoa', 'ordua', 'eguna', 'deskripzioa'];

    // Relaciones
    public function lana() {
        return $this->belongsTo('App\Lana');
    }
}
