<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Langilea extends Model {
    //nombre de la tabla
    protected $table = 'langilea';

    // Primay key de la tabla
    protected $primaryKey = 'langile_id';

    // Foreign key de la tabla
    protected $foreignKey = ['lana_id', 'erabiltzailea_id'];


    // Datos de la base de datos
    protected $fillable = ['izena','abizena', 'lana_id', 'erabiltzailea_id'];

    // Relaciones
    public function argazkia() {
        return $this->hasMany('App\Argazkia', 'langile_id', 'langile_id');
    }

    public function lana() {
        return $this->hasMany('App\Lana');
    }

    public function erabiltzailea() {
        return $this->hasOne('App\User', 'erabiltzailea_id', 'erabiltzailea_id');
    }


}
