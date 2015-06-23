<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');

            $table->string('account');
            $table->string('password');

            $table->timestamps();
        });

//        Schema::table('user',function($table){
//
//        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
//        Schema::table('user',function($table){
//            $table->dropColumn('account');
//            $table->dropColumn('password');
//        });
    }
}
