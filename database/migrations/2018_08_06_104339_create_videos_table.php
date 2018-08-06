<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wedding_id')->unsigend();
            $table->string("share_id" , 32)->unique();
            $table->string("avatar" , 1024);
            $table->string("thumb" , 1024);
            $table->string("path" , 1024);
            $table->string("husband_name" , 64);
            $table->string("wife_name" , 64);
            $table->timestamp("wedding_at")->nullable();
            $table->enum("status" , ["non_active","half_ active" , "active"])->default("non_active");
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
        Schema::dropIfExists('videos');
    }
}
