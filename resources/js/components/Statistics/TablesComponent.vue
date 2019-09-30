<template>
    <div class="container-fluid pl-0">
        <div class="row">
            <div class="title-query mb-3">Период анализа: с {{val.startTime}} по {{val.endTime}}; Смены: 1, 2;</div>
        </div>

        <div class="row" style="margin-bottom:70px;">
            <div class="col-7">
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col" class="text-center">Входной объем, м³</th>
                            <th scope="col" class="text-center">Отсортированный объем, м³</th>
                            <th scope="col" class="text-center">Выгруженный <br> объем на политер, м³</th>
                            <th scope="col" class="text-center">Выгруженный <br> объем на полетку, м³</th>
                            <th scope="col" class="text-center">Остаток в карманах, м³</th>
                            <th scope="col" class="text-center">Объем щепы, м³</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center">
                                {{val.inpVolume}}
                            </td>
                            <td class="text-center">
                                {{val.sortVolume}}
                            </td>
                            <td class="text-center">
                                {{val.outputVolume}}
                            </td>
                            <td class="text-center">
                                {{val.toPaletka}}
                            </td>
                            <td class="text-center">
                                {{val.inKarman}}
                            </td>
                            <td class="text-center">
                                {{val.chipsVolume}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <div class="chart" style="margin-top: 41px; padding-right: 30px;">
                   <highcharts :options="volume" ref="highcharts"></highcharts>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-7">
                <div class="table-responsive" style="height: 300px; overflow-y: scroll;">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col" class="text-center">ШхВхТ, м</th>
                            <th scope="col" class="text-center">Сорт</th>
                            <th scope="col" class="text-center">отсортированных досок, шт</th>
                            <th scope="col" class="text-center">Выгружено досок, шт</th>
                            <th scope="col" class="text-center">Объем, м³</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="i in val.arrStandart">
                            <td class="text-center">
                                {{i.height_l}}x{{i.width_l}}x{{i.length_l}}
                            </td>
                            <td class="text-center">
                                {{i.sort}}
                            </td>
                            <td class="text-center">
                                {{i.count}}
                            </td>
                            <td class="text-center">
                                100
                            </td>
                            <td class="text-center">
                                {{i.volume}}
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <div class="chart" style="margin-top: 41px; padding-right: 30px;">
                      <highcharts :options="board" ref="highcharts"></highcharts>
                </div>
            </div>
        </div>
<div  id="smeny">
       <highcharts :options="smena" ref="highcharts"></highcharts>
</div>

    </div>
</template>

<script>
  window.val={
                    endTime:null,
                    startTime:'null',
                    inpVolume:null,
                    outputVolume:null,
                    sortVolume:null,
                    chipsVolume:null,
                    toPoletka:null,
                    inKarman:null

 };






 window.SumArr=function (arr){
    var sum=0;
    for (var j = 0; j <= arr.length-1 ; j++) {
       sum=sum+arr[j]; 
    };
    return sum;
};


window.arrOutCircle=[400,1140];
window.arrInCircle=[arrOutCircle[0],100,40,1000];
window.procPol=Math.round(arrOutCircle[1]/(SumArr(arrOutCircle))*1000)*100/1000;
window.procSh=Math.round(arrOutCircle[0]/(SumArr(arrOutCircle))*1000)*100/1000;
window.commonV=(arrOutCircle[0]+arrOutCircle[1]);

window.arrSortCircle=[500,600,1000,405,32];
window.arrProcSortCircle=[];
for (var i = 0; i <= arrSortCircle.length-1; i++) {
    arrProcSortCircle.push(Math.round(arrSortCircle[i]/(SumArr(arrSortCircle))*1000)*100/1000)
};







             window.volumeD = {
    chart: {
        type: 'pie',
         backgroundColor:'transparent',
    },
    title: {
        style: {
            color: '#fff',
           fontFamily: 'Montserrat',
            fontStyle: 'normal',
            fontWeight: '500',
            fontSize: '54px',
        },
        verticalAlign: 'middle',
      floating: true,
      text: commonV+' м³'
    },
    plotOptions: {
        pie: {
           center: ['50%', '50%'],
           borderWidth: 0,
           cursor: 'pointer',
           dataLabels:{
           connectorWidth:0,
           }
        },
         }
    ,
    tooltip: {
        valueSuffix: 'м³'
    },
    credits: {
        enabled: false,

    },
    series: [{
        
        name: 'Всего',
        data: [{                   
        name: 'Щепа',
        y:arrOutCircle[0],
        color: '#B9DE9C',
        dataLabels:{
            format:'Щепа <br> <span> '+ procSh+' % </span>',
                    },
        },
        {
        name:'Полезный обьем',
        y:arrOutCircle[1],
        color: '#B54C76',
        dataLabels:{
            format:  'Полезный <br> обьем <br> <span>'+procPol+' % </span>',
                    },
        }
        ],
        size: '100%',
        innerSize: '90%',
        dataLabels: {
             style: {
            color: '#fff',
            fontFamily: 'Montserrat',
            fontStyle: 'normal',
            fontWeight: 'bold',
            fontSize: '15px',
                    } ,
            enabled:true,

        }
    }, {
        name: 'Всего',
        data: [
        {
        name:'Щепа',
        y:arrInCircle[0],

        color: 'transparent'},
        {
        name:'На палетку',
        y:arrInCircle[3],

        color: '#B9E4F6'},
        {
        name:'В кармане',
        y:arrInCircle[1],
        color: '#8B699A'},
        {
        name:'Отсортированно',
        y:arrInCircle[2],
        color: '#FF7D75'},
        
        
       
        ],
        size: '88%',
        innerSize: '89%',
        dataLabels: {
            enabled:false
        }
    }]
    
};

window.board = {
   chart: {
        type: 'pie',
         backgroundColor:'transparent',
        
    },
    title: {
        style: {
            color: '#fff',
           fontFamily: 'Montserrat',
            fontStyle: 'normal',
            fontWeight: '500',
            fontSize: '54px',
        },
        verticalAlign: 'middle',
      floating: true,
      text: SumArr(arrSortCircle)+' м³'
    },
    plotOptions: {
        pie: {
           center: ['50%', '50%'],
           borderWidth: 0,
           cursor: 'pointer',
            dataLabels:{
           connectorWidth:0,
           }
        },
         }
    ,
    tooltip: {
        valueSuffix: 'шт'
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Всего',
        data: [{                   
        name: '1 сорт',
        y:arrSortCircle[0],
        color: '#FF7D75',
        dataLabels:{
            format:'1 сорт <br> <span style="color:#FF7D75;"> '+ arrProcSortCircle[0]+' % </span>',
                    },
        },
        {
        name:'2 сорт',
        y:arrSortCircle[1],
        color: '#8B699A',
        dataLabels:{
            format:'2 сорт <br> <span style="color:#8B699A;">'+arrProcSortCircle[1]+' % </span>',
                    },
        },
        {
        name:'3 сорт',
        y:arrSortCircle[2],
        color: '#B9E4F6',
        dataLabels:{
            format:'3 сорт <br> <span style="color:#B9E4F6;">'+arrProcSortCircle[2]+' % </span>',
                    },
        },
        {
        name:'4 сорт',
        y:arrSortCircle[3],
        color: '#B54C76',
        dataLabels:{
            format:'4 сорт <br> <span style="color:#B54C76;">'+arrProcSortCircle[3]+' % </span>',
                    },
        },
        {
        name:'Отборный сорт',
        y:arrSortCircle[4],
        color: '#B9DE9C',
        dataLabels:{
            padding:0,
            verticalAlign:'middle',
            align:'center',
            format:'Отборный сорт <br> <span style="color:#B9DE9C;">'+arrProcSortCircle[4]+' % </span>',
                    },
        },





        ],
        size: '100%',
        innerSize: '90%',
        dataLabels: {
             style: {
            color: '#fff',
            fontFamily: 'Montserrat',
            fontStyle: 'normal',
            fontWeight: 'bold',
            fontSize: '15px',
                    } ,
            enabled:true
        }
    }]
};

window.smena={
   chart: {
        type: 'column',
        backgroundColor:'transparent',
    },
    title: {
        text: 'График производительности',
        align:'left',
        margin:15,
        style:{
        fontFamily: 'Montserrat',
        fontStyle: 'normal',
        fontWeight: '500',
        fontSize: '20px',
        color: '#FFFFFF',
        },


    },
    credits: {
        enabled: false
    },
    legend:{
         symbolRadius: 0,
        verticalAlign:'top',
        itemStyle: {
            color: '#fff',
            fontFamily: 'Montserrat',
            fontStyle: 'normal',
            fontWeight: '500',
            fontSize: '14px',
            lineHeight: '20px',
            }

    },
    xAxis: {
        categories: [
            '21.06.19',
            '22.06.19',
            '23.06.19',
            '24.06.19',
            '25.06.19',
            '26.06.19',
            
        ],
        labels: {
            style: {
                fontFamily: 'Montserrat',
                fontStyle: 'normal',
                fontWeight: '500',
                fontSize: '14px',
                color: '#FFFFFF',
        },
          // margin:50,  
          
        },
        
        crosshair: true
    },
    yAxis: {
        labels:{

            enabled:false,},

        gridLineColor:'transparent',
        min: 0,
        title: {
            enabled:false,
        }
    },
    tooltip: {
        headerFormat: '<span style="color:#fff;font-size:14px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="color:#fff;padding:0"><b>{point.y} шт</b></td></tr>',
        footerFormat: '</table>',
        backgroundColor: "#383A47",
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0,
            borderWidth: 0
        }
    },
    series: [{
        
        color: "#7BC2ED",
        name: '1 смена',
        data: []

    }, {

        color: "#59F989",
        name: '2 смена',
        data: []

    }, ]  
};
	
    export default {
        components: {   },
        data: function () {

            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              
                volume: volumeD,
                board: board,
                smena:smena,
                val:
                {
                    endTime:null,
                    startTime:null,
                    inpVolume:null,
                    outputVolume:null,
                    sortVolume:null,
                    chipsVolume:null,
                    toPaletka:null,
                    inKarman:null,
                    sort1:null,
                    sort2:null,
                    sort3:null,
                    sort4:null,
                    sortOtb:null,
                    arrStandart:{
                        'height_l':0,
                        'width_l':0,
                        'length_l':0,
                        "count":0,
                        'volume':0,
                        'sort':0,
                    },
                },
                
            }},
            props: [
                        'routes'
                    ],
         mounted() {
            this.refresh();
            let vue = this;
        },
          methods: {
          refresh: function (startDate=0,endDate=0,sm=[],charts=[]) {
          	var ob={"start":startDate,"end":endDate,"smena":sm,"chart":charts}
                window.vueG = this;
                axios.post('/get_volume_graph',ob).then(function (response) {
                    vueG.val = response.data;
                    volumeD.series[0].data[0].y=vueG.val.chipsVolume;
                    
                    volumeD.series[0].data[0].dataLabels.format="Щепа <br> <span>" + Math.round((vueG.val.chipsVolume/vueG.val.inpVolume)*100,1) + " % </span>";
                    volumeD.series[0].data[1].y=vueG.val.sortVolume;
                    volumeD.series[0].data[1].dataLabels.format="Полезный <br> обьем <br> <span>" + Math.round((vueG.val.sortVolume/vueG.val.inpVolume)*100,1) + " % </span>";

                    volumeD.series[1].data[0].y=vueG.val.chipsVolume;
                    volumeD.series[1].data[1].y=vueG.val.toPaletka;
                    volumeD.series[1].data[2].y=vueG.val.sortVolume-vueG.val.toPaletka;
                    volumeD.series[1].data[3].y=vueG.val.sortVolume;
                    
                    volumeD.title.text= Math.round(vueG.val.inpVolume,2) + "­м³";

                    board.series[0].data[0].y=vueG.val.sort1;
                    if(vueG.val.sort1==0){board.series[0].data[0].dataLabels.format="";}
                    board.series[0].data[1].y=vueG.val.sort2;
                    if(vueG.val.sort2==0){board.series[0].data[1].dataLabels.format="";}
                    board.series[0].data[2].y=vueG.val.sort3;
                    if(vueG.val.sort3==0){board.series[0].data[2].dataLabels.format="";}
                    board.series[0].data[3].y=vueG.val.sort4;
                    if(vueG.val.sort4==0){board.series[0].data[3].dataLabels.format="";}
                    board.series[0].data[4].y=vueG.val.sortOtb;
                    if(vueG.val.sortOtb==0){board.series[0].data[4].dataLabels.format="";}
                    board.title.text= (vueG.val.sort1+vueG.val.sort2+vueG.val.sort3+vueG.val.sort4+vueG.val.sortOtb) + "­шт.";
                    if(vueG.val.graph==1)
                    {
                        smena.series[0].data=[];
                        smena.series[1].data=[];
                        vueG.val.arrSmena.forEach(function(a,b){
                    	   if(a.smena==1){
                    		  smena.series[0].data.push(a.col);	
                    	   }
                    	   if(a.smena==2){
                    		  smena.series[1].data.push(a.col);	
                    	   }
                        });
     
                        smena.xAxis.categories=vueG.val.dayArr;
                        $("#smeny").show();
                    }
                    else
                    {
                        $("#smeny").hide();
                    }

 


                });
            }
          }
          
  }
            

</script>

<style scoped>

</style>