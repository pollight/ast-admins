<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaletkaBoard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paletka_board', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('Length', 8, 2)->index();
            $table->float('Width', 8, 2)->index();
            $table->float('Height', 8, 2)->index();
            $table->dateTime('Time')->index();
            $table->bigInteger('ColBoard')->index();
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
        Schema::dropIfExists('paletka_board');
    }
}
