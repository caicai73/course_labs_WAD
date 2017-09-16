<?php

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
        DB::table('users')->insert([
           'name' => "Bob",
           'email' => 'Bob@gmail.com',
           'dob' => '2017-01-24',
           'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
           'name' => "Fred",
           'email' => 'Fred@gmail.com',
           'dob' => '2017-01-27',
           'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
           'name' => "Caila",
           'email' => 'Caila@gmail.com',
           'dob' => '2017-01-10',
           'password' => bcrypt('1234'),
        ]);
    }
}
