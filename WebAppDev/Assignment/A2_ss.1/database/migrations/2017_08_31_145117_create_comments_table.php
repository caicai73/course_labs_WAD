<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function(Blueprint $table){
            // Primary key
            $table->increments('id'); 
            
            // Foreign key
            $table->integer('post_id');
            
            // Post attributes
            $table->string('fullname'); 
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
        Schema::dropIfExists ('comments');
    }
}
