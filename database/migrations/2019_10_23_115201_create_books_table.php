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
            $table->string('isbn')->nullable();
            $table->string('subject');
            $table->string('title');
            $table->date('creation_date');
            $table->bigInteger('author_id')->unsigned()->nullable();
            $table->string('picture')->nullable();
            $table->timestamps();

             $table->foreign('author_id')->references('id')->on('users')
             ->onDelete('cascade')->onUpdate('cascade');

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
