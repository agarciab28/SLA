<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ServiciosSeeder::class);
        $this->call(ColoresSeeder::class);
        $this->call(TiposSeeder::class);
        $this->call(UsuariosSeeder::class);
    }
}
