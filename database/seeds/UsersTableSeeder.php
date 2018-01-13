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
        User::create([
            'name'     => 'Adrian Bavister',
            'email'    => 'adrian@bavanco.co.uk',
            'password' => bcrypt('local'),
        ]);
    }
}
