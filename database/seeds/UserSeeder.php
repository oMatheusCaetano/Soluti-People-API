<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane.doe@soluti.com.br',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@soluti.com.br',
            'password' => '123456789',
        ]);
    }
}
