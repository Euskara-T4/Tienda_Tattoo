<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zita extends Model
{
    //nombre de la tabla
    protected $table = 'zita';

    // Primay key de la tabla
    protected $primaryKey = 'zita_id';

    protected $foreignKey = 'erabiltzaile_id';


    //nombre de las columna
    protected $fillable = ['izena','url', 'langile_id'];

      // Relacione
    public function Langilea() {

        return $this->belongsTo('App\Langilea');
    }

    public function usu() {

        return $this->belongsTo('App\users');
    }

    public function lana() {

        return $this->belongsTo('App\Lana');
    }
}
