<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->integer('note');
            $table->date('evaluation_date');

            $table->primary(['student_id','subject_id']);

            $table->foreign('student_id')->references('student_id')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('subject_id')->references('subject_id')->on('subjects')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
};
