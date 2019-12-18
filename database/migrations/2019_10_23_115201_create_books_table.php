<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->string('title');
            $table->date('creation_date');
            $table->bigInteger('author_id')->unsigned()->nullable();
            $table->string('picture')->nullable();
           // $table->bigInteger('loan_id')->unsigned();
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
        Schema::dropIfExists('books');
    }
}
