
<template>
	<div class="container-fluid pl-0">



																<div class="container">																		<!-- Modal -->
															<div class="modal fade" id="myModal" >
															  <div class="modal-dialog" role="document">
															    <div class="modal-content">

															      <div id="bodyModal" class="modal-body" style="color: black; text-align: center;">

															       	 <h4>Ожидайте загрузку данных</h4>
																	    <div class="progress-container mt-2 mb-1">
																		<div class="progress">
																			<div class="progress-bar">
																				<div class="progress-shadow"></div>
																			</div>
																		</div>
																	</div>


															      </div>
															    </div><!-- /.модальное окно-Содержание -->  
															  </div><!-- /.модальное окно-диалог -->  
															</div><!-- /.модальное окно -->  
																</div>




		<div class="row">
			<div class="title-query mb-3">Период анализа: с {{val.startTime}} по {{val.endTime}}; Смены: {{val.smena}};</div>
		</div>

		<div class="row" style="margin-bottom:70px; page-break-after: always;">
			<div class="col-xl-7 col-lg-12 d-print-block">
				<div class="table-responsive">
					<table class="table table-dark" id="tSort">
						<!-- <thead>
						<tr>
							<th scope="col" class="text-center">Входной объем, м³</th>
							<th scope="col" class="text-center">Отсортированный объем, м³</th>
							<th scope="col" class="text-center">Выгруженный <br> объем на политер, м³</th>
							<th scope="col" class="text-center">Выгруженный <br> объем на полетку, м³</th>
							<th scope="col" class="text-center">Остаток в карманах, м³</th>
							<th scope="col" class="text-center">Объем щепы, м³</th>
						</tr>
						</thead> -->
						<tbody>
						<tr>
							 <td class="text-left">
								Входной объем, м³
							</td>
							<td class="text-center">
								<div style="width:400px; height:auto;" class="text-right">
								<span>{{val.inpVolume}}</span>
								<svg style="fill: white;width: 10px;height: 10px;">
  								<rect x="-2" y="-2" width="10" height="10"/>
								</svg>
								</div>
								
							</td>
						</tr>
						<tr>
							<td class="text-left">
								Отсортированный объем, м³
							</td>
							<td class="text-center">
								<div style="width:400px; height:auto;" class="text-right">
								{{val.sortVolume}}
								<svg style="fill:#B54C76 ;width: 10px;height: 10px;">
  								<rect x="-2" y="-2" width="10" height="10"/>
								</svg>
							</div>

							</td>
						</tr>
						<tr>
							 <td class="text-left">
								Выгруженный объем на политер, м³
							</td>
							<td class="text-center">
								<div style="width:400px; height:auto;" class="text-right">
								{{val.outputVolume}}
								<svg style="fill: #FF7D75;width: 10px;height: 10px;">
  								<rect x="-2" y="-2" width="10" height="10"/>
								</svg>
							</div>
							</td>
						</tr>
						<tr>
							<td class="text-left">
							   Выгруженный объем на полетку, м³
							</td>
							<td class="text-center">
								<div style="width:400px; height:auto;" class="text-right">
								{{val.toPaletka}}
								<svg style="fill: #B9E4F6;width: 10px;height: 10px;">
  								<rect x="-2" y="-2" width="10" height="10"/>
								</svg>
							</div>
							</td>
						</tr>
						<tr>
							<td class="text-left">
							   Остаток в карманах, м³
							</td>
							<td class="text-center">
								<div style="width:400px; height:auto;" class="text-right">
								{{val.inKarman}}
								<svg style="fill: #8B699A;width: 10px;height: 10px;">
  								<rect x="-2" y="-2" width="10" height="10"/>
								</svg>
							</div>
							</td>
						</tr>
						<tr>
							 <td class="text-left">
							   Объем щепы, м³
							</td>
							<td class="text-center">
								<div style="width:400px; height:auto;" class="text-right">
								{{val.chipsVolume}}
								<svg style="fill: #B9DE9C;width: 10px;height: 10px;">
  								<rect x="-2" y="-2" width="10" height="10"/>
								</svg>
							</div>
							</td>
						</tr>
						<tr><td></td><td></td></tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-xl-5 col-lg-12 d-flex  justify-content-center justify-content-xl-end volumeChart">
				<div class="chart" style="padding-right: 30px;">
				   <highcharts :options="volume" ref="highcharts"></highcharts>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-xl-7 col-lg-12">
				<div class="table-responsive tableSort" style="height: 400px; overflow-y: scroll;">
					<table class="table table-dark">
						<thead>
						<tr>
							<th scope="col" class="text-center">ШхВхТ, м</th>
							<th scope="col" class="text-center">Сорт</th>
							<th scope="col" class="text-center">Отсортированных досок, шт</th>
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
								{{i.volume_out}}
							</td>
							<td class="text-center">
								{{i.volume}}
							</td>
						</tr>
						
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-xl-5 col-lg-12 d-flex justify-content-center justify-content-xl-end sortChart">
				<div class="chart" style="margin-top: 41px; padding-right: 30px;">
					  <highcharts :options="board" ref="highcharts"></highcharts>
				</div>
			</div>
		</div>
<div  id="smeny">
	   <highcharts :options="smena" ref="highcharts"></highcharts>
</div>

	


<div class="row text-nowrap d-none d-print-inline-flex" style="padding-top: 41px;">
    <div class="col-6"><span><br />__________________________________________<br /></span></div>
    <div class="col-3"><span><br />________________________<br /></span></div>
    <div class="col-3"><span class="d-xl-flex align-items-xl-end" style="border-top: initial;"><br />________________________<br /></span></div>
    <div class="col-6"><span class="d-xl-flex align-items-xl-end" style="border-top: initial;">ФИО, должность</span></div>
    <div class="col-3"><span>Дата</span></div>
    <div class="col-3"><span>Подпись</span></div>
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







			 window.volumeD = {
	chart: {
		type: 'pie',
		 backgroundColor:'transparent',
		 spacingBottom: 50,
		 spacingTop: 10,
		 // height: 300,
		
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
	  text: 0+' м³'
	},
	plotOptions: {
		pie: {
		   center: ['50%', '50%'],
		   borderWidth: 0,
		   cursor: 'pointer',
		   dataLabels:{
		   	// padding: 5,
		   	// crop: false,
        // overflow: "none",
		   connectorWidth:0,
		   style: {

                    textOutline: false 
                }
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
		y:0,
		color: '#B9DE9C',
		dataLabels:{
			format:'Щепа <br> <span> '+ 0+' % </span>',
					},
		},
		{
		name:'Полезный обьем',
		y:0,
		color: '#B54C76',
		dataLabels:{
			format:  'Полезный <br> обьем <br> <span>'+0+' % </span>',
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
		y:0,

		color: 'transparent'},
		{
		name:'На палетку',
		y:0,

		color: '#B9E4F6'},
		{
		name:'В кармане',
		y:0,
		color: '#8B699A'},
		{
		name:'На политере',
		y:0,
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
	  text: 0+' м³'
	},
	plotOptions: {
		pie: {
		   center: ['50%', '50%'],
		   borderWidth: 0,
		   cursor: 'pointer',
			dataLabels:{
		   connectorWidth:0,
		   style: {
                    textOutline: false 
                }
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
		y:0,
		color: '#FF7D75',
		dataLabels:{
			format:'1 сорт <br> <span style="color:#FF7D75;"> '+ 0+' % </span>',
					},
		},
		{
		name:'2 сорт',
		y:0,
		color: '#8B699A',
		dataLabels:{
			format:'2 сорт <br> <span style="color:#8B699A;">'+0+' % </span>',
					},
		},
		{
		name:'3 сорт',
		y:0,
		color: '#B9E4F6',
		dataLabels:{
			format:'3 сорт <br> <span style="color:#B9E4F6;">'+0+' % </span>',
					},
		},
		{
		name:'4 сорт',
		y:0,
		color: '#B54C76',
		dataLabels:{
			format:'4 сорт <br> <span style="color:#B54C76;">'+0+' % </span>',
					},
		},
		{
		name:'Отборный сорт',
		y:0,
		color: '#B9DE9C',
		dataLabels:{
			padding:0,
			verticalAlign:'middle',
			align:'center',
			format:'Отборный сорт <br> <span style="color:#B9DE9C;">'+0+' % </span>',
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
			// '21.06.19',
			// '22.06.19',
			// '23.06.19',
			// '24.06.19',
			// '25.06.19',
			// '26.06.19',
			
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
		},
		series: {
            dataLabels: {
                enabled: true,
                style: {
                    textOutline: false,
                    color: '#fff',
			fontFamily: 'Montserrat',
			fontStyle: 'normal', 
                }
            }
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

axios.interceptors.request.use((config) => {
		 function Ooops(){
		var html='<p>Что то пошло не так! </p><p>Перезагрузите страницу</p><div><input type="button" onclick="javascript:location.reload();" value="Перезагрузить"></div>';
		$('#bodyModal').html(html);
	}
	$('#myModal').modal('show');
	window.timeout=setTimeout(Ooops, 40000);
  return config;
});
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
						'smens':'',
						'volume_out':0,
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
					
					volumeD.series[0].data[0].dataLabels.format="Щепа <br> <span>" + Math.round((vueG.val.chipsVolume/vueG.val.inpVolume)*100,2) + " % </span>";
					volumeD.series[0].data[1].y=vueG.val.sortVolume;
					volumeD.series[0].data[1].dataLabels.format="Полезный <br> обьем <br> <span>" + Math.round((vueG.val.sortVolume/vueG.val.inpVolume)*100,2) + " % </span>";

					volumeD.series[1].data[0].y=vueG.val.chipsVolume;
					volumeD.series[1].data[1].y=vueG.val.toPaletka;
					volumeD.series[1].data[2].y=vueG.val.inKarman;
					volumeD.series[1].data[3].y=vueG.val.sortInKarman;
					
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
					clearTimeout(timeout);
					$('#myModal').modal('hide');
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

<style type="text/css">
	@media print {

		*{ 
		    float: none !important; 
		  }
		.title-content,.title-query{
			color:black;
			text-align: center !important;
		}
		td,th{
			color:black;
		}

		tspan{
			fill:black;
		}

		.tableSort{
			/*page-break-before: always !important;*/
			/*max-width: 100%;*/
			height: 100% !important;
			overflow-y: visible !important;
		}

		div.content {
			width:100% !important;
		}

		
		.volumeChart {
			padding-top: 10%;
			/*page-break-after: always !important;*/
		}

		.justify-content-end{
			justify-content: center !important;
			margin-left: auto !important;
    		margin-right: auto !important;
		}
	

}

</style>
<!-- анимация загрузки -->
<style type="text/css">
	
.progress-container {
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
}

.progress {
	background-color: rgb(229,233,235);
	height: 0.25em;
	position: relative;
	width: 23em;
}
.progress-bar {
	background-size: 23em 0.25em;
	height: 100%;
	position: relative;
	background-image: linear-gradient(to right, rgb(76,217,100), rgb(90,200,250), rgb(0,122,255), rgb(52,170,220), rgb(88,86,214), rgb(255,45,85));
		background-image: -o-linear-gradient(to right, rgb(76,217,100), rgb(90,200,250), rgb(0,122,255), rgb(52,170,220), rgb(88,86,214), rgb(255,45,85));
		background-image: -ms-linear-gradient(to right, rgb(76,217,100), rgb(90,200,250), rgb(0,122,255), rgb(52,170,220), rgb(88,86,214), rgb(255,45,85));
		background-image: -webkit-linear-gradient(to right, rgb(76,217,100), rgb(90,200,250), rgb(0,122,255), rgb(52,170,220), rgb(88,86,214), rgb(255,45,85));
		background-image: -moz-linear-gradient(to right, rgb(76,217,100), rgb(90,200,250), rgb(0,122,255), rgb(52,170,220), rgb(88,86,214), rgb(255,45,85));
	animation: cssload-width 7.95s cubic-bezier(0.45, 0, 1, 1) infinite;
		-o-animation: cssload-width 7.95s cubic-bezier(0.45, 0, 1, 1) infinite;
		-ms-animation: cssload-width 7.95s cubic-bezier(0.45, 0, 1, 1) infinite;
		-webkit-animation: cssload-width 7.95s cubic-bezier(0.45, 0, 1, 1) infinite;
		-moz-animation: cssload-width 7.95s cubic-bezier(0.45, 0, 1, 1) infinite;
}
.progress-shadow {
	height: 4em;
	position: absolute;
	top: 100%;
	width: 100%;
	transform: skew(45deg);
		-o-transform: skew(45deg);
		-ms-transform: skew(45deg);
		-webkit-transform: skew(45deg);
		-moz-transform: skew(45deg);
	transform-origin: 0 0;
		-o-transform-origin: 0 0;
		-ms-transform-origin: 0 0;
		-webkit-transform-origin: 0 0;
		-moz-transform-origin: 0 0;
	background-image: linear-gradient(to bottom, rgb(234,236,238), transparent);
		background-image: -o-linear-gradient(to bottom, rgb(234,236,238), transparent);
		background-image: -ms-linear-gradient(to bottom, rgb(234,236,238), transparent);
		background-image: -webkit-linear-gradient(to bottom, rgb(234,236,238), transparent);
		background-image: -moz-linear-gradient(to bottom, rgb(234,236,238), transparent);
}



@keyframes cssload-width {
	0%, 100% {
		transition-timing-function: cubic-bezier(1, 0, 0.65, 0.85);
	}
	0% {
		width: 0;
	}
	100% {
		width: 100%;
	}
}

@-o-keyframes cssload-width {
	0%, 100% {
		-o-transition-timing-function: cubic-bezier(1, 0, 0.65, 0.85);
	}
	0% {
		width: 0;
	}
	100% {
		width: 100%;
	}
}

@-ms-keyframes cssload-width {
	0%, 100% {
		-ms-transition-timing-function: cubic-bezier(1, 0, 0.65, 0.85);
	}
	0% {
		width: 0;
	}
	100% {
		width: 100%;
	}
}

@-webkit-keyframes cssload-width {
	0%, 100% {
		-webkit-transition-timing-function: cubic-bezier(1, 0, 0.65, 0.85);
	}
	0% {
		width: 0;
	}
	100% {
		width: 100%;
	}
}

@-moz-keyframes cssload-width {
	0%, 100% {
		-moz-transition-timing-function: cubic-bezier(1, 0, 0.65, 0.85);
	}
	0% {
		width: 0;
	}
	100% {
		width: 100%;
	}
}

</style>




<!-- scrollbar -->
<style>
/* width */
::-webkit-scrollbar {
  width: 3px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #383a47; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #ff5e0c; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #ff5e0c; 
}


</style>
