<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    protected function index()
    {
    	
        $routes['get_data_boards'] = route('get_data_boards');

        return view('dashboard.statistics.index', [
            'routes' => $routes,
        ]);
    }

    protected function get_volume(Request $request)																													/// метод получения данных статистики
    {
    	$_time = time();
    	$sortVolume 			= 0;
        $outputVolume 			= 0;
        $inpVolume 				= 0;
        $toPaletka 				= 0;
        $Sort1 					= 0;
        $Sort2 					= 0;
        $Sort3 					= 0;
        $Sort4 					= 0;
        $SortOtb 				= 0;
        $nextDay 				= 0;
        $graphBlok 				= 0;                                                                                                                               /// маркер для вывода графика производительности смен
        $Req                    = $request->all();
        $GLOBALS['req']         = $Req;
        $retArrVol              = [];																																
        $smenaArr 				= [];
        $dayArr                 = [];
        $arrStandatrBoard 		= [];
        $H 						= [16,19,22,25,32,40,44,50,60,70];																									/// сандартный ряд толщины досок по ГОСТ
        $W 						= [75,100,125,150,175,200,225,250,500];																								/// стандартный ряд ширины досок по ГОСТ
        $L 						= [3,3.5,4,4.5,5,5.5,6,6.5,7];																										/// длинны досок которые может померить линия


        for ($key =0 ; $key<9 ; $key++) {
        	for ($k =0 ; $k<8;$k++) {
        		for ($e=0; $e<8; $e++) {
        			for($i=0;$i<=4;$i++){
        				array_push($arrStandatrBoard,
        			 		array("height_l"=>$H[$key], "height_h"=>$H[$key+1],
        			 		"width_l"=>$W[$k], "width_h"=>$W[$k+1],
        			 		"length_l"=>$L[$e], "length_h"=>$L[$e+1],																								/// Создаем массив стандартного ряда досок по ГОСТ
        					"volume"=>0, "count"=>0,"sort"=>$i));
        			}
        		}
        	}
        }





////////////////// ======= 			РАЗБОР ДАННЫХ ИЗ ЗАПРОСА 			=======  	/////////////////////////////////////////////////////////////////////////

    	$timestamp 				= date('Y-m-d H:i:s',$_time);
		$start_day 				= date('Y-m-d H:i:s',mktime(0, 0, 0, date("m", $_time), date("d", $_time), date("y", $_time))-(86400*5));
        if($Req['start'] && $Req['end']){
            $timestamp          =  date('Y-m-d H:i:s',strtotime($Req['end']));
            $endUnix            = strtotime($timestamp)+86399;
            $timestampEndDay    =  date('Y-m-d H:i:s',$endUnix);
            $start_day          =  date('Y-m-d H:i:s',strtotime($Req['start']));
        }
        else
        {
        	$timestampEndDay 				= date('Y-m-d H:i:s',$_time);
        	        $endUnix                = strtotime($timestamp);
        }
////////////////// ======= 				КОНЕЦ			=======  	//////////////////////////////////////////////////////////////////////////////////////








   /////////////// ======= 			ДАННЫЕ ИЗ БД	 		=======		//////////////////////////////////////////////////////////////////////////////////////

    	$databoard 				= \DB::table('data_boards')
                				->whereBetween('Time',[$start_day,$timestampEndDay] )																				/// Получаем данные из БД
                				->get();
////////////////// ======= 				КОНЕЦ			=======  	//////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







////////////////// ======= 			МАССИВ СМЕН 			=======  	//////////////////////////////////////////////////////////////////////////////////////

        $startUnix				= strtotime($start_day);
        $startDay0				= mktime(0, 0, 0, date("m", $startUnix), date("d", $startUnix), date("y", $startUnix));
        $promezhutok 			= $endUnix-$startDay0;
        $valDayInPromezhutok	= ceil($promezhutok/86400);
        $endSmena  				= $startDay0+57600;


        if($endSmena>=$startUnix){                                                                                                                          		/// определяем с какой смены начали запрос
        	array_push($smenaArr,array('startSmena'=>$startDay0,'endSmena'=>$endSmena,"col"=>0,"smena"=>1));
        	array_push($smenaArr,array('startSmena'=>$endSmena,'endSmena'=>$startDay0+86399,"col"=>0,"smena"=>2));
            array_push($dayArr,date('Y-m-d',$startDay0));
        }
        else
        {
        	array_push($smenaArr,array('startSmena'=>$endSmena,'endSmena'=>$startDay0+86399,"col"=>0,"smena"=>2));
            array_push($dayArr,date('Y-m-d',$endSmena));	
        }

        for ($i=1; $i <$valDayInPromezhutok ; $i++) {                                                                                                     			/// создаем массив смен 
        	$nextDay			= $startDay0 + (86400 * $i);
        	if(($nextDay+57600)<$endUnix)
            {
            	array_push($smenaArr,array('startSmena'=>$nextDay,'endSmena'=>$nextDay+57599 ,"col"=>0,"smena"=>1));
            	array_push($smenaArr,array('startSmena'=>$nextDay+57600,'endSmena'=>$nextDay+86399,"col"=>0,"smena"=>2));
                array_push($dayArr,date('Y-m-d',$nextDay));
            }
            else
            {
            	array_push($smenaArr,array('startSmena'=>$nextDay,'endSmena'=>$nextDay+57599,"col"=>0,"smena"=>1));
                array_push($dayArr,date('Y-m-d',$nextDay));
            }          					
        }

////////////////// ======= 				КОНЕЦ 			=======  	//////////////////////////////////////////////////////////////////////////////////////

        function getCode()
        {
            $Req =  $GLOBALS['req'] ;
            if(isset($Req['smena']))
            {                        
                if(!empty($Req['smena']))
                {                                                                                                  
                    if(in_array(1,$Req['smena']) && in_array(2,$Req['smena'])==false)                                                                                       /// 
                    {
                        $code=1;
                    }
                    if(in_array(1,$Req['smena'])==false && in_array(2,$Req['smena']))
                    {
                        $code=2;
                    }
                    if(in_array(1,$Req['smena']) && in_array(2,$Req['smena']))
                    {
                        $code=3;               
                    }
                }
                else
                {
                    $code=3;
                }
            }
            else
            {
                $code=3;
            }
            return $code;

            }






			function perebor($value,$vol,&$arrStandatrBoard)
			{
                $code=getCode();
            	switch ($code) {
            		case 1:
	            			foreach ($arrStandatrBoard as $l => $val) {       
                                if(isset($value->Smena)){                                                                                                              /// подсчет данных для таблицы по сортам
                                    if(($val['height_l']<=$value->Height && $val['height_h']>$value->Height)
                                     && 
                                     ($val['length_l']<=$value->Length && $val['length_h']>$value->Length)
                                     &&
                                     ($val['width_l']<=$value->Width && $val['width_h']>$value->Width)
                                     &&
                                     ($value->Sort!=99 && $value->Sort==$val['sort']) && $value->Smena==1)
                                    {
                                        $arrStandatrBoard[$l]['count'] = $arrStandatrBoard[$l]['count']+1;
                                        $arrStandatrBoard[$l]['volume'] = $arrStandatrBoard[$l]['volume'] + $vol;
                                    }
                                }
                            }
	           			break;
            		case 2:
	            			foreach ($arrStandatrBoard as $l => $val) { 
                                if(isset($value->Smena)){                                                                                                            /// подсчет данных для таблицы по сортам
                                    if(($val['height_l']<=$value->Height && $val['height_h']>$value->Height)
                                     && 
                                     ($val['length_l']<=$value->Length && $val['length_h']>$value->Length)
                                     &&
                                     ($val['width_l']<=$value->Width && $val['width_h']>$value->Width)
                                     &&
                                     ($value->Sort!=99 && $value->Sort==$val['sort']) && $value->Smena==2)
                                    {
                                        $arrStandatrBoard[$l]['count'] = $arrStandatrBoard[$l]['count']+1;
                                        $arrStandatrBoard[$l]['volume'] = $arrStandatrBoard[$l]['volume'] + $vol;
                                    }
                            }
                            }
            			break;
				            		
            		default:
			 	        	foreach ($arrStandatrBoard as $l => $val) {																								/// подсчет данных для таблицы по сортам
				                if(($val['height_l']<=$value->Height && $val['height_h']>$value->Height)
				                 && 
				                 ($val['length_l']<=$value->Length && $val['length_h']>$value->Length)
				                 &&
				                 ($val['width_l']<=$value->Width && $val['width_h']>$value->Width)
				                 &&
				                 ($value->Sort!=99 && $value->Sort==$val['sort']))
				                {
				                	$arrStandatrBoard[$l]['count'] = $arrStandatrBoard[$l]['count']+1;
				                	$arrStandatrBoard[$l]['volume'] = $arrStandatrBoard[$l]['volume'] + $vol;
				                }
				            }
            			break;
	            	}
			} 













////////////////// ======= 			РАЗБИРАЕМ ДАННЫЕ ПОЛУЧЕННЫЕ ИЗ БАЗЫ 			=======  	/////////////////////////////////////////////////////////
                $smena=getCode();
                foreach ($databoard as $key => $value) { 																											///  разбираем данные полученые из базы по условию

                	$vol 		             = (int)$value->Length*((int)$value->Width/1000)*((int)$value->Height/1000);												/// считаем объем теекущей доски
                    

                ///=========///// ---       ОПРЕДЕЛЯЕМ К КАКОЙ СМЕНЕ ОТНОСТИСЯ ДОСКА         --- /////=========/// 
                    $ValUnix                 = strtotime($value->Time);
                    $startDayVal             = mktime(0, 0, 0, date("m", $ValUnix), date("d", $ValUnix), date("y", $ValUnix));
                        if($startDayVal+57599>$ValUnix)
                        {
                            $value->Smena =2;
                        }
                        else
                        {
                            $value->Smena =1;   
                        }
                //////////////////////////////////////////////////////////////////////////////////////////////////////

	                            
                  if(isset($Req['chart'])){                                                                                                                      /// проверяем условие наличие графиков в выборе фильтра
                       if(in_array(1,$Req['chart']))                                                                                                             /// проверем был ли выбран график производительности
                       {
                            foreach ($smenaArr as $k => $val) {                                                                                                /// Переор масива смен с подсчетом количества досок в каждой смене
                                    if((int)strtotime($value->Time)>=(int)$val['startSmena'] && (int)strtotime($value->Time)<(int)$val['endSmena'])
                                    {
                                        (int)$smenaArr[$k]['col']++;
                                    }
                            }
	                       $graphBlok=1;                                                                                                                   	/// Маркер условия вывода графика кол штук по сменам
	                   }      
	                } 

                    perebor($value,$vol,$arrStandatrBoard);
                    
                 
                    if(isset($value->Smena)){
                    if ($value->Sort!=99 && $value->Smena!=$smena) {
                        $sortVolume=$sortVolume+$vol;
                    }
                    else
                    {
                        if( $value->Smena!=$smena ){
                            $toPaletka=$toPaletka+$vol;
                       }
                    }
                    if((int)$value->Smena!=$smena){
                        $inpVolume=$inpVolume+$vol;
                    
                        if ((int)$value->Sort==1 ) {
                            $Sort1=$Sort1+1;
                        }
                        if ((int)$value->Sort==2 ) {
                            $Sort2=$Sort2+1;
                        }
                        if ((int)$value->Sort==3 ) {
                            $Sort3=$Sort3+1;
                        }
                        if ((int)$value->Sort==4 ) {
                            $Sort4=$Sort4+1;
                        }
                    }
                    }
                }
////////////////// ======= 				КОНЕЦ 			=======  	//////////////////////////////////////////////////////////////////////////////////////







                foreach ($arrStandatrBoard as $key => $value1) {
                	if($value1['count']==0){
                	unset($arrStandatrBoard[$key]);
                	}
                	else{
                		$arrStandatrBoard[$key]['volume'] = round($value1['volume'],3);

                	}
                }
                $sortVolume     = round($sortVolume,2);
                $outputVolume   = round($outputVolume,2);
                $inpVolume      = round($inpVolume,2);
                $chipsVolume    = round($inpVolume-$sortVolume,2);
                $toPaletka      = round($toPaletka,2);
                
                $retArr=[
                	"outputVolume"=>$outputVolume,
                	"inpVolume"=>$inpVolume,
                	"chipsVolume"=>$chipsVolume,
                	"sortVolume"=>$sortVolume,
                    "toPaletka"=>$toPaletka,
                    "sort1"=>$Sort1,
                    "sort2"=>$Sort2,
                    "sort3"=>$Sort3,
                    "sort4"=>$Sort4,
                    "sortOtb"=>$SortOtb,
                	"startTime"=>$start_day,
                	"endTime"=>$timestamp,
                	'arrSmena'=>$smenaArr,
                    "dayArr"=>$dayArr,
                    "req"=>$Req,
                    'graph'=>$graphBlok,     
                    'arrStandart'=>$arrStandatrBoard,  
                    'req'=>$databoard,
            ];
    	return response()->json($retArr);
    }
}
