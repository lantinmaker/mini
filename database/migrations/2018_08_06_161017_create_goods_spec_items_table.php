<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsSpecItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_spec_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_spec_id')->unsigned();
            $table->string('title' , 256);
            $table->string('thumb' , 1024);
            $table->enum("display" , ["y" , "n"])->default("y");
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
        Schema::dropIfExists('goods_spec_items');
    }
}
