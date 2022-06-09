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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            
            $table->string('student_id')->unique();
            $table->string('student_name');
            $table->string('student_password');
            $table->string('student_email');
            $table->string('evaluator_id');
            $table->string('supervisor_id')();

            $table->foreign('evaluator_id')->references('evaluator_id')->on('evaluators');
            $table->foreign('supervisor_id')->references('supervisor_id')->on('supervisors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
};
