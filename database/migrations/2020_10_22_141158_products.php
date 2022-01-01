<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('Products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('catagory_id');
            $table->integer('brand_id');
            $table->string('product_name');
            
            $table->integer('product_price');
            $table->string('product_image');
            
            $table->integer('publication_status');
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
        //
    }
}
