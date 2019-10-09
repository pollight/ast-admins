<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatisticPolitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistic_politers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('Length', 8, 2)->index();
            $table->float('Width', 8, 2)->index();
            $table->float('Height', 8, 2)->index();
            $table->bigInteger('ColBoard')->index();
            $table->integer('sort')->index();
            $table->integer('karman')->index();
            $table->bigInteger('Priznak')->index()->nullable();
            $table->dateTime('Time')->index();
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
        Schema::dropIfExists('statistic_politers');
    }
}
