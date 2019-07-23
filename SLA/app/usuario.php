<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
  protected $table = "usuarios";

protected $fillable = [
  "Nombre", "Ap_paterno", "Ap_materno", "Usuario", "Password"
];

protected $hidden = [

];

protected $casts = [

];
}
