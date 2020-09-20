<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(TelephoneSeeder::class);
        $this->call(AddressSeeder::class);
    }
}
