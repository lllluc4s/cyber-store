<?php

namespace Database\Seeders;

use App\Models\FormModel;
use App\Models\Formulario;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		User::factory(10)->create();
		$this->call(ProductSeeder::class);
		Formulario::factory(10)->create();
	}
}
