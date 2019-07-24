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
			$table->date('Fecha')->unique();
			$table->integer('Tipo')->index('contrato_tipos_Id_tipo_fk');
			$table->integer('Personas');
			$table->string('Hora_ini', 15);
			$table->integer('Horas');
			$table->integer('Color')->index('contrato_colores_Id_color_fk');
			$table->float('Total', 6);
			$table->string('Nombre', 30);
			$table->string('Ap_paterno', 20);
			$table->string('Ap_materno', 20)->nullable();
			$table->string('Cp', 8)->nullable();
			$table->string('Estado', 30);
			$table->string('Ciudad', 30);
			$table->string('Colonia', 30);
			$table->string('Calle', 40);
			$table->string('Numero', 6);
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
		Schema::drop('contrato');
	}

}
