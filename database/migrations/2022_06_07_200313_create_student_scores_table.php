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
        Schema::create('student_scores', function (Blueprint $table) {
            $table->id();
            
            $table->integer('score_id');
            $table->integer('student_id'); 
            $table->integer('rubricDetail_id');
            $table->double('score')->nullable();              
            
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('rubricDetail_id')->references('rubricDetail_id')->on('rubricDetail');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_scores');
    }
};