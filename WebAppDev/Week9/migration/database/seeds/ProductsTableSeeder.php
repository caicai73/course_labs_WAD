<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'manufacturer_id' => 1,
            'name' => 'iPhone 6',
            'price' => '600',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('products')->insert([
            'manufacturer_id' => 2,
            'name' => 'Note 4',
            'price' => '567',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('products')->insert([
            'manufacturer_id' => 3,
            'name' => 'Surface Pro 4',
            'price' => '987',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
    }}
