<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goodses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("goods_category_id")->unsigned();
            $table->string('title' , 1024);
            $table->longtext("info");
            $table->longtext("mini_info");
            $table->decimal('price' , 10,2)->default(0);
            $table->integer("stock")->unsigned()->default(0);
            $table->integer("selled")->unsigned()->default(0);
            $table->enum("status" , ["on" , "off"])->default("on");
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
        Schema::dropIfExists('goodses');
    }
}
