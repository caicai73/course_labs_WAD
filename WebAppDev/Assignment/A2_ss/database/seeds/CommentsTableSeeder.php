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
        DB::table('comments')->insert([
            'post_id'=> 13,
            'fullname' => 'Bob Jones',
            'message' => "So sad",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('comments')->insert([
            'post_id'=> 13,
            'fullname' => 'John Smith',
            'message' => "Yeah, I'm still looking",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('comments')->insert([
            'post_id'=> 13,
            'fullname' => 'Cleo Doe',
            'message' => "Omg! Oh no John!",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('comments')->insert([
            'post_id'=> 13,
            'fullname' => 'John Smith',
            'message' => "Hey Cleo, I know.",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('comments')->insert([
            'post_id'=> 13,
            'fullname' => 'Bob Jones',
            'message' => "Hey Cleo, you live near John, why don't you help him out?",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('comments')->insert([
            'post_id'=> 13,
            'fullname' => 'John Smith',
            'message' => "Yeah, it would be a big help Cleo.",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('comments')->insert([
            'post_id'=> 13,
            'fullname' => 'Cleo Doe',
            'message' => "I'll drop by soon, I'm at Woolies.",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]); 
        DB::table('comments')->insert([
            'post_id'=> 13,
            'fullname' => 'John Smith',
            'message' => "Thanks so much Cleo!",
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
