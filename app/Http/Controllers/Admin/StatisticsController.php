<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\Otchet;

use PHPMailer\PHPMailer;
use PHPExcel; 
use PHPExcel_IOFactory;
use PHPExcel_Writer_Excel5;
use PHPExcel_Style_Color;
use PHPExcel_Style_NumberFormat;
use PHPExcel_Style_Border;
use PHPExcel_Style_Alignment;    
use PHPExcel_Shared_Date;
use PHPExcel_Worksheet_MemoryDrawing;

class StatisticsController extends Controller
{
    protected function index()
    {
        // shell_exec('mutt -s "Subject" roman_29@inbox.ru < "asdasdasd"');
    	
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
        $H 						= [16,19,22,25,32,40,44,50,60];																									/// сандартный ряд толщины досок по ГОСТ
        $W 						= [50,75,100,125,150,175,200,225,250];																								/// стандартный ряд ширины досок по ГОСТ
        $L 						= [3,3.5,4,4.5,5,5.5,6];																										/// длинны досок которые может померить линия


        for ($key =0 ; $key<=8 ; $key++) {
        	for ($k =0 ; $k<=8;$k++) {
        		for ($e=0; $e<=6; $e++) {
        			for($i=0;$i<=4;$i++){
        				array_push($arrStandatrBoard,
        			 		array("height_l"=>$H[$key], 
        			 		"width_l"=>$W[$k],
        			 		"length_l"=>$L[$e],																							/// Создаем массив стандартного ряда досок по ГОСТ
        					"volume"=>0,                                                                                               /// Создаем массив стандартного ряда досок по ГОСТ
                            "volume_out"=>0, "count"=>0,"sort"=>$i));
        			}
        		}
        	}
        }





////////////////// ======= 			РАЗБОР ДАННЫХ ИЗ ЗАПРОСА 			=======  	/////////////////////////////////////////////////////////////////////////

    	$timestamp 				= date('Y-m-d H:i:s',$_time);
		$start_day 				= date('Y-m-d H:i:s',mktime(0, 0, 0, date("m", $_time), date("d", $_time), date("y", $_time))-(86400*2));
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








   /////////////// ======= 			ДАННЫЕ ИЗ БД	 		=======		//////////////////////////////////////////////////////////////////////////////////////sum('sum');

    	$databoard 				= \DB::table('data_boards')
                				->whereBetween('Time',[$start_day,$timestampEndDay] )																				/// Получаем данные из БД по доскам
                				->get();
        $politer 				= \DB::table('statistic_politers')
                				->whereBetween('Time',[$start_day,$timestampEndDay] )																				/// Получаем данные из БД по политеру
                				->get();

////////////////// ======= 				КОНЕЦ			=======  	//////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







////////////////// ======= 			МАССИВ СМЕН 			=======  	//////////////////////////////////////////////////////////////////////////////////////

        $startUnix				= strtotime($start_day);
        $startDay0				= mktime(0, 0, 0, date("m", $startUnix), date("d", $startUnix), date("y", $startUnix));
        $startSm                = $startDay0 + 10800;  
        $promezhutok 			= $endUnix-$startDay0;
        $valDayInPromezhutok	= ceil($promezhutok/86400);
        $endSmena  				= $startDay0+59400;


        if($endSmena>=$startUnix){                                                                                                                          		/// определяем с какой смены начали запрос
        	array_push($smenaArr,array('startSmena'=>$startSm,'endSmena'=>$endSmena,"col"=>0,"smena"=>1));
        	array_push($smenaArr,array('startSmena'=>$endSmena,'endSmena'=>$startDay0+86400+10800,"col"=>0,"smena"=>2));
            array_push($dayArr,['date'=>date('Y-m-d',$startDay0),'col'=>0,'smena'=>1,'smena'=>2]);
        }
        else
        {
        	array_push($smenaArr,array('startSmena'=>$endSmena,'endSmena'=>$startDay0+86400+10800,"col"=>0,"smena"=>2));
            array_push($dayArr,[date('Y-m-d',$endSmena),'col'=>0,'smena'=>1,'smena'=>2]);	
        }

        for ($i=1; $i <$valDayInPromezhutok ; $i++) {                                                                                                     			/// создаем массив смен 
        	$nextDay			= $startDay0 + (86400 * $i);
        	if(($nextDay+59400)<$endUnix)
            {
            	array_push($smenaArr,array('startSmena'=>$nextDay+10800,'endSmena'=>$nextDay+59400 ,"col"=>0,"smena"=>1));
            	array_push($smenaArr,array('startSmena'=>$nextDay+59400,'endSmena'=>$nextDay+86399+10800,"col"=>0,"smena"=>2));
                array_push($dayArr,[date('Y-m-d'),$nextDay,'col'=>0,'smena'=>1,'smena'=>2]);
            }
            else
            {
            	array_push($smenaArr,array('startSmena'=>$nextDay+10800,'endSmena'=>$nextDay+59400,"col"=>0,"smena"=>1));
                array_push($dayArr,[date('Y-m-d',$nextDay),'col'=>0,'smena'=>1,'smena'=>2]);
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
                        $code=2;
                    }
                    if(in_array(1,$Req['smena'])==false && in_array(2,$Req['smena']))
                    {
                        $code=1;
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
            	
  
                                if(isset($value->Smena)){                                                                                                              /// подсчет данных для таблицы по сортам
                                    if(($value->Sort!=99 && $value->Sort==$arrStandatrBoard[$value->Priznak]['sort']) && $value->Smena!=$code)
                                    {
                                        $arrStandatrBoard[$value->Priznak]['count'] = $arrStandatrBoard[$value->Priznak]['count']+1;
                                        $arrStandatrBoard[$value->Priznak]['volume'] = $arrStandatrBoard[$value->Priznak]['volume'] + $vol;
                                    }
                                }
                            
	           		
			} 



////////////////// ======= 			РАЗБИРАЕМ ДАННЫЕ ПОЛУЧЕННЫЕ ИЗ БАЗЫ 			=======  	/////////////////////////////////////////////////////////
                $smena=getCode();
                foreach ($databoard as $key => $value) { 																											///  разбираем данные полученые из базы по условию

                	$vol 		             = (int)$value->Length*((int)$value->Width/1000)*((int)$value->Height/1000);												/// считаем объем теекущей доски
                    

            
                  if(isset($Req['chart'])){                                                                                                                      /// проверяем условие наличие графиков в выборе фильтра
                       if(in_array(1,$Req['chart']))                                                                                                             /// проверем был ли выбран график производительности
                       {
                            foreach ($smenaArr as $k => $val) {                                                                                                /// Переор масива смен с подсчетом количества досок в каждой смене
                                    if((int)strtotime($value->Time)>=(int)$val['startSmena'] && (int)strtotime($value->Time)<(int)$val['endSmena'] && $value->Smena!=$smena && $value->Sort!=99)
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

                foreach ($politer as $key => $value) {
                $volO 		             = (((int)$value->Length/10)*((int)$value->Width/1000)*((int)$value->Height/1000))*$value->ColBoard;	
                if($value->Priznak){
                $arrStandatrBoard[$value->Priznak]['volume_out'] = $arrStandatrBoard[$value->Priznak]['volume_out'] + $vol0;								
                }
                $outputVolume			 = 	$outputVolume+ $volO;
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
                $inKarman 		= round($sortVolume - $outputVolume,3);		
                $sortVolume     = round($sortVolume,3);
                $outputVolume   = round($outputVolume,3);
                $inpVolume      = round($inpVolume,3);
                $chipsVolume    = round($inpVolume*1.2-$inpVolume,3);
                $toPaletka      = round($toPaletka,3);
                if($smena==1){
                    $smn="2";
                }
                 if($smena==2){
                    $smn="1";
                }
                 if($smena==3){
                    $smn="1,2";
                }
                $retArr=[
                	"outputVolume"=>$outputVolume,
                	"inpVolume"=>round($inpVolume*1.2,3),
                	"chipsVolume"=>$chipsVolume,
                	"sortVolume"=>$inpVolume,
                    "sortInKarman"=>$sortVolume,
                    "toPaletka"=>$toPaletka,
                    "inKarman" =>$inKarman,
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
                    'smena'=> $smn,
            ];
            
    	return response()->json($retArr);
    }
    protected function sendOtchet()
    {


     function Send($subject = null, $from = null, $fromName = null, $sender = null, $senderName = null, $msgFrom = null, $msgFromName = null, $replyTo = null, $replyToName = null, array $to = array(), array $msgTo = array(), array $msgCC = array(), array $msgBcc = array(), array $lists = array(), array $segments = array(), $mergeSourceFilename = null, $dataSource = null, $channel = null, $bodyHtml = null, $bodyText = null, $charset = null, $charsetBodyHtml = null, $charsetBodyText = null, $encodingType = \ElasticEmailEnums\EncodingType::None, $template = null, array $attachmentFiles = array(), array $headers = array(), $postBack = null, array $merge = array(), $timeOffSetMinutes = null, $poolName = null, $isTransactional = false, array $attachments = array(), $trackOpens = null, $trackClicks = null, $utmSource = null, $utmMedium = null, $utmCampaign = null, $utmContent = null, $bodyAmp = null, $charsetBodyAmp = null) {
        $arr = array(
                    'subject' => $subject,
                    'from' => $from,
                    'fromName' => $fromName,
                    'sender' => $sender,
                    'senderName' => $senderName,
                    'msgFrom' => $msgFrom,
                    'msgFromName' => $msgFromName,
                    'replyTo' => $replyTo,
                    'replyToName' => $replyToName,
                    'to' => (count($to) === 0) ? null : join(';', $to),
                    'msgTo' => (count($msgTo) === 0) ? null : join(';', $msgTo),
                    'msgCC' => (count($msgCC) === 0) ? null : join(';', $msgCC),
                    'msgBcc' => (count($msgBcc) === 0) ? null : join(';', $msgBcc),
                    'lists' => (count($lists) === 0) ? null : join(';', $lists),
                    'segments' => (count($segments) === 0) ? null : join(';', $segments),
                    'mergeSourceFilename' => $mergeSourceFilename,
                    'dataSource' => $dataSource,
                    'channel' => $channel,
                    'bodyHtml' => $bodyHtml,
                    'bodyText' => $bodyText,
                    'charset' => $charset,
                    'charsetBodyHtml' => $charsetBodyHtml,
                    'charsetBodyText' => $charsetBodyText,
                    'encodingType' => $encodingType,
                    'template' => $template,
                    'postBack' => $postBack,
                    'timeOffSetMinutes' => $timeOffSetMinutes,
                    'poolName' => $poolName,
                    'isTransactional' => $isTransactional,
                    'attachments' => (count($attachments) === 0) ? null : join(';', $attachments),
                    'trackOpens' => $trackOpens,
                    'trackClicks' => $trackClicks,
                    'utmSource' => $utmSource,
                    'utmMedium' => $utmMedium,
                    'utmCampaign' => $utmCampaign,
                    'utmContent' => $utmContent,
                    'bodyAmp' => $bodyAmp,
                    'charsetBodyAmp' => $charsetBodyAmp);
        foreach(array_keys($headers) as $key) {
            $arr['headers_'.$key] = $key.': '.$headers[$key]; 
        }
        foreach(array_keys($merge) as $key) {
            $arr['merge_'.$key] = $merge[$key]; 
        }

        return sendRequest('', $arr, "POST", $attachmentFiles);
    }

    function sendRequest(string $url, array $data = [], string $method = 'POST', array $attachments = [])
        {
            $method = strtoupper($method);
            $options = [];
            $data['apikey'] = 'd87dba9d-8e1a-4d04-8444-0e933226e419';


      $url.= '?'.http_build_query($data, null, '&');
   
                  


            $url = 'https://api.elasticemail.com/v2/email/send'.$url;
        $ch = curl_init();

                 curl_setopt($ch, CURLOPT_URL, $url);

// Указываем CURL, что будем отправлять POST запрос     https://api.elasticemail.com/v2/file/load?apikey=94DAF66E-4DF6-4E8E-AF96-D094A8D21DF3&filename=filename.txt
curl_setopt($ch, CURLOPT_POST, 1);

// Указываем CURL, что будем отправлять POST запрос
curl_setopt($ch, CURLOPT_POST, 1);

// Передаем массив с полями формы, где field1, field2 - имена тегов, а value1, value2 - значения тегов
curl_setopt($ch, CURLOPT_POSTFIELDS, array('field1'=>'value1', 'field2'=>'value2', 'file'=>'@/path/to/file'));
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
 curl_close($ch);
dd($url);
            return 'yes';
        }
$body = '<h2 style="color:red;">Это текст письма для отправки отчетов!!!!</h2>  <p>Перейдите по ссылке для получения отчета   - http://185.6.26.128/getReport</p>';
Send('Статистика за сутки линии RZC', 'chitsalex@gmail.com', "Статистика за сутки", 'laravel', 'RZC', 'chitsalex@gmail.com', 'RZC', 'valenchits@gmail.com', 'valenchits@gmail.com', ['valenchits@rambler.ru'],array(),array(),array(),array(),array(),array(),null,null,$body);

    }


    protected function creatOtchet()
    {
        //////////////////////////////////////////////////////////////////////////////////////
    $arrStandatrBoard        = [];
    $H                       = [16,19,22,25,32,40,44,50,60,70];                                                                                                  /// сандартный ряд толщины досок по ГОСТ
    $W                       = [75,100,125,150,175,200,225,250,500];                                                                                             /// стандартный ряд ширины досок по ГОСТ
    $L                       = [3,3.5,4,4.5,5,5.5,6,6.5,7];                                                                                                      /// длинны досок которые может померить линия



        for ($key =0 ; $key<=8 ; $key++) {
            for ($k =0 ; $k<=8;$k++) {
                for ($e=0; $e<=6; $e++) {
                    for($i=0;$i<=4;$i++){
                        array_push($arrStandatrBoard,
                            array("height_l"=>$H[$key], 
                            "width_l"=>$W[$k],
                            "length_l"=>$L[$e],                                                                                         /// Создаем массив стандартного ряда досок по ГОСТ
                            "volume"=>0,                                                                                               /// Создаем массив стандартного ряда досок по ГОСТ
                            "volume_out"=>0, "count"=>0,"sort"=>$i));
                    }
                }
            }
        }


        $timestamp              = date('Y-m-d H:i:s',$_GET['t']);
        $start_day              = date('Y-m-d H:i:s',mktime(6, 0, 0, date("m", $_GET['t']), date("d", $_GET['t'])-1, date("y", $_GET['t'])));
        $end_day                =date('Y-m-d H:i:s',mktime(2, 0, 0, date("m", $_GET['t']), date("d", $_GET['t']), date("y", $_GET['t'])));
$databoard              = \DB::table('data_boards')
                                ->whereBetween('Time',[$start_day,$timestamp] )                                                                               /// Получаем данные из БД по доскам
                                ->get();

$politer                = \DB::table('statistic_politers')
                                ->whereBetween('Time',[$start_day,$timestamp] )                                                                               /// Получаем данные из БД по политеру
                                ->get();




$sdvObschTable=10;
$sdvOTx=1;

 $sdvig=49;




// Создаем объект класса PHPExcel
$xls = new PHPExcel();
$xls->createSheet();
// Устанавливаем индекс активного листа
$xls->setActiveSheetIndex(0);
    $objWorksheet = $xls->getActiveSheet();

/////////////===========================        ПЕРВАЯ СТРАНИЦА        ===========================/////////////

    $objWorksheet->setCellValue('A2', 'Отчет по продукции линии RZC за период');
    $objWorksheet->mergeCells('A2:D2');
$xls->getActiveSheet()->setCellValue('E2', PHPExcel_Shared_Date::PHPToExcel($start_day));
$xls->getActiveSheet()->setCellValue('F2', PHPExcel_Shared_Date::PHPToExcel($end_day));
$xls->getActiveSheet()->getStyle('E2')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DATETIME);
$xls->getActiveSheet()->getStyle('F2')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DATETIME);
    $objWorksheet->setCellValue('B'.($sdvObschTable-1), 'Таблица 1 - Сводная таблица по линии');
    $objWorksheet->mergeCells('B'.($sdvObschTable-1).':E'.($sdvObschTable-1));
    $objWorksheet->setCellValue('B'.($sdvig-1), 'Таблица 2 - Данные по стандартному ряду досок');
    $objWorksheet->mergeCells('B'.($sdvig-1).':G'.($sdvig-1));









     $objWorksheet->setCellValueByColumnAndRow(0,$sdvig, "№");
    $objWorksheet->setCellValueByColumnAndRow(1,$sdvig, "Длинна");
    $objWorksheet->setCellValueByColumnAndRow(2,$sdvig, "Толщина");
    $objWorksheet->setCellValueByColumnAndRow(3,$sdvig, "Ширина");
    $objWorksheet->setCellValueByColumnAndRow(4,$sdvig, "Объем");
    $objWorksheet->setCellValueByColumnAndRow(5,$sdvig, "Кол-во");
    $objWorksheet->setCellValueByColumnAndRow(6,$sdvig, "Сорт");
    $xls->getActiveSheet()->getStyle("A$sdvig:K$sdvig")->getFont()->setBold(true);


$styleArray1 = array('borders' => array('outline' => array('style' => PHPExcel_Style_Border::BORDER_THIN,'color' => array('argb' => '#00000000'))));
$styleArray = array('borders' => array('outline' => array('style' => PHPExcel_Style_Border::BORDER_DOUBLE,'color' => array('argb' => '#00000000'))));


    $xls->getActiveSheet()->getStyle("A1:Z1000")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);



$sumVal=0;
$sumValPoletka=0;
$sumValSort=0;
$Sort1=0;
$Sort2=0;
$Sort3=0;
$Sort4=0;
$outputVolume  = 0;
$arrBukva=['A','B','C','D','E','F','G','H','I'];
foreach ($databoard as $key => $value) {
    $r =$key+$sdvig+1;

    $vol  = (int)$value->Length*((int)$value->Width/1000)*((int)$value->Height/1000);

    $arrStandatrBoard[$value->Priznak]['count'] = $arrStandatrBoard[$value->Priznak]['count']+1;
    $arrStandatrBoard[$value->Priznak]['volume'] = $arrStandatrBoard[$value->Priznak]['volume'] + $vol;
    $arrStandatrBoard[$value->Priznak]['vol'] = $vol;
    if($value->Sort!=99){
        $sumValSort+=$vol;
    }
    else
    {
         $sumValPoletka+=$vol;
    }

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
    $sumVal+=$vol;
 $xls->getActiveSheet()->getStyle("A$r:I$r")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
}



  foreach ($politer as $key => $value) {
                $volO                    = ((int)$value->Length/10)*((int)$value->Width/1000)*((int)$value->Height/1000);                                               /// считаем объем теекущей доски
                $outputVolume            =  $outputVolume+ $volO;
                }
   foreach ($arrStandatrBoard as $key => $value1) {
                    if($value1['count']==0){
                    unset($arrStandatrBoard[$key]);
                    }
                    else{
                        $arrStandatrBoard[$key]['volume'] = round($value1['volume'],3);

                    }
                }

                $c=0;
foreach ($arrStandatrBoard as $key => $value) {
        $fer ="A".($c+$sdvig+1);
    $last ="G".($c+$sdvig+1);
        $objWorksheet->setCellValueByColumnAndRow(0,$c+$sdvig+1, $c+1);
    $objWorksheet->setCellValueByColumnAndRow(1,$c+$sdvig+1, $value['length_l']);
    $objWorksheet->setCellValueByColumnAndRow(2,$c+$sdvig+1, $value['height_l']);
    $objWorksheet->setCellValueByColumnAndRow(3,$c+$sdvig+1, $value['width_l']);
    $objWorksheet->setCellValueByColumnAndRow(4,$c+$sdvig+1, round($value['volume'],4));
    $objWorksheet->setCellValueByColumnAndRow(5,$c+$sdvig+1, $value['count']);
    $objWorksheet->setCellValueByColumnAndRow(6,$c+$sdvig+1, $value['sort']);

    $objWorksheet->getStyle("$fer:$last")->applyFromArray($styleArray1);
    $c++;
}




$T1B11=$arrBukva[$sdvOTx].(string)$sdvObschTable;
$T1B12=$arrBukva[$sdvOTx+4].(string)($sdvObschTable+2);
$objWorksheet->setCellValueByColumnAndRow($sdvOTx,$sdvObschTable,  "Кол-во");
$objWorksheet->setCellValueByColumnAndRow($sdvOTx+1,$sdvObschTable,  "Oбъем");
$objWorksheet->setCellValueByColumnAndRow($sdvOTx+2,$sdvObschTable,  "Сортированно");
$objWorksheet->setCellValueByColumnAndRow($sdvOTx+3,$sdvObschTable,  "На палетку");
$objWorksheet->setCellValueByColumnAndRow($sdvOTx+4,$sdvObschTable, 'Выгружно');

$objWorksheet->setCellValueByColumnAndRow($sdvOTx,$sdvObschTable+1,  "шт");
$objWorksheet->setCellValueByColumnAndRow($sdvOTx+1,$sdvObschTable+1,  "м3");
$objWorksheet->setCellValueByColumnAndRow($sdvOTx+2,$sdvObschTable+1,  "м3");
$objWorksheet->setCellValueByColumnAndRow($sdvOTx+3,$sdvObschTable+1,  "м3");
$objWorksheet->setCellValueByColumnAndRow($sdvOTx+4,$sdvObschTable+1, 'м3');

 $xls->getActiveSheet()->getStyle("$arrBukva[$sdvOTx]$sdvObschTable:F2")->getFont()->setBold(true);

$objWorksheet->setCellValueByColumnAndRow($sdvOTx,$sdvObschTable+2,  $key+1);
$objWorksheet->setCellValueByColumnAndRow($sdvOTx+1,$sdvObschTable+2,   round($sumVal,2));
$objWorksheet->setCellValueByColumnAndRow($sdvOTx+2,$sdvObschTable+2,   round($sumValSort,2));
$objWorksheet->setCellValueByColumnAndRow($sdvOTx+3,$sdvObschTable+2,   round($sumValPoletka,2));
$objWorksheet->setCellValueByColumnAndRow($sdvOTx+4,$sdvObschTable+2,  round($outputVolume,2));

$objWorksheet->getStyle("$T1B11:F$sdvObschTable")->applyFromArray($styleArray1);
$objWorksheet->getStyle($arrBukva[$sdvOTx].(string)($sdvObschTable+1).":".$arrBukva[$sdvOTx+4].(string)($sdvObschTable+1))->applyFromArray($styleArray1);
   $objWorksheet->getStyle("$fer:$last")->applyFromArray($styleArray1);
$objWorksheet->getStyle("$T1B11:$T1B12")->applyFromArray($styleArray);   
//$objWorksheet->getStyle("$arrBukva[$sdvOTx]$sdvObschTable:A3")->applyFromArray($styleArray1);


$cell_name='G'.($c+$sdvig);
$nRam='A'.($sdvig);


 $objWorksheet->getStyle("$nRam:A".($sdvig+$c))->applyFromArray($styleArray1);
 $objWorksheet->getStyle("B1".$sdvig.":B".($sdvig+$c))->applyFromArray($styleArray1);
$objWorksheet->getStyle("C".$sdvig.":C".($sdvig+$c))->applyFromArray($styleArray1);
$objWorksheet->getStyle("D".$sdvig.":D".($sdvig+$c))->applyFromArray($styleArray1);
$objWorksheet->getStyle("E".$sdvig.":E".($sdvig+$c))->applyFromArray($styleArray1);
$objWorksheet->getStyle("F".$sdvig.":F".($sdvig+$c))->applyFromArray($styleArray1);
$objWorksheet->getStyle("GMT".$sdvig.":G".($sdvig+$c))->applyFromArray($styleArray1);
    $objWorksheet->getStyle("$nRam:$cell_name")->applyFromArray($styleArray);



$objWorksheet->getHeaderFooter()->setOddHeader('&B&D дата формирования отчета');
$objWorksheet->getHeaderFooter()->setOddFooter('&L' . "ФИО/Подпись __________________________________" . '&RPage &P of &N');


foreach(range('A','Z') as $columnID) {
    $xls->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
}




// Выводим HTTP-заголовки
 header ( "Expires: Mon, 1 Apr 1974 05:00:00 GMT" );
 header ( "Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT" );
 header ( "Cache-Control: no-cache, must-revalidate" );
 header ( "Pragma: no-cache" );
 header ( "Content-type: application/vnd.ms-excel" );
 header ( "Content-Disposition: attachment; filename=RZC".$start_day.".xls" );

// Выводим содержимое файла
 $objWriter = new PHPExcel_Writer_Excel5($xls);
    $objWriter->save('php://output');


    }

}
