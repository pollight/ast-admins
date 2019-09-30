<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipeFir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_fir', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('Time')->index()->nullable();
            $table->boolean('selected')->index()->nullable();
            $table->bigInteger('userid')->index()->nullable();
            //Рецепт 1713 Хвойные породы имеется всего 5 сортов 1,2 и 3 сорта, 4 и отборный
            //Обозначения сортов 0s,1s,2s,3s,4s
            // 
            //........................
            //СУЧКИ - khots ***************************************************************************************************
            //.......................   
    //сучки сросшиеся здоровые - healthy knots ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
            // разрешение сортировки по ним
            
            $table->boolean('healthyKnotsEnable')->index()->nullable();
            // пластевые и ребровые - OnStrata , размер - Size, кол-во - Amount
            $table->float('healthyKnotsOnStrataSize0s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnStrataAmount0s')->index()->nullable();
            //
            $table->float('healthyKnotsOnStrataSize1s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnStrataAmount1s')->index()->nullable();
            //
            $table->float('healthyKnotsOnStrataSize2s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnStrataAmount2s')->index()->nullable();
            //
            $table->float('healthyKnotsOnStrataSize3s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnStrataAmount3s')->index()->nullable();
            //
            $table->float('healthyKnotsOnStrataSize4s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnStrataAmount4s')->index()->nullable();
            //
            //кромочные - onEdge
            //до 40мм onEdgeTo40, размер - Size, кол-во - Amount
            $table->float('healthyKnotsOnEdgeTo40Size0s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnEdgeTo40Amount0s')->index()->nullable();
            //
            $table->float('healthyKnotsOnEdgeTo40Size1s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnEdgeTo40Amount1s')->index()->nullable();
            //
            $table->float('healthyKnotsOnEdgeTo40Size2s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnEdgeTo40Amount2s')->index()->nullable();
            //
            $table->float('healthyKnotsOnEdgeTo40Size3s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnEdgeTo40Amount3s')->index()->nullable();
            //
            $table->float('healthyKnotsOnEdgeTo40Size4s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnEdgeTo40Amount4s')->index()->nullable();
            //
            //от 40мм onEdgeFrom40, размер - Size, кол-во - Amount
            $table->float('healthyKnotsOnEdgeFrom40Size0s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnEdgeFrom40Amount0s')->index()->nullable();
            //
            $table->float('healthyKnotsOnEdgeFrom40Size1s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnEdgeFrom40Amount1s')->index()->nullable();
            //
            $table->float('healthyKnotsOnEdgeFrom40Size2s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnEdgeFrom40Amount2s')->index()->nullable();
            //
            $table->float('healthyKnotsOnEdgeFrom40Size3s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnEdgeFrom40Amount3s')->index()->nullable();
            //
            $table->float('healthyKnotsOnEdgeFrom40Size4s',8,2)->index()->nullable();
            $table->bigInteger('healthyKnotsOnEdgeFrom40Amount4s')->index()->nullable();
            //boolean

            //сучки частично сросшиеся здоровые - part healthy knots ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
            // разрешение сортировки по ним
            $table->boolean('partHealthyKnotsEnable')->index()->nullable();
            // пластевые и ребровые - OnStrata , размер - Size, кол-во - Amount
            $table->float('partHealthyKnotsOnStrataSize0s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnStrataAmount0s')->index()->nullable();
            //
            $table->float('partHealthyKnotsOnStrataSize1s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnStrataAmount1s')->index()->nullable();
            //
            $table->float('partHealthyKnotsOnStrataSize2s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnStrataAmount2s')->index()->nullable();
            //
            $table->float('partHealthyKnotsOnStrataSize3s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnStrataAmount3s')->index()->nullable();
            //
            $table->float('partHealthyKnotsOnStrataSize4s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnStrataAmount4s')->index()->nullable();
            //
            //кромочные - onEdge
            //до 40мм onEdgeTo40, размер - Size, кол-во - Amount
            $table->float('partHealthyKnotsOnEdgeTo40Size0s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnEdgeTo40Amount0s')->index()->nullable();
            //
            $table->float('partHealthyKnotsOnEdgeTo40Size1s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnEdgeTo40Amount1s')->index()->nullable();
            //
            $table->float('partHealthyKnotsOnEdgeTo40Size2s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnEdgeTo40Amount2s')->index()->nullable();
            //
            $table->float('partHealthyKnotsOnEdgeTo40Size3s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnEdgeTo40Amount3s')->index()->nullable();
            //
            $table->float('partHealthyKnotsOnEdgeTo40Size4s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnEdgeTo40Amount4s')->index()->nullable();
            //
            //от 40мм onEdgeFrom40, размер - Size, кол-во - Amount
            $table->float('partHealthyKnotsOnEdgeFrom40Size0s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnEdgeFrom40Amount0s')->index()->nullable();
            //
            $table->float('partHealthyKnotsOnEdgeFrom40Size1s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnEdgeFrom40Amount1s')->index()->nullable();
            //
            $table->float('partHealthyKnotsOnEdgeFrom40Size2s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnEdgeFrom40Amount2s')->index()->nullable();
            //
            $table->float('partHealthyKnotsOnEdgeFrom40Size3s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnEdgeFrom40Amount3s')->index()->nullable();
            //
            $table->float('partHealthyKnotsOnEdgeFrom40Size4s',8,2)->index()->nullable();
            $table->bigInteger('partHealthyKnotsOnEdgeFrom40Amount4s')->index()->nullable();
            //
            //сучки  выпадающие, загнившие, гнилые** и табачные - bad knots ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
            // разрешение сортировки по ним
            $table->boolean('badKnotsEnable')->index()->nullable();
            //
            $table->float('badKnotsSize0s',8,2)->index()->nullable();
            $table->bigInteger('badKnotsAmount0s')->index()->nullable();
            //
            $table->float('badKnotsSize1s',8,2)->index()->nullable();
            $table->bigInteger('badKnotsAmount1s')->index()->nullable();
            //
            $table->float('badKnotsSize2s',8,2)->index()->nullable();
            $table->bigInteger('badKnotsAmount2s')->index()->nullable();
            //
            $table->float('badKnotsSize3s',8,2)->index()->nullable();
            $table->bigInteger('badKnotsAmount3s')->index()->nullable();
            //
            $table->float('badKnotsSize4s',8,2)->index()->nullable();
            $table->bigInteger('badKnotsAmount4s')->index()->nullable();
            //
            //........................
            //Трещины - cracks ***************************************************************************************************
            //.......................   
    // Пластевые и кромочные (на обрезных кромках),в том числе с выходом на торец - Strata Edge OutOneEdge cracks ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
            // разрешение сортировки по ним
            $table->boolean('strataEdgeOutOneEdgeCrackEnable')->index()->nullable();

            //Допускаются глубиной и длиной Size, количество Amount не более
            //не глубокие - NonDeep
             $table->float('strataEdgeOutOneEdgeNonDeepCrackSize0s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeOutOneEdgeNonDeepCrackAmount0s')->index()->nullable();
            //
            $table->float('strataEdgeOutOneEdgeNonDeepCrackSize1s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeOutOneEdgeNonDeepCrackAmount1s')->index()->nullable();
            //
            $table->float('strataEdgeOutOneEdgeNonDeepCrackSize2s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeOutOneEdgeNonDeepCrackAmount2s')->index()->nullable();
            //
            $table->float('strataEdgeOutOneEdgeNonDeepCrackSize3s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeOutOneEdgeNonDeepCrackAmount3s')->index()->nullable();
            //
            $table->float('strataEdgeOutOneEdgeNonDeepCrackSize4s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeOutOneEdgeNonDeepCrackAmount4s')->index()->nullable();

            //глубокие - deep
            $table->float('strataEdgeOutOneEdgeDeepCrackSize0s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeOutOneEdgeDeepCrackAmount0s')->index()->nullable();
            //
            $table->float('strataEdgeOutOneEdgeDeepCrackSize1s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeOutOneEdgeDeepCrackAmount1s')->index()->nullable();
            //
            $table->float('strataEdgeOutOneEdgeDeepCrackSize2s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeOutOneEdgeDeepCrackAmount2s')->index()->nullable();
            //
            $table->float('strataEdgeOutOneEdgeDeepCrackSize3s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeOutOneEdgeDeepCrackAmount3s')->index()->nullable();
            //
            $table->float('strataEdgeOutOneEdgeDeepCrackSize4s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeOutOneEdgeDeepCrackAmount4s')->index()->nullable();

           //
            // Пластевые сквозные Strata Edge through, в том числе выходящие на торец ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
            // разрешение сортировки по ним
            $table->boolean('strataEdgeThrouthCrackEnable')->index()->nullable();
            //Допускаются общей длиной Size, не более: и в количестве Amount
            $table->float('strataEdgeThrouthCrackSize0s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeThrouthCrackAmount0s')->index()->nullable();
            //
            $table->float('strataEdgeThrouthCrackSize1s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeThrouthCrackAmount1s')->index()->nullable();
            //
            $table->float('strataEdgeThrouthCrackSize2s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeThrouthCrackAmount2s')->index()->nullable();
            //
            $table->float('strataEdgeThrouthCrackSize3s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeThrouthCrackAmount3s')->index()->nullable();
            //
            $table->float('strataEdgeThrouthCrackSize4s',8,2)->index()->nullable();
            $table->bigInteger('strataEdgeThrouthCrackAmount4s')->index()->nullable();
            //
            //........................
            //Порость - sweep ***************************************************************************************************
            //.......................   
            // разрешение сортировки по ним
            $table->boolean('sweepEnable')->index()->nullable();
            //Допускается длиной LengthSize и шириной WidthSize, не более: 
            $table->float('sweepLengthSize0s',8,2)->index()->nullable();
            $table->float('sweepWidthSize0s',8,2)->index()->nullable();
            //
            $table->float('sweepLengthSize1s',8,2)->index()->nullable();
            $table->float('sweepWidthSize1s',8,2)->index()->nullable();
            //
            $table->float('sweepLengthSize2s',8,2)->index()->nullable();
            $table->float('sweepWidthSize2s',8,2)->index()->nullable();
            //
            $table->float('sweepLengthSize3s',8,2)->index()->nullable();
            $table->float('sweepWidthSize3s',8,2)->index()->nullable();
            //
            $table->float('sweepLengthSize4s',8,2)->index()->nullable();
            $table->float('sweepWidthSize4s',8,2)->index()->nullable();
            //
            //........................
            //Забалонь - sapwood ***************************************************************************************************
            //....................... 
            // разрешение сортировки по ним
            $table->boolean('sapwoodEnable')->index()->nullable();
            // размер Size
            $table->float('sapwoodSize0s')->index()->nullable();
            $table->float('sapwoodSize1s')->index()->nullable();
            $table->float('sapwoodSize2s')->index()->nullable();
            $table->float('sapwoodSize3s')->index()->nullable();
            $table->float('sapwoodSize4s')->index()->nullable();
            //
            //........................
            //Плесень - mold ***************************************************************************************************
            //.......................
            // разрешение сортировки по ним
            $table->boolean('moldEnable')->index()->nullable();    
            // размер Size
            $table->bigInteger('moldSize0s')->index()->nullable();
            $table->bigInteger('moldSize1s')->index()->nullable();
            $table->bigInteger('moldSize2s')->index()->nullable();
            $table->bigInteger('moldSize3s')->index()->nullable();
            $table->bigInteger('moldSize4s')->index()->nullable();
            //
            //
            //Гниль - rot   ***************************************************************************************************
            //.......................
            // разрешение сортировки по ним
            $table->boolean('rotEnable')->index()->nullable();
            // допускается Allowed, размеры size
            $table->bigInteger('rotSize0s')->index()->nullable();
            //
            $table->bigInteger('rotSize1s')->index()->nullable();
            //
            $table->bigInteger('rotSize2s')->index()->nullable();
            //
            $table->bigInteger('rotSize3s')->index()->nullable();
            //
            $table->bigInteger('rotSize4s')->index()->nullable();
            //
            //........................
            //Обзол - bark   ***************************************************************************************************
            //.......................
            // разрешение сортировки по ним
            $table->boolean('barkEnable')->index()->nullable();
            // В пиломатериалах толщиной до 40мм - barkTo40 |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
            // на пласти от каждой кромки FromEdgeSize
            $table->bigInteger('barkTo40FromEdgeSize0s')->index()->nullable();
            //
            $table->bigInteger('barkTo40FromEdgeSize1s')->index()->nullable();
            //
            $table->bigInteger('barkTo40FromEdgeSize2s')->index()->nullable();
            //
            $table->bigInteger('barkTo40FromEdgeSize3s')->index()->nullable();
            //
            $table->bigInteger('barkTo40FromEdgeSize4s')->index()->nullable();
            //
            // на кромке OnEdge
            $table->bigInteger('barkTo40OnEdgeSize0s')->index()->nullable();
            //
            $table->bigInteger('barkTo40OnEdgeSize1s')->index()->nullable();
            //
            $table->bigInteger('barkTo40OnEdgeSize2s')->index()->nullable();
            //
            $table->bigInteger('barkTo40OnEdgeSize3s')->index()->nullable();
            //
            $table->bigInteger('barkTo40OnEdgeSize4s')->index()->nullable();
            //

            // протяженностью на кромке ExtLength
             $table->bigInteger('barkTo40ExtLengthSize0s')->index()->nullable();
            //
            $table->bigInteger('barkTo40ExtLengthSize1s')->index()->nullable();
            //
            $table->bigInteger('barkTo40ExtLengthSize2s')->index()->nullable();
            //
            $table->bigInteger('barkTo40ExtLengthSize3s')->index()->nullable();
            //
            $table->bigInteger('barkTo40ExtLengthSize4s')->index()->nullable();
            //


            // В пиломатериалах толщиной больше 40мм - barkFrom40 |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
           // на пласти от каждой кромки FromEdgeSize
            $table->bigInteger('barkFrom40FromEdgeSize0s')->index()->nullable();
            //
            $table->bigInteger('barkFrom40FromEdgeSize1s')->index()->nullable();
            //
            $table->bigInteger('barkFrom40FromEdgeSize2s')->index()->nullable();
            //
            $table->bigInteger('barkFrom40FromEdgeSize3s')->index()->nullable();
            //
            $table->bigInteger('barkFrom40FromEdgeSize4s')->index()->nullable();
            //
            // на кромке OnEdge
            $table->bigInteger('barkFrom40OnEdgeSize0s')->index()->nullable();
            //
            $table->bigInteger('barkFrom40OnEdgeSize1s')->index()->nullable();
            //
            $table->bigInteger('barkFrom40OnEdgeSize2s')->index()->nullable();
            //
            $table->bigInteger('barkFrom40OnEdgeSize3s')->index()->nullable();
            //
            $table->bigInteger('barkFrom40OnEdgeSize4s')->index()->nullable();
            //

            // протяженностью на кромке ExtLength
             $table->bigInteger('barkFrom40ExtLengthSize0s')->index()->nullable();
            //
            $table->bigInteger('barkFrom40ExtLengthSize1s')->index()->nullable();
            //
            $table->bigInteger('barkFrom40ExtLengthSize2s')->index()->nullable();
            //
            $table->bigInteger('barkFrom40ExtLengthSize3s')->index()->nullable();
            //
            $table->bigInteger('barkFrom40ExtLengthSize4s')->index()->nullable();
            //
           //Механические повреждения - mechanicalDamage   ***************************************************************************************************
            //.......................
            // разрешение сортировки по ним
            $table->boolean('mechanicalDamageEnable')->index()->nullable();
            //размер - Size |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
            $table->float('mechanicalDamageSize0s',8,2)->index()->nullable();
            $table->float('mechanicalDamageSize1s',8,2)->index()->nullable();
            $table->float('mechanicalDamageSize2s',8,2)->index()->nullable();
            $table->float('mechanicalDamageSize3s',8,2)->index()->nullable();
            $table->float('mechanicalDamageSize4s',8,2)->index()->nullable();
            //
            //
            //Синева - blue ***************************************************************************************************
        	//.......................
        	// разрешение сортировки по ним
        	$table->boolean('blueEnable')->index()->nullable();
        	//
        	// поверхностная - surfaceBlue .  размер size ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        	$table->bigInteger('blueSize0s')->index()->nullable();
        	//
        	$table->bigInteger('blueSize1s')->index()->nullable();
        	//
        	$table->bigInteger('blueSize2s')->index()->nullable();
        	//
        	$table->bigInteger('blueSize3s')->index()->nullable();
        	//
        	$table->bigInteger('blueSize4s')->index()->nullable();
        	//
                

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
       Schema::dropIfExists('recipe_fir');
    }
}
