<?php

use Illuminate\Database\Seeder;
use \App\usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('set foreign_key_checks = 0;');
      DB::table('servicios')->truncate();
      DB::statement('set foreign_key_checks = 1;');

      $usuario= new usuario();
      $usuario->Nombre='Gustavo';
      $usuario->Ap_paterno='García';
      $usuario->Ap_materno='Cervantes';
      $usuario->Usuario='gustavo';
      $usuario->Password=Hash::make('secret');
      $usuario->save();
    }
}
