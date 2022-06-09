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
        Schema::create('project_details', function (Blueprint $table) {
           
            $table->increments('project_id');
            $table->string('student_id');
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->string('supervisor_id');
            $table->foreign('supervisor_id')->references('supervisor_id')->on('supervisors');
            $table->double('score');
            $table->string('PSM_title');
            $table->string('PSM_type');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_details');
    }
};