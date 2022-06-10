<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubrics', function (Blueprint $table) {
            $table->id();
            $table->string('rubric_name');
            $table->string('course_outcome');
            $table->string('competency');
            $table->string('scale1');
            $table->string('scale2');
            $table->string('scale3');
            $table->string('scale4');
            $table->string('scale5');
            $table->integer('weightage');
            $table->integer('score')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubrics');
    }
}
