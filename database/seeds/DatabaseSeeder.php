<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('BearAppSeeder');
		$this->command->info('Bear app seeds finished.'); // show information in the command line after everything is run
		// $this->call('UserTableSeeder');
	}

}
