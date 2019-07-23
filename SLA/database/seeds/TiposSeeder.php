<?php

use Illuminate\Database\Seeder;
use \App\tipo;

class TiposSeeder extends Seeder
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

      $tipo= new tipo();
      $tipo->Descripcion='XV años';
      $tipo->save();

      $tipo= new tipo();
      $tipo->Descripcion='Boda';
      $tipo->save();

      $tipo= new tipo();
      $tipo->Descripcion='Comida';
      $tipo->save();

      $tipo= new tipo();
      $tipo->Descripcion='Otro';
      $tipo->save();
    }
}
