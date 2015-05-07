<?php

use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('mail', function ($table) {

			$table->increments('id');
			$table->string('email');
			$table->boolean('deleted')->default(0)->index();

			$table->timestamps();

		});


		Schema::create('messages', function ($table) {

			$table->increments('id');
			$table->text('message'); 
			$table->dateTime('expire_at')->index();
			$table->boolean('deleted')->default(0)->index();

			$table->timestamps();

		}); 

		Schema::create('mail_messages', function ($table) {

			$table->increments('id');
			$table->integer('mail_id')->unsigned();
			$table->integer('message_id')->unsigned();

			$table->foreign('mail_id')->references('id')->on('mail');
			$table->foreign('message_id')->references('id')->on('messages');
		});



		Schema::create('files', function ($table) {

			$table->increments('id');
			$table->integer('message_id')->unsigned();
			$table->string('name')->index();
			$table->string('original_name');
			$table->string('ext',10);
			$table->integer('size')->unsigned()->default(0);
			$table->boolean('deleted')->default(0)->index();

			$table->timestamps();
			$table->foreign('message_id')->references('id')->on('messages');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('mail_messages');
		Schema::dropIfExists('files');
		Schema::dropIfExists('messages');
		Schema::dropIfExists('mail');


	}

}
