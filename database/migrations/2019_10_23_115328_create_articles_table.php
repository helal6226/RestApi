<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('title');
            $table->date('creation_date');
            $table->bigInteger('author_id')->unsigned()->nullable();
          //  $table->bigInteger('loan_id')->unsigned();
            $table->timestamps();

            // $table->foreign('author_id')->references('id')->on('authors')
            // ->onDelete('cascade')->onUpdate('cascade');

            // $table->foreign('loan_id')->references('id')->on('loans')
            // ->onDelete('cascade')->onUpdate('cascade');



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
