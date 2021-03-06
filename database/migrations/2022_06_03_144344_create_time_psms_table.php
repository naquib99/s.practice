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
        Schema::create('time_psms', function (Blueprint $table) {
            $table->id();

            $table->string('time_id')->unique;
            $table->string('title');
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_psms');
    }
};
