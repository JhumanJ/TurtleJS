<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercice', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('title');
            $table->string('videoLink');
            $table->string('text');
            $table->string('hint');
            $table->string('script');
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
        Schema::drop('exercice');
    }
}
