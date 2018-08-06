<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string("uuid" , 32)->unique();
            $table->string("open_id" , 64)->unique();
            $table->string("nickname" , 64)->nullable();
            $table->string("realname" , 64)->nullable();
            $table->tinyInteger("sex")->default(0);
            $table->integer("area_id")->unsigned()->default(0);
            $table->string('avatar' ,256)->nullable();
            $table->enum("get_married" , ["y" , "n"])->default("n");
            $table->timestamp("last_login_at");
            $table->tinyinteger('status')->default(1);
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
        Schema::dropIfExists('users');
    }
}
