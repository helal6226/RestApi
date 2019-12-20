<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_student', function (Blueprint $table) {
           // $table->bigIncrements('id');
        
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('author_id');
           // $table->unsignedInteger('loan_id');
            $table->date('Deadline');

          //  $table->primary(['student_id','loan_id']);

          //  $table->date('DeadLine');
            $table->timestamps();
 
           //  $table->foreign('loan_id')->references('id')->on('loans')
            // ->onDelete('cascade')->onUpdate('cascade');
           
             $table->foreign('student_id')->references('id')->on('students')
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
        Schema::dropIfExists('loan_student');
    }
}
