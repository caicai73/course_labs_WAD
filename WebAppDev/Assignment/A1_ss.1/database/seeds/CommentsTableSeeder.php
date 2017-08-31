<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ------- John's post comments -------
        DB::table('comments')->insert([
            'post_id'=> 13,
            'fullname' => 'Bob Jones',
            'message' => "Oh no! That's terrible John!",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('comments')->insert([
            'post_id'=> 13,
            'fullname' => 'John Smith',
            'message' => "I know! I don't know where he could have gone",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
