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
           'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
           'name' => "Fred",
           'email' => 'Fred@gmail.com',
           'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
           'name' => "Caila",
           'email' => 'Caila@gmail.com',
           'password' => bcrypt('1234'),
        ]);
    }
}
