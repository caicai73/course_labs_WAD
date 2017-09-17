<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table){
            // Primary key
            $table->increments('id'); 
            
            // Foreign keys
            $table->integer('user_id');
            $table->integer('privacy_id');
            
            // Post attributes
            $table->string('fullname'); 
            $table->string('title_post');
            $table->string('message');
            
            // timestamp each product when it is created
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists ('posts');
    }
    
}
