<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {

            //$table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('name',100);// Varchar 100
            $table->text('text');// text
            $table->string('img',255);// Varchar 255
            $table->timestamps();// Время создания и модификации



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
