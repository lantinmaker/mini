<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftPrizeOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_prize_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_sn' , 18)->unique();
            $table->integer('gift_prize_goods_id')->unsigned();
            $table->integer('user_id')->unsigned()->default(0);
            $table->integer('addr_id')->unsigned();
            $table->integer('form_id')->unsigned()->default(0);
            $table->string('remark' , 1024)->nullable();

            // 0 未填写地址
            // 1 代发货
            // 2 已发货
            $table->tinyinteger('order_status')->default(0);
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
        Schema::dropIfExists('gift_prize_orders');
    }
}
