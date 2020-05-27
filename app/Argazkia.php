<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Argazkia extends Model {
  //nombre de la tabla
  protected $table = 'argazkia';

  // Primary key de la tabla
  protected $primaryKey = 'img_id';

  // Foreign key de la tabla
  protected $foreignKey = 'langile_id';

  // Datos de la base de datos
  protected $fillable = ['izena', 'url', 'langile_id'];

  // Relaciones
  public function langilea() {
    return $this->hasOne('App\Langilea', 'langile_id', 'langile_id');
  }

}
