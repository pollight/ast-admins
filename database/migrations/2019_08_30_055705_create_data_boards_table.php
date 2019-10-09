<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_boards', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->float('Length', 8, 2)->index();
            $table->float('Width', 8, 2)->index();
            $table->float('Height', 8, 2)->index();
            $table->dateTime('Time')->index();
            $table->bigInteger('Volume')->index()->nullable();
            $table->bigInteger('Smena')->index()->nullable();
            $table->bigInteger('Karman')->index()->nullable();
            $table->bigInteger('Priznak')->index()->nullable();
            $table->string('Type')->index()->nullable();
            $table->string('Sort')->index()->nullable();
            $table->bigInteger('Suchki')->index()->nullable();
            $table->bigInteger('Treschiny')->index()->nullable();
            $table->bigInteger('Svievatist')->index()->nullable();
            $table->bigInteger('Prorost')->index()->nullable();
            $table->bigInteger('Zabolon')->index()->nullable();
            $table->bigInteger('Plesen')->index()->nullable();
            $table->bigInteger('Gnil')->index()->nullable();
            $table->bigInteger('Sineva')->index()->nullable();
            $table->bigInteger('Obzol')->index()->nullable();
            $table->bigInteger('Mech')->index()->nullable();
            $table->bigInteger('Piatna')->index()->nullable();

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
        Schema::dropIfExists('data_boards');
    }
}
