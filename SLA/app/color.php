<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
  protected $table = "colores";

protected $fillable = [
  "Descripcion", "Rgb"
];

protected $hidden = [

];

protected $casts = [

];
}
