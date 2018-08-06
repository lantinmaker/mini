<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsThumbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_thumbs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_id')->unsigned();
            $table->string('thumb' , 1024);
            $table->enum('is_first' , ["y","n"])->default("n");
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
        Schema::dropIfExists('goods_thumbs');
    }
}
