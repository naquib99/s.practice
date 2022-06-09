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
        Schema::create('rubricDetails', function (Blueprint $table) {
            $table->id();
            
            $table->integer('rubric_id');
            $table->integer('rubricDetail_id');
            $table->String('course_outcome');
            $table->String('competency');
            $table->String('scale1');
            $table->String('scale2');
            $table->String('scale3');
            $table->String('scale4');
            $table->String('scale5'); 
            $table->double('weightage');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubricDetails');
    }
};