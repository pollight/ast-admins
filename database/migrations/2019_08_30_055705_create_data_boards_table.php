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
            $table->bigInteger('Volume')->index();
            $table->string('Type')->index();
            $table->string('Sort')->index();
            $table->bigInteger('Suchki')->index();
            $table->bigInteger('Treschiny')->index();
            $table->bigInteger('Svievatist')->index();
            $table->bigInteger('Prorost')->index();
            $table->bigInteger('Zabolon')->index();
            $table->bigInteger('Plesen')->index();
            $table->bigInteger('Gnil')->index();
            $table->bigInteger('Sineva')->index();
            $table->bigInteger('Obzol')->index();
            $table->bigInteger('Mech')->index();
            $table->bigInteger('Piatna')->index();

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
