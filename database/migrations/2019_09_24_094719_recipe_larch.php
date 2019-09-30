<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipeLarch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_larch', function (Blueprint $table) {
        	$table->bigIncrements('id');
        	$table->dateTime('Time')->index();
        	//Рецепт 1714 Лиственные породы имеется всего 3 сорта 1,2 и 3 сорта
        	//Обозначения сортов 1s,2s,3s
        	// 
        	//........................
        	//СУЧКИ - khots ***************************************************************************************************
        	//.......................	
    //сучки сросшиеся здоровые - healthy knots ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        	// разрешение сортировки по ним
        	$table->boolean('healthyKnotsEnable')->index();
        	//Не учитываются, кроме групповых, размером, мм, не более
        	$table->bigInteger('healthyKnotsGroupSize1s')->index()->nullable();
        	$table->bigInteger('healthyKnotsGroupSize2s')->index()->nullable();
        	$table->bigInteger('healthyKnotsGroupSize3s')->index()->nullable();
        	//Допускаются на любом однометровом участке длины на пластях пиломатериалов шириной до 100 мм включ. - onStrataTo100
			// размеры ширины тоже выносятся отдельно
        	$table->bigInteger('healthyKnotsOnStrataTo100')->index()->nullable();
        	//от 101 до 200 мм включ. 
        	$table->bigInteger('healthyKnotsOnStrataFrom101')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo200')->index()->nullable();
        	//от 201 до 400 мм включ.
        	$table->bigInteger('healthyKnotsOnStrataFrom201')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo400')->index()->nullable();
        	//свыше 400 мм
        	$table->bigInteger('healthyKnotsOnStrataFrom400')->index()->nullable();
        	//а теперь конкретно внутренности которые соответствуют этим ширинам
        	//1 шт. - Amount размером не более 20 мм - Size, но не более 1/2 ширины - MoreWidth, суммарная величина размеров не более 300мм - SumSize
        	$table->bigInteger('healthyKnotsOnStrataTo100Amount1s')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo100Size1s')->index()->nullable();
        	$table->float('healthyKnotsOnStrataTo100MoreWidth1s',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo100SumSize1s')->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsOnStrataTo100Amount2s')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo100Size2s')->index()->nullable();
        	$table->float('healthyKnotsOnStrataTo100MoreWidth2s',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo100SumSize2s')->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsOnStrataTo100Amount3s')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo100Size3s')->index()->nullable();
        	$table->float('healthyKnotsOnStrataTo100MoreWidth3s',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo100SumSize3s')->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsOnStrataTo200Amount1s')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo200Size1s')->index()->nullable();
        	$table->float('healthyKnotsOnStrataTo200MoreWidth1s',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo200SumSize1s')->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsOnStrataTo200Amount2s')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo200Size2s')->index()->nullable();
        	$table->float('healthyKnotsOnStrataTo200MoreWidth2s',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo200SumSize2s')->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsOnStrataTo200Amount3s')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo200Size3s')->index()->nullable();
        	$table->float('healthyKnotsOnStrataTo200MoreWidth3s',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo200SumSize3s')->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsOnStrataTo400Amount1s')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo400Size1s')->index()->nullable();
        	$table->float('healthyKnotsOnStrataTo400MoreWidth1s',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo400SumSize1s')->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsOnStrataTo400Amount2s')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo400Size2s')->index()->nullable();
        	$table->float('healthyKnotsOnStrataTo400MoreWidth2s',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo400SumSize2s')->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsOnStrataTo400Amount3s')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo400Size3s')->index()->nullable();
        	$table->float('healthyKnotsOnStrataTo400MoreWidth3s',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataTo400SumSize3s')->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsOnStrataFrom400Amount1s')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataFrom400Size1s')->index()->nullable();
        	$table->float('healthyKnotsOnStrataFrom400MoreWidth1s',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataFrom400SumSize1s')->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsOnStrataFrom400Amount2s')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataFrom400Size2s')->index()->nullable();
        	$table->float('healthyKnotsOnStrataFrom400MoreWidth2s',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataFrom400SumSize2s')->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsOnStrataFrom400Amount3s')->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataFrom400Size3s')->index()->nullable();
        	$table->float('healthyKnotsOnStrataFrom400MoreWidth3s',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsOnStrataFrom400SumSize3s')->index()->nullable();
        	//
        	// В пиломатериалах шириной свыше 200 мм BoardWidth -  и длиной более 3,0 м BoardLength при отсутствии других нормируемых пороков NoOtherDefect на каждые последующие 1,5 м EachNextLength длины допускается по одному сучку AllowKnots независимо от его расположения размером Size, мм, не более: 
        	$table->bigInteger('healthyKnotsNoOtherDefectBoardWidth')->index()->nullable();
        	$table->float('healthyKnotsNoOtherDefectBoardLength',8,2)->index()->nullable();
        	$table->float('healthyKnotsNoOtherDefectEachNextLength',8,2)->index()->nullable();
        	$table->bigInteger('healthyKnotsNoOtherDefectAllowKnots')->index()->nullable();
        	$table->bigInteger('healthyKnotsNoOtherDefectSize1s')->index()->nullable();
        	$table->bigInteger('healthyKnotsNoOtherDefectSize2s')->index()->nullable();
        	$table->bigInteger('healthyKnotsNoOtherDefectSize3s')->index()->nullable();
        	//на кромках обрезных пиломатериалов NoOtherDefectSawEdge  толщиной до 32 мм включ
        	//сразу выносим размеры толщин
        	$table->bigInteger('healthyKnotsNoOtherDefectSawEdgeTo32')->index()->nullable();
        	//толщиной от 33 до 60 мм включ. 
        	$table->bigInteger('healthyKnotsNoOtherDefectSawEdgeFrom33')->index()->nullable();
        	$table->bigInteger('healthyKnotsNoOtherDefectSawEdgeTo60')->index()->nullable();
        	//1 шт.Amount размером 1/3 size толщины
        	$table->bigInteger('healthyKnotsNoOtherDefectSawEdgeTo32Amount1s')->index()->nullable();
        	$table->float('healthyKnotsNoOtherDefectSawEdgeTo32Size1s',8,2)->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsNoOtherDefectSawEdgeTo32Amount2s')->index()->nullable();
        	$table->float('healthyKnotsNoOtherDefectSawEdgeTo32Size2s',8,2)->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsNoOtherDefectSawEdgeTo32Amount3s')->index()->nullable();
        	$table->float('healthyKnotsNoOtherDefectSawEdgeTo32Size3s',8,2)->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsNoOtherDefectSawEdgeTo60Amount1s')->index()->nullable();
        	$table->float('healthyKnotsNoOtherDefectSawEdgeTo60Size1s',8,2)->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsNoOtherDefectSawEdgeTo60Amount2s')->index()->nullable();
        	$table->float('healthyKnotsNoOtherDefectSawEdgeTo60Size2s',8,2)->index()->nullable();
        	//
        	$table->bigInteger('healthyKnotsNoOtherDefectSawEdgeTo60Amount3s')->index()->nullable();
        	$table->float('healthyKnotsNoOtherDefectSawEdgeTo60Size3s',8,2)->index()->nullable();
        	//
 //сучки частично сросшиеся здоровые - part healthy knots ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        	// разрешение сортировки по ним
        	$table->boolean('partHealthyKnotsEnable')->index();
        	//Не учитываются, кроме групповых, размером, мм, не более
        	$table->bigInteger('partHealthyKnotsGroupSize1s')->index()->nullable();
        	$table->bigInteger('partHealthyKnotsGroupSize2s')->index()->nullable();
        	$table->bigInteger('partHealthyKnotsGroupSize3s')->index()->nullable();
        	//Допускаются на любом однометровом участке - LengthPlot длины размером, мм,не более Size :на пластях пиломатериалов - onStrata суммарной величиной размеров не более 150 мм SumSize
        	$table->float('partHealthyKnotsOnStrataLengthPlot',8,2)->index()->nullable();
        	//
        	$table->bigInteger('partHealthyKnotsOnStrataSize1s')->index()->nullable();
        	$table->bigInteger('partHealthyKnotsOnStrataSumSize1s')->index()->nullable();
        	//
        	$table->bigInteger('partHealthyKnotsOnStrataSize2s')->index()->nullable();
        	$table->bigInteger('partHealthyKnotsOnStrataSumSize2s')->index()->nullable();
        	//
        	$table->bigInteger('partHealthyKnotsOnStrataSize3s')->index()->nullable();
        	$table->bigInteger('partHealthyKnotsOnStrataSumSize3s')->index()->nullable();
        	//
        	//на кромках обрезных пиломатериал SawEdge, суммарной величиной размеров не более 150 мм SumSize, и на всякий случай размер Size

        	$table->bigInteger('partHealthyKnotsSawEdgeSize1s')->index()->nullable();
        	$table->bigInteger('partHealthyKnotsSawEdgeSumSize1s')->index()->nullable();
        	//
        	$table->bigInteger('partHealthyKnotsSawEdgeSize2s')->index()->nullable();
        	$table->bigInteger('partHealthyKnotsSawEdgeSumSize2s')->index()->nullable();
        	//
        	$table->bigInteger('partHealthyKnotsSawEdgeSize3s')->index()->nullable();
        	$table->bigInteger('partHealthyKnotsSawEdgeSumSize3s')->index()->nullable();
        	//
 //сучки  выпадающие, загнившие, гнилые** и табачные - bad knots ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        	// разрешение сортировки по ним
        	$table->boolean('badKnotsEnable')->index();
        	//Не учитываются, кроме групповых, размером, мм, не более
        	$table->bigInteger('badKnotsGroupSize1s')->index()->nullable();
        	$table->bigInteger('badKnotsGroupSize2s')->index()->nullable();
        	$table->bigInteger('badKnotsGroupSize3s')->index()->nullable();
        	//Допускаются на любом однометровом участке - LengthPlot длины размером, мм,не более Size в количестве Amount:на пластях пиломатериалов - onStrata суммарной величиной размеров не более 150 мм SumSize
        	$table->float('badKnotsOnStrataLengthPlot',8,2)->index()->nullable();
        	//
        	$table->bigInteger('badKnotsOnStrataSize1s')->index()->nullable();
        	$table->bigInteger('badKnotsOnStrataAmount1s')->index()->nullable();
        	$table->bigInteger('badKnotsOnStrataSumSize1s')->index()->nullable();
        	//
        	$table->bigInteger('badKnotsOnStrataSize2s')->index()->nullable();
        	$table->bigInteger('badKnotsOnStrataAmount2s')->index()->nullable();
        	$table->bigInteger('badKnotsOnStrataSumSize2s')->index()->nullable();
        	//
			$table->bigInteger('badKnotsOnStrataSize3s')->index()->nullable();
        	$table->bigInteger('badKnotsOnStrataAmount3s')->index()->nullable();
        	$table->bigInteger('badKnotsOnStrataSumSize3s')->index()->nullable();
        	//
			//........................
        	//Трещины - cracks ***************************************************************************************************
        	//.......................	
    // Пластевые и кромочные (на обрезных кромках),в том числе с выходом на торец - Strata Edge OutOneEdge cracks ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        	// разрешение сортировки по ним
        	$table->boolean('strataEdgeOutOneEdgeCrackEnable')->index();
        	//Допускаются глубиной и длиной Size, количество Amount не более
        	$table->float('strataEdgeOutOneEdgeCrackSize1s',8,2)->index()->nullable();
        	$table->bigInteger('strataEdgeOutOneEdgeCrackAmount1s')->index()->nullable();
        	//
			$table->float('strataEdgeOutOneEdgeCrackSize2s',8,2)->index()->nullable();
			$table->bigInteger('strataEdgeOutOneEdgeCrackAmount2s')->index()->nullable();
			//
			$table->float('strataEdgeOutOneEdgeCrackSize3s',8,2)->index()->nullable();
			$table->bigInteger('strataEdgeOutOneEdgeCrackAmount3s')->index()->nullable();
			//Пластевые, выходящие на оба торца Strata Edge OutBothEdge   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
			// разрешение сортировки по ним
        	$table->boolean('strataEdgeOutBothEdgeCrackEnable')->index();
			//Допускается одна Amount глубиной Size, не более:
			$table->float('strataEdgeOutBothEdgeCrackSize1s',8,2)->index()->nullable();
        	$table->bigInteger('strataEdgeOutBothEdgeCrackAmount1s')->index()->nullable();
        	//
			$table->float('strataEdgeOutBothEdgeCrackSize2s',8,2)->index()->nullable();
			$table->bigInteger('strataEdgeOutBothEdgeCrackAmount2s')->index()->nullable();
			//
			$table->float('strataEdgeOutBothEdgeCrackSize3s',8,2)->index()->nullable();
			$table->bigInteger('strataEdgeOutBothEdgeCrackAmount3s')->index()->nullable();
			//
			// Пластевые и кромочные сквозные Strata Edge through, в том числе выходящие на торец ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
			// разрешение сортировки по ним
        	$table->boolean('strataEdgeThrouthCrackEnable')->index();
			//Допускаются общей длиной Size, не более: и в количестве Amount
			$table->float('strataEdgeThrouthCrackSize1s',8,2)->index()->nullable();
        	$table->bigInteger('strataEdgeThrouthCrackAmount1s')->index()->nullable();
        	//
        	$table->float('strataEdgeThrouthCrackSize2s',8,2)->index()->nullable();
        	$table->bigInteger('strataEdgeThrouthCrackAmount2s')->index()->nullable();
        	//
        	$table->float('strataEdgeThrouthCrackSize3s',8,2)->index()->nullable();
        	$table->bigInteger('strataEdgeThrouthCrackAmount3s')->index()->nullable();
        	//
        	// Отлупные - foolish crack ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        	// разрешение сортировки по ним
        	$table->boolean('foolishCrackEnable')->index();
        	//Допускаются длиной Size , не более: и количеством Amount
        	$table->float('foolishCrackSize1s',8,2)->index()->nullable();
        	$table->bigInteger('foolishCrackAmount1s')->index()->nullable();
        	//
        	$table->float('foolishCrackSize2s',8,2)->index()->nullable();
        	$table->bigInteger('foolishCrackAmount2s')->index()->nullable();
        	//
        	$table->float('foolishCrackSize3s',8,2)->index()->nullable();
        	$table->bigInteger('foolishCrackAmount3s')->index()->nullable();
        	//
        	//........................
        	//Порость - sweep ***************************************************************************************************
        	//.......................	
        	// односторонняя - OneSide
        	// разрешение сортировки по ним
        	$table->boolean('oneSideSweepEnable')->index();
        	//Допускается длиной и шириной Size, не более: 
        	$table->float('oneSideSweepSize1s',8,2)->index()->nullable();
        	$table->float('oneSideSweepSize2s',8,2)->index()->nullable();
        	$table->float('oneSideSweepSize3s',8,2)->index()->nullable();
        	//
        	//........................
        	//Забалонь - sapwood ***************************************************************************************************
        	//....................... 
        	// разрешение сортировки по ним
        	$table->boolean('sapwoodEnable')->index();
        	// допускается Allowed
        	$table->boolean('sapwoodAllowed1s')->index();
        	$table->boolean('sapwoodAllowed2s')->index();
        	$table->boolean('sapwoodAllowed3s')->index();
        	//
        	//........................
        	//Плесень - mold ***************************************************************************************************
        	//.......................
        	// разрешение сортировки по ним
        	$table->boolean('moldEnable')->index();
        	// допускается Allowed
        	$table->boolean('moldAllowed1s')->index();
        	$table->boolean('moldAllowed2s')->index();
        	$table->boolean('moldAllowed3s')->index();
        	//
        	//........................
        	//Синева - blue ***************************************************************************************************
        	//.......................
        	// разрешение сортировки по ним
        	$table->boolean('blueEnable')->index();
        	//
        	// поверхностная - surfaceBlue .  размер size ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        	$table->bigInteger('surfaceBlueSize1s')->index()->nullable();
        	//
        	$table->bigInteger('surfaceBlueSize2s')->index()->nullable();
        	//
        	$table->bigInteger('surfaceBlueSize3s')->index()->nullable();
        	//
        	//
        	// глубокая - depthBlue . размер size ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        	$table->bigInteger('depthBlueSize1s')->index()->nullable();
        	//
        	$table->bigInteger('depthBlueSize2s')->index()->nullable();
        	//
        	$table->bigInteger('depthBlueSize3s')->index()->nullable();
        	//
        	//........................
        	//Гниль - rot   ***************************************************************************************************
        	//.......................
        	// разрешение сортировки по ним
        	$table->boolean('rotEnable')->index();
        	// допускается Allowed, размеры size
        	$table->bigInteger('rotSize1s')->index()->nullable();
        	//
        	$table->bigInteger('rotSize2s')->index()->nullable();
        	//
        	$table->bigInteger('rotSize3s')->index()->nullable();
        	//
        	//
        	//........................
        	//Обзол - bark   ***************************************************************************************************
        	//.......................
        	// разрешение сортировки по ним
        	$table->boolean('barkEnable')->index();
        	// тупой - obtuseBark, размер - Size |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        	$table->float('obtuseBarkSize1s',8,2)->index()->nullable();
        	$table->float('obtuseBarkSize2s',8,2)->index()->nullable();
        	$table->float('obtuseBarkSize3s',8,2)->index()->nullable();
        	// острый - sharpBark, размер - Size |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        	$table->float('sharpBarkSize1s',8,2)->index()->nullable();
        	$table->float('sharpBarkSize2s',8,2)->index()->nullable();
        	$table->float('sharpBarkSize3s',8,2)->index()->nullable();
        	//
        	//Механические повреждения - mechanicalDamage   ***************************************************************************************************
        	//.......................
        	// разрешение сортировки по ним
        	$table->boolean('mechanicalDamageEnable')->index();
        	//размер - Size |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
        	$table->float('mechanicalDamageSize1s',8,2)->index()->nullable();
        	$table->float('mechanicalDamageSize2s',8,2)->index()->nullable();
        	$table->float('mechanicalDamageSize3s',8,2)->index()->nullable();
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
        Schema::dropIfExists('recipe_larch');
    }
}
