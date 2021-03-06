<?php

use App\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations. Create user table and initialize
	 * an admin user.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();
		});

		User::create([
			'name' => 'SUPERVISOR',
			'email' => 'admin@root.com',
			'password' => bcrypt('admin'),
			'created_at' => new DateTime,
			'updated_at' => new DateTime
		]);

		User::create([
			'name' => 'OPERATOR',
			'email' => 'operator@root.com',
			'password' => bcrypt('operator'),
			'created_at' => new DateTime,
			'updated_at' => new DateTime
		]);

		User::create([
			'name' => 'USER',
			'email' => 'user@root.com',
			'password' => bcrypt('user'),
			'created_at' => new DateTime,
			'updated_at' => new DateTime
		]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
