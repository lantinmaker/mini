<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftPrizeGoodsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_prize_goodses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_id')->unsigned();
            $table->integer('gift_prize_id')->unsigned();
            $table->integer('goods_spec_id')->unsigned()->default(0);
            $table->integer('number')->unsigned()->default(1);
            $table->decimal('should_pay' , 10,2)->unsigned()->default(0);
            $table->decimal('real_pay' , 10,2)->unsigned()->default(0);
            $table->tinyinteger('status')->default(0);
            $table->timestamp('pay_at')->nullable();
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
        Schema::dropIfExists('gift_prize_goodses');
    }
}
