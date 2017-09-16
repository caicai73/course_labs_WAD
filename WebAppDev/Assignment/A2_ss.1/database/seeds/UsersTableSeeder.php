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
           'fullname' => "Bob",
           'email' => 'Bob@a.org',
           'dob' => '2017-01-17',
           'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
           'fullname' => "John",
           'email' => 'John@a.org',
           'dob' => '2017-02-17',
           'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
           'fullname' => "Tom",
           'email' => 'Tom@a.org',
           'dob' => '2017-03-17',
           'password' => bcrypt('1234'),
        ]);
        
        DB::table('users')->insert([
           'fullname' => "Caila",
           'email' => 'Caila@a.org',
           'dob' => '2017-04-17',
           'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
           'fullname' => "Cleo",
           'email' => 'Cleo@a.org',
           'dob' => '2017-05-17',
           'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
           'fullname' => "Memphis",
           'email' => 'Memphis@a.org',
           'dob' => '2017-06-17',
           'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
           'fullname' => "Vera",
           'email' => 'Vera@a.org',
           'dob' => '2017-07-17',
           'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
           'fullname' => "Liam",
           'email' => 'Liam@a.org',
           'dob' => '2017-08-17',
           'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
           'fullname' => "Rick",
           'email' => 'Rick@a.org',
           'dob' => '2016-10-17',
           'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
           'fullname' => "Morty",
           'email' => 'Morty@a.org',
           'dob' => '2014-10-11',
           'password' => bcrypt('1234'),
        ]);
    }
}
