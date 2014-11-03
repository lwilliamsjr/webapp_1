<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()

	{
		Schema::create('unions', function(Blueprint $table)

		{				
						$table->increments('id');
						$table->string('Local_name', 128);
						$table->string('Union_type', 128);
						$table->string('Industry_type', 128);
						$table->string('Local_Affiliation', 128);
						$table->string('National_coalition_affiliation', 128);
						$table->boolean('Verified');
						$table->integer('Unique_id');
						$table->timestamps();
						
				});
			}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('unions');
	}

}
