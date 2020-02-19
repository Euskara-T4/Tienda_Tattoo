<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zita extends Model {
    //nombre de la tabla
    protected $table = 'zita';

    // Primay key de la tabla
    protected $primaryKey = 'zita_id';

    // Foreign key de la tabla
    protected $foreignKey = 'erabiltzaile_id';


    //nombre de las columna
    protected $fillable = ['izena','url', 'langile_id'];

      // Relacione
    public function langilea() {
        return $this->belongsTo('App\Langilea');
    }

    public function erabiltzailea() {
        return $this->belongsTo('App\User');
    }

    public function lana() {
        return $this->belongsTo('App\Lana');
    }
}
