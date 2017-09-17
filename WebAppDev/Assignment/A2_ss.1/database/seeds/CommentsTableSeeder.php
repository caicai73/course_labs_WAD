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
            'user_id' => 1,
            'fullname' => 'Bob',
            'message' => "Oh no! That's terrible John!",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('comments')->insert([
            'post_id'=> 13,
            'user_id' => 2,
            'fullname' => 'John',
            'message' => "I know! I don't know where he could have gone",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('comments')->insert([
            'post_id'=> 13,
            'user_id' => 2,
            'fullname' => 'John',
            'message' => "message 3",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('comments')->insert([
            'post_id'=> 13,
            'user_id' => 2,
            'fullname' => 'John',
            'message' => "message 4",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('comments')->insert([
            'post_id'=> 13,
            'user_id' => 2,
            'fullname' => 'John',
            'message' => "message 5",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('comments')->insert([
            'post_id'=> 13,
            'user_id' => 2,
            'fullname' => 'John',
            'message' => "message 6",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('comments')->insert([
            'post_id'=> 13,
            'user_id' => 2,
            'fullname' => 'John',
            'message' => "message 7",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('comments')->insert([
            'post_id'=> 13,
            'user_id' => 2,
            'fullname' => 'John',
            'message' => "message 8",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('comments')->insert([
            'post_id'=> 13,
            'user_id' => 2,
            'fullname' => 'John',
            'message' => "message 9",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('comments')->insert([
            'post_id'=> 13,
            'user_id' => 2,
            'fullname' => 'John',
            'message' => "message 10",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
