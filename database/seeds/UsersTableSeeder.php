<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       return $newUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@jakwir.com',
            'password' => bcrypt('rahasia123'),
            'remember_token' => str_random(10),
        ]);

    }
}
