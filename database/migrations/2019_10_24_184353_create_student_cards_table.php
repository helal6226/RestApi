<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('StudentNumber');
            $table->string('Firstname');
            $table->string('Degree');
            $table->bigInteger('Barcode');
            $table->bigInteger('student_id')->unsigned();
            $table->timestamps();

            
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
        Schema::dropIfExists('student_cards');
    }
}
