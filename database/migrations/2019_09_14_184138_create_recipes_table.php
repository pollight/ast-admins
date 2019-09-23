<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('Name')->unique();
            $table->bigInteger('userId')->index();
            $table->string('gost')->index()->nullable();
            $table->boolean('used')->index();

            $table->boolean('knotsIntegrated_plast_enable')->nullable();
            $table->float('knotsIntegrated_plast_size1', 8, 2)->nullable();
            $table->float('knotsIntegrated_plast_size2', 8, 2)->nullable();
            $table->float('knotsIntegrated_plast_size3', 8, 2)->nullable();
            $table->float('knotsIntegrated_plast_size4', 8, 2)->nullable();
            $table->float('knotsIntegrated_plast_size5', 8, 2)->nullable();

            $table->bigInteger('knotsIntegrated_plast_quantity1')->nullable();
            $table->bigInteger('knotsIntegrated_plast_quantity2')->nullable();
            $table->bigInteger('knotsIntegrated_plast_quantity3')->nullable();
            $table->bigInteger('knotsIntegrated_plast_quantity4')->nullable();
            $table->bigInteger('knotsIntegrated_plast_quantity5')->nullable();

            $table->boolean('knotsIntegrated_kormkaDo40_enable');

            $table->float('knotsIntegrated_kormkaDo40_size1', 8, 2)->nullable();
            $table->float('knotsIntegrated_kormkaDo40_size2', 8, 2)->nullable();
            $table->float('knotsIntegrated_kormkaDo40_size3', 8, 2)->nullable();
            $table->float('knotsIntegrated_kormkaDo40_size4', 8, 2)->nullable();
            $table->float('knotsIntegrated_kormkaDo40_size5', 8, 2)->nullable();

            $table->bigInteger('knotsIntegrated_kormkaDo40_quantity1')->nullable();
            $table->bigInteger('knotsIntegrated_kormkaDo40_quantity2')->nullable();
            $table->bigInteger('knotsIntegrated_kormkaDo40_quantity3')->nullable();
            $table->bigInteger('knotsIntegrated_kormkaDo40_quantity4')->nullable();
            $table->bigInteger('knotsIntegrated_kormkaDo40_quantity5')->nullable();

            $table->boolean('knotsIntegrated_kormkaPosle40_enable');

            $table->float('knotsIntegrated_kormkaPosle40_size1', 8, 2)->nullable();
            $table->float('knotsIntegrated_kormkaPosle40_size2', 8, 2)->nullable();
            $table->float('knotsIntegrated_kormkaPosle40_size3', 8, 2)->nullable();
            $table->float('knotsIntegrated_kormkaPosle40_size4', 8, 2)->nullable();
            $table->float('knotsIntegrated_kormkaPosle40_size5', 8, 2)->nullable();

            $table->bigInteger('knotsIntegrated_kormkaPosle40_quantity1')->nullable();
            $table->bigInteger('knotsIntegrated_kormkaPosle40_quantity2')->nullable();
            $table->bigInteger('knotsIntegrated_kormkaPosle40_quantity3')->nullable();
            $table->bigInteger('knotsIntegrated_kormkaPosle40_quantity4')->nullable();
            $table->bigInteger('knotsIntegrated_kormkaPosle40_quantity5')->nullable();

            $table->boolean('knotsNotIntagrated__plast_enable');

            $table->float('knotsNotIntagrated__plast_size1', 8, 2)->nullable();
            $table->float('knotsNotIntagrated__plast_size2', 8, 2)->nullable();
            $table->float('knotsNotIntagrated__plast_size3', 8, 2)->nullable();
            $table->float('knotsNotIntagrated__plast_size4', 8, 2)->nullable();
            $table->float('knotsNotIntagrated__plast_size5', 8, 2)->nullable();

            $table->bigInteger('knotsNotIntagrated__plast_quantity1')->nullable();
            $table->bigInteger('knotsNotIntagrated__plast_quantity2')->nullable();
            $table->bigInteger('knotsNotIntagrated__plast_quantity3')->nullable();
            $table->bigInteger('knotsNotIntagrated__plast_quantity4')->nullable();
            $table->bigInteger('knotsNotIntagrated__plast_quantity5')->nullable();

            $table->boolean('knotsNotIntagrated_kormkaDo40_enable');

            $table->float('knotsNotIntagrated_kormkaDo40_size1', 8, 2)->nullable();
            $table->float('knotsNotIntagrated_kormkaDo40_size2', 8, 2)->nullable();
            $table->float('knotsNotIntagrated_kormkaDo40_size3', 8, 2)->nullable();
            $table->float('knotsNotIntagrated_kormkaDo40_size4', 8, 2)->nullable();
            $table->float('knotsNotIntagrated_kormkaDo40_size5', 8, 2)->nullable();

            $table->bigInteger('knotsNotIntagrated_kormkaDo40_quantity1')->nullable();
            $table->bigInteger('knotsNotIntagrated_kormkaDo40_quantity2')->nullable();
            $table->bigInteger('knotsNotIntagrated_kormkaDo40_quantity3')->nullable();
            $table->bigInteger('knotsNotIntagrated_kormkaDo40_quantity4')->nullable();
            $table->bigInteger('knotsNotIntagrated_kormkaDo40_quantity5')->nullable();

            $table->boolean('knotsNotIntagrated_kormkaPosle40_enable');

            $table->float('knotsNotIntagrated_kormkaPosle40_size1', 8, 2)->nullable();
            $table->float('knotsNotIntagrated_kormkaPosle40_size2', 8, 2)->nullable();
            $table->float('knotsNotIntagrated_kormkaPosle40_size3', 8, 2)->nullable();
            $table->float('knotsNotIntagrated_kormkaPosle40_size4', 8, 2)->nullable();
            $table->float('knotsNotIntagrated_kormkaPosle40_size5', 8, 2)->nullable();

            $table->bigInteger('knotsNotIntagrated_kormkaPosle40_quantity1')->nullable();
            $table->bigInteger('knotsNotIntagrated_kormkaPosle40_quantity2')->nullable();
            $table->bigInteger('knotsNotIntagrated_kormkaPosle40_quantity3')->nullable();
            $table->bigInteger('knotsNotIntagrated_kormkaPosle40_quantity4')->nullable();
            $table->bigInteger('knotsNotIntagrated_kormkaPosle40_quantity5')->nullable();

            $table->boolean('knotsWithRot_enable');

            $table->float('knotsWithRot_size1', 8, 2)->nullable();
            $table->float('knotsWithRot_size2', 8, 2)->nullable();
            $table->float('knotsWithRot_size3', 8, 2)->nullable();
            $table->float('knotsWithRot_size4', 8, 2)->nullable();
            $table->float('knotsWithRot_size5', 8, 2)->nullable();

            $table->bigInteger('knotsWithRot_quantity1')->nullable();
            $table->bigInteger('knotsWithRot_quantity2')->nullable();
            $table->bigInteger('knotsWithRot_quantity3')->nullable();
            $table->bigInteger('knotsWithRot_quantity4')->nullable();
            $table->bigInteger('knotsWithRot_quantity5')->nullable();

            $table->boolean('sineva_enable');

            $table->bigInteger('sineva_size1')->nullable();
            $table->bigInteger('sineva_size2')->nullable();
            $table->bigInteger('sineva_size3')->nullable();
            $table->bigInteger('sineva_size4')->nullable();
            $table->bigInteger('sineva_size5')->nullable();

            $table->boolean('obzolBlunt_enable');

            $table->float('obzolBlunt_size1', 8, 2)->nullable();
            $table->float('obzolBlunt_size2', 8, 2)->nullable();
            $table->float('obzolBlunt_size3', 8, 2)->nullable();
            $table->float('obzolBlunt_size4', 8, 2)->nullable();
            $table->float('obzolBlunt_size5', 8, 2)->nullable();

            $table->boolean('obzolSharp_enable');

            $table->float('obzolSharp_size1', 8, 2)->nullable();
            $table->float('obzolSharp_size2', 8, 2)->nullable();
            $table->float('obzolSharp_size3', 8, 2)->nullable();
            $table->float('obzolSharp_size4', 8, 2)->nullable();
            $table->float('obzolSharp_size5', 8, 2)->nullable();

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
        Schema::dropIfExists('recipes');
    }
}
