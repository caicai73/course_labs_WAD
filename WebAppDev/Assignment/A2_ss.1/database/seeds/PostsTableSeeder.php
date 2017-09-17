<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ------- Bob's posts -------
        DB::table('posts')->insert([
            'user_id' => '1',
            'privacy_id' => '1',
            'fullname' => 'Bob',
            'title_post'=> "Bob's Post 1",
            'message' => "Bob's public post",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('posts')->insert([
            'user_id' => '1',
            'privacy_id' => '2',
            'fullname' => 'Bob',
            'title_post'=> "Bob's Post 2",
            'message' => "Bob's friends post",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('posts')->insert([
            'user_id' => '1',
            'privacy_id' => '3',
            'fullname' => 'Bob',
            'title_post'=> "Bob's Post 3",
            'message' => "Bob's private post",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        
        
        // ------ John's posts -------
        DB::table('posts')->insert([
            'user_id' => '2',
            'privacy_id' => '1',
            'fullname' => 'John',
            'title_post'=> "John's Post 1",
            'message' => "John's public post",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('posts')->insert([
            'user_id' => '2',
            'privacy_id' => '2',
            'fullname' => 'John',
            'title_post'=> "John's Post 2",
            'message' => "John's friends post",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('posts')->insert([
            'user_id' => '2',
            'privacy_id' => '3',
            'fullname' => 'John',
            'title_post'=> "John's Post 3",
            'message' => "John's private post",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('posts')->insert([
            'user_id' => '2',
            'privacy_id' => '2',
            'fullname' => 'John',
            'title_post'=> "John's Post 4",
            'message' => "I love turtles",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('posts')->insert([
            'user_id' => '2',
            'privacy_id' => '2',
            'fullname' => 'John',
            'title_post'=> "John's Post 5",
            'message' => "I like food",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('posts')->insert([
            'user_id' => '2',
            'privacy_id' => '2',
            'fullname' => 'John',
            'title_post'=> "John's Post 6",
            'message' => "My pet turtle is so cute. His name is Gerald.",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('posts')->insert([
            'user_id' => '2',
            'privacy_id' => '2',
            'fullname' => 'John',
            'title_post'=> "John's Post 7",
            'message' => "I got a fish tank!",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('posts')->insert([
            'user_id' => '2',
            'privacy_id' => '2',
            'fullname' => 'John',
            'title_post'=> "John's Post 8",
            'message' => "Need to get a new filter for my fish tank",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('posts')->insert([
            'user_id' => '2',
            'privacy_id' => '2',
            'fullname' => 'John',
            'title_post'=> "John's Post 9",
            'message' => "I tied a balloon to Gerald so he wouldn't get lost.",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('posts')->insert([
            'user_id' => '2',
            'privacy_id' => '2',
            'fullname' => 'John',
            'title_post'=> "John's Post 10",
            'message' => "The balloon got loose from Gerald and now I can't find him!",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('posts')->insert([
            'user_id' => '2',
            'privacy_id' => '2',
            'fullname' => 'John',
            'title_post'=> "John's Post 11",
            'message' => "Send help guys! I can't find Gerald anywhere!",
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
