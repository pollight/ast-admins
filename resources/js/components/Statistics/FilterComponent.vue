<template>
    <div class="container-fluid p-0 d-print-none">
        <ul class="menu">
            <li class="menu-item print">
                <a href="#">Печать</a>
            </li>
            <li class="menu-item save">
                <a href="#" v-on:click="toPdf()">Сохранить PDF</a>
            </li>
            <li class="menu-item filter" v-show="filterVisibleButton">
                <a href="#" v-on:click="ShowFilter()">Фильтр</a>
            </li>
        </ul>
<div v-show="filterVisible">
        <form class="filter">

            <div class="form-group">
                <div class="col-left">
                    <span class="butt_filter butt_ok"  v-on:click="restore()"></span>
                </div>
                <div class="col-center d-flex align-items-center">
                    <span class="form-name"  v-on:click="ShowFilter()">Фильтр</span>
                </div>
                
                <div class="col-right">
                    <span class="butt_filter butt_cancel" v-on:click="destroy(); ShowFilter();"></span>
                </div>
            </div>

            <div class="form-group mb12">
                <div class="col-left">
            		c
                </div>
                <div class="col-center-left ">
                	<input id="start" class="text-center"  type="date" style="background-color:#383a47;  font-family: Montserrat; font-style: normal; font-weight: normal; font-size: 12px; line-height: 100%;  color:white; border: 0; left:0;"/> 
                </div>
            </div>
            <div class="form-group mb12">
                  <div class="col-left">
                    по
                </div>
                <div class="col-center-left">
                	<input id="end" type="date" style="background-color:#383a47; font-family: Montserrat; font-style: normal; font-weight: normal; font-size: 12px; line-height: 100%; color:white; border: 0; left:0;"/> 
                </div>
            </div>
            <div class="form-group">
                <div class="col-max">
                    <vue-select  

                            v-model="smenaM"
                            :data="optionsSmenas"
                            placeholder="Смены:"
                            :multiple="true"
                            
                    >
                        <vue-option
                                v-for="i in optionsSmenas"
                                :key="i.value"
                                :value="i.value"
                                :label="i.label"
                        >
                        </vue-option>
                    </vue-select>
                </div>
            </div>
           

            <!--<div class="form-group mb12">-->
            <!---->
            <!--</div>-->

            <div class="form-group">
                <div class="col-max">
                    <vue-select
                            v-model="chart"
                            :data="optionsCharts"
                            placeholder="Добавить графики:"
                            :multiple="true"
                    >
                        <vue-option
                                v-for="i in optionsCharts"
                                :key="i.value"
                                :value="i.value"
                                :label="i.label"
                        >
                        </vue-option>
                    </vue-select>
                </div>
            </div>

            <!--<div class="form-group">-->

            <!--</div>-->

        </form>
         </div>
    </div>

</template>

<script>
function pad(n){return n<10 ? '0'+n : n}
var t = new Date();




window.dayNow=t.getFullYear();
dayNow=dayNow+"-";
dayNow=dayNow+pad(t.getMonth()+1);
dayNow=dayNow+"-";
dayNow=dayNow+pad(t.getDate());





window.dayAgo=t.getFullYear();
dayAgo=dayAgo+"-";
dayAgo=dayAgo+pad(t.getMonth()+1);
dayAgo=dayAgo+"-";
dayAgo=dayAgo+pad(t.getDate()-1);

    import 'vfc/dist/vfc.css'
    import {
        Input,
        Button,
        Checkbox,
        CheckboxGroup,
        Radio,
        Select,
        Option,
        Form,
        FormItem,
        FormBuilder
    } from 'vfc'

    export default {
        components: {
            [Input.name]: Input,
            [Button.name]: Button,
            [Checkbox.name]: Checkbox,
            [CheckboxGroup.name]: CheckboxGroup,
            [Radio.name]: Radio,
            [Select.name]: Select,
            [Option.name]: Option,
            [Form.name]: Form,
            [FormItem.name]: FormItem,
            [FormBuilder.name]: FormBuilder,
        },
        data: function () {

            return {
             csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                optionsSmenas: [
                    {label: '1смена', value: 1},
                    {label: '2смена', value: 2},
                ],
                optionsCharts: [
                    {label: 'Производительность', value: 1},
                    {label: 'XXXXXXXXXX', value: 2},
                    {label: 'XXXXXXXXXXXXX', value: 3}
                ],
                smenaM: [],
                chart: [],
                filterVisible:false,
                filterVisibleButton:true
            }
             
        },

        mounted() {
        	$("#start").attr("value",dayAgo);
        	$("#end").attr("value",dayNow);
        	window.resTime=function(){
			$("#start").attr("value",dayAgo);
        	$("#end").attr("value",dayNow);
}
        },
        methods: {
        reseTime: function(){
        		$("#start").attr("value",dayAgo);
        	$("#end").attr("value",dayNow);
        },
        restore: function (event) {
        	let vue =this;
        if(vue.smenaM.length!=0 || vue.chart.length!=0 || $("#start").val() || $("#end").val()){
        	vueG.refresh($("#start").val(),$("#end").val(),vue.smenaM,vue.chart);
        	}else{
        	alert("Фильтр пуст");
        	}
        },
        destroy: function(event){
        let vue =this;
        if(vue.smenaM.length!=0 || vue.chart.length!=0){
        	if(!confirm('Вы уверены что хотите сбросить фильтр?')) return;
        	vue.smenaM=[];
        	vue.chart=[];
        	console.log(dayAgo);
        	resTime();
        	}else{
        	alert("Фильтр пуст");
        	}
        },
        toPdf: function(event){
        	window.print();
        },
        ShowFilter: function(){
         let vue =this;
        	if(vue.filterVisible){vue.filterVisible=false; vue.filterVisibleButton=true;}else{vue.filterVisible=true; vue.filterVisibleButton=false;}
        },
        }
    }


    
</script>

<style scoped>

</style>