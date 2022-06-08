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
        Schema::create('evaluators', function (Blueprint $table) {
            $table->id();

            $table->string('evaluator_id')->unique();
            $table->string('evaluator_name');
            $table->string('evaluator_password');
            $table->string('evaluator_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluator');
    }
};
