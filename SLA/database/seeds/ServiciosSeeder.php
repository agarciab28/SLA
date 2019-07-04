<?php

use Illuminate\Database\Seeder;
use \App\servicio;

class ServiciosSeeder extends Seeder
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

      $servicio= new servicio();
      $servicio->Descripcion='Estacionamiento';
      $servicio->save();

      $servicio= new servicio();
      $servicio->Descripcion='Mobiliario';
      $servicio->save();

      $servicio= new servicio();
      $servicio->Descripcion='Seguridad';
      $servicio->save();

      $servicio= new servicio();
      $servicio->Descripcion='Banquete';
      $servicio->save();

      $servicio= new servicio();
      $servicio->Descripcion='Meseros';
      $servicio->save();
    }
}
