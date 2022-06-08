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
        Schema::create('manage_psms', function (Blueprint $table) {
            $table->id();
            
            $table->string('evaluator_id');
            $table->text('allocate'); 
            $table->string('std_id1')->nullable();
            $table->string('std_id2')->nullable();
            $table->string('std_id3')->nullable();              
            
            $table->foreign('evaluator_id')->references('evaluator_id')->on('evaluators');
            $table->foreign('std_id1')->references('student_id')->on('students');
            $table->foreign('std_id2')->references('student_id')->on('students');
            $table->foreign('std_id3')->references('student_id')->on('students');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manage_psms');
    }
};
