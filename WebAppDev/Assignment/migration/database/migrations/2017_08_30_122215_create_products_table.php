<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table){
            // Primary key
            $table->increments('id'); 
            
            // Foreign key from manufacturers
            $table->integer('manufacturer_id');
            
            // Product attributes
            $table->string('name'); 
            $table->float('price'); 
            
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
        Schema::dropIfExists ('products');
    }
}
