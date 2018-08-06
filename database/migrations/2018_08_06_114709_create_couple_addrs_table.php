<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoupleAddrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couple_addrs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("couple_id")->unsigned();
            $table->string("husband_phone" , 11)->nullable();
            $table->string("husband_name" , 64)->nullable();
            $table->string("wife_phone" , 11)->nullable();
            $table->string("wife_name" , 64)->nullable();
            $table->integer("area_id" )->unsigned();
            $table->string("home_addr" , 1024);
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
        Schema::dropIfExists('couple_addrs');
    }
}
