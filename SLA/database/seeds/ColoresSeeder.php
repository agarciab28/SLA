<?php

use Illuminate\Database\Seeder;
use \App\color;

class ColoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('colores')->truncate();
      DB::statement('set foreign_key_checks = 1;');

      $color= new color();
      $color->Descripcion='Azul Turquesa';
      $color->Rgb='55,161,196';
      $color->save();

      $color= new color();
      $color->Descripcion='Verde Esmeralda';
      $color->Rgb='29,149,143';
      $color->save();

      $color= new color();
      $color->Descripcion='Dorado';
      $color->Rgb='185,165,102';
      $color->save();

      $color= new color();
      $color->Descripcion='Rojo';
      $color->Rgb='145,30,43';
      $color->save();

      $color= new color();
      $color->Descripcion='Coral';
      $color->Rgb='228,124,147';
      $color->save();

      $color= new color();
      $color->Descripcion='Negro';
      $color->Rgb='10,10,10';
      $color->save();

      $color= new color();
      $color->Descripcion='Fucsia';
      $color->Rgb='215,76,133';
      $color->save();

      $color= new color();
      $color->Descripcion='Palo de Rosa';
      $color->Rgb='197,162,175';
      $color->save();

      $color= new color();
      $color->Descripcion='Naranja';
      $color->Rgb='251,159,64';
      $color->save();

      $color= new color();
      $color->Descripcion='Vino';
      $color->Rgb='93,46,66';
      $color->save();

      $color= new color();
      $color->Descripcion='Morado';
      $color->Rgb='84,79,179';
      $color->save();

      $color= new color();
      $color->Descripcion='Azul Rey';
      $color->Rgb='36,99,218';
      $color->save();

      $color= new color();
      $color->Descripcion='Verde Olivo';
      $color->Rgb='175,172,98';
      $color->save();

    }
}
