<?php

class Create_Users_Table {    

	public function up()
    {
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('fname');
			$table->string('lname');
			$table->string('email');
			$table->string('password');
			$table->string('bod');
			$table->integer('sex');
			$table->string('mobile');
			$table->timestamps();
		});
    }    

	public function down()
    {
		Schema::drop('users');
    }
}