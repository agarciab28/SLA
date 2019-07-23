<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('Id_usuario', true);
            $table->string('Nombre', 30);
            $table->string('Ap_paterno', 30);
            $table->string('Ap_materno', 30);
            $table->string('Usuario', 30);
            $table->string('Password', 70);
            $table->timestamp('created_at')->nullable();
      			$table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
