<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->integer('id_proveedor');
            $table->integer('id_category');
            $table->integer('id_pdf');
            $table->integer('id_xml');
            $table->integer('id_img');
            $table->integer('id_proyect');
            $table->integer('id_user');
            $table->float('total');

            //$table->foreign('id_proveedor')->references('id')->on('proveedor');
            //$table->foreign('id_category')->references('id')->on('category');
            //$table->foreign('id_pdf')->references('id')->on('pdf');
            //$table->foreign('id_xml')->references('id')->on('xml');
            //$table->foreign('id_img')->references('id')->on('image');
            //$table->foreign('id_proyect')->references('id')->on('proyect');
            //$table->foreign('id_user')->references('id')->on('users');

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
        Schema::dropIfExists('expense');
    }
}
