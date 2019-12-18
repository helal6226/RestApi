<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('comment__student', function (Blueprint $table) {
          //  $table->bigIncrements('id');

             
            // $table->primary(['comment_id','trainee_id']); //composite key
            // $table->bigInteger('comment_id')->unsigned();
            // $table->bigInteger('student_id')->unsigned();
            // $table->text('content');
            // $table->timestamps();

            // $table->foreign('comment_id')->references('id')->on('comments')
            // ->onDelete('cascade')->onUpdate('cascade');

            // $table->foreign('student_id')->references('id')->on('trainees')
            // ->onDelete('cascade')->onUpdate('cascade');
            // $table->bigInteger('student_id')->unsigned();

            // $table->bigInteger('book_id')->unsigned()->nullable();
            // $table->timestamps();
       // });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // public function down()
    // {
    //   //  Schema::dropIfExists('_comment__student');
    // }
}
