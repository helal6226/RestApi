<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
        //     $table->bigIncrements('id');
            
           $table->bigInteger('user_id')->unsigned();
           $table->bigInteger('author_id')->unsigned();
            $table->bigInteger('book_id')->unsigned()->nullable();
            $table->bigInteger('article_id')->unsigned()->nullable();
             $table->text('content');
             $table->timestamps();

             $table->foreign('user_id')->references('id')->on('users')
             ->onDelete('cascade')->onUpdate('cascade');

             $table->foreign('author_id')->references('id')->on('authors')
             ->onDelete('cascade')->onUpdate('cascade');

             $table->foreign('book_id')->references('id')->on('books')
             ->onDelete('cascade')->onUpdate('cascade');

        //    // $table->foreign('article_id')->references('id')->on('articles')
        //    // ->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
