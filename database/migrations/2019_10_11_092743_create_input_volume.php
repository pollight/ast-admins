<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputVolume extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_volume', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('flow1', 8, 2)->index();
            $table->float('flow2', 8, 2)->index();
            $table->float('SumVolume', 8, 2)->index();
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
        Schema::dropIfExists('input_volume');
    }
}
