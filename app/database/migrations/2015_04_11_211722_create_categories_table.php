<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("categories", function($table){
			$table->string("barcode");
			$table->string("name")->unique();;
			$table->string("manufacturer");
			$table->integer("quantity")->default(0);
			$table->integer("warning_quantity");
			$table->string("unit");
			$table->decimal("purchase_price", 12, 2);
			$table->decimal("sell_price", 12, 2);
			$table->primary('barcode');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('categories');
	}

}
