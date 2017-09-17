<?php

use Illuminate\Database\Seeder;

class PrivacyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privacies')->insert([
            'name' => 'Public',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('privacies')->insert([
            'name' => 'Friend',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
         DB::table('privacies')->insert([
            'name' => 'Private',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
    }
}