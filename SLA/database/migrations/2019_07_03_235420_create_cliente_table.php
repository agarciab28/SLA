<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClienteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cliente', function(Blueprint $table)
		{
			$table->integer('Id_cliente', true);
			$table->string('Nombre', 15);
			$table->string('Ap_paterno', 20);
			$table->string('Ap_materno', 20)->nullable();
			$table->string('Colonia', 30);
			$table->string('Calle', 30);
			$table->integer('Numero');
			$table->string('Estado', 30);
			$table->string('Ciudad', 30);
			$table->integer('Telefono');
			$table->integer('Clave_de_registro')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cliente');
	}

}
