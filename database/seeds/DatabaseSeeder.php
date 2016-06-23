<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BasesTableSeeder::class);
        $this->call(ResourcesTableSeeder::class);
        $this->call(FieldsTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(BuildingsTableSeeder::class);
        $this->call(TechnologiesTableSeeder::class);
    }
}
