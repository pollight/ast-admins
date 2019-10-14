<template>

  <div>
    <div id="indicator-current-process" class="indicator-current-process">
        <div class="Planning">
            <div class="left">
                <span class="name">Планирование</span>
                <span class="count">{{ status }}%</span>
            </div>
            <div class="right">
                <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="3" height="12" fill="#FF5E0C"/>
                    <rect x="6" width="3" height="12" fill="#FF5E0C"/>
                </svg>

            </div>
        </div>
        <div class="progress-bar-planning mb-5">
            <span class="line" :style="{ width: status + '%' }"></span>
        </div>

    </div>




<!-- Модальное окно -->  

  <div class="container">   
<div class="modal fade" id="myModalAlert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="color: black;" id="myModalLabel">Нейросеть не запущена</h4>
      </div>
      <div class="modal-body" style="color: black;">
       Критическая проблема!!! <br> Выполните перезагрузку нейросети.
        <!-- Bootstrap 4 -->


    

      </div>
      <div class="modal-footer">
        <button id="btnhelp" onclick="dontShow()" class="btn btn-danger float-left" title="До перезагрузки страницы сообщение не будет отображено">Yе показывать</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="button" onclick="restartNeiron()" title="После перезагрузки дождитесь закртия данного окна" id="btnreset" class="btn btn-primary">Перезагрузить</button>
      </div>
    </div>
  </div>
</div>
</div>


</div>
</template>

<script>
  window.noShow= false;
window.help = function(){
    $('#btnhelp').tooltip();

}
window.dontShow = function(){
    window.noShow=true;

}
    export default {
        data: function () {

            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                status: 1,
            }
        },
        props: [
            'routes'
        ],
        mounted() {
            this.refresh();
            let vue = this;
            setInterval(function () {
                vue.refresh();
            }, 3003);
        },
        methods: {
            refresh: function () {

                let vue = this;
                axios.post(vue.routes['get_status_planning']).then(function (response) {
                    vue.status = response.data.status;
                     vue.machine = response.data.machine;
                    if(vue.machine.status_connect==false && window.noShow==false){  // /status_connect
                       $('#myModalAlert').modal('show');
                       $('#btnhelp').tooltip();
                       $('#btnreset').tooltip();
                    }else{
                        $('#myModalAlert').modal('hide');
                    }
                });
            }
        }
    }
</script>