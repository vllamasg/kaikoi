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
            $table->string('name',250);
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('id_tipo')->unsigned();
            $table->integer('id_img')->unsigned();
            $table->integer('id_company')->unsigned();
            $table->rememberToken();

            //$table->foreign('id_tipo')->references('id')->on('typeUser');
            //$table->foreign('id_img')->references('id')->on('image');
            //$table->foreign('id_company')->references('id')->on('company');

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
