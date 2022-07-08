<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('identification_number');
            $table->string('exam_cluster');
            $table->integer('maths');
            $table->integer('literature');
            $table->integer('english');
            $table->integer('physics');
            $table->integer('chemistry');
            $table->integer('biological');
            $table->integer('history');
            $table->integer('geography');
            $table->integer('civic_education');
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
        Schema::dropIfExists('points');
    }
}
