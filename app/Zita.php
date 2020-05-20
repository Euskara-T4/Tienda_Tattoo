<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zita extends Model {
    //nombre de la tabla
    protected $table = 'zita';

    // Primay key de la tabla
    protected $primaryKey = 'zita_id';

    // Foreign key de la tabla
    protected $foreignKey = 'lana_id';


    //nombre de las columna
    protected $fillable = ['deskripzioa', 'lana_id', 'bezero_izena', 'bezero_email', 'ordutegia'];

      // Relacione

    public function lana() {
        return $this->belongsTo('App\Lana');
    }
}
