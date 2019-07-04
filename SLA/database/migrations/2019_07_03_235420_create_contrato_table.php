<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contrato', function(Blueprint $table)
		{
			$table->integer('Id_contrato', true);
			$table->integer('Cliente')->index('contrato_cliente_Id_cliente_fk');
			$table->date('Fecha');
			$table->integer('Personas');
			$table->integer('Horas');
			$table->time('Hora_ini');
			$table->integer('Color')->index('contrato_colores_Id_color_fk');
			$table->date('Fecha_expedicion');
			$table->float('Total', 6, 2);
			$table->float('Deposito', 6, 2);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contrato');
	}

}
