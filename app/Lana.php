<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lana extends Model
{
//nombre de la tabla
protected $table = 'lana';

// Primay key de la tabla
protected $primaryKey = 'id_lana';


protected $fillable = ['izena'];

}
