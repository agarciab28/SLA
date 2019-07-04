<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContratoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contrato', function(Blueprint $table)
		{
			$table->foreign('Cliente', 'contrato_cliente_Id_cliente_fk')->references('Id_cliente')->on('cliente')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('Color', 'contrato_colores_Id_color_fk')->references('Id_color')->on('colores')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contrato', function(Blueprint $table)
		{
			$table->dropForeign('contrato_cliente_Id_cliente_fk');
			$table->dropForeign('contrato_colores_Id_color_fk');
		});
	}

}
