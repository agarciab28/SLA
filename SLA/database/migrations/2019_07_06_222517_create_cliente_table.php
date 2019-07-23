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
			$table->string('Nombre', 30);
			$table->string('Ap_paterno', 20);
			$table->string('Ap_materno', 20)->nullable();
			$table->char('Genero', 1);
			$table->string('Colonia', 30);
			$table->string('Calle', 40);
			$table->string('Numero', 6);
			$table->string('Estado', 30);
			$table->string('Ciudad', 30);
			$table->string('Telefono', 15);
			$table->string('Rfc', 13)->nullable();
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
