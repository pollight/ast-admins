@extends('layouts.dashboard')

@section('title-content', "Диагностика")

@section('sidebar')
    <div class="row sidebar-container">
        <div class="col-12 p-0">
            <h4 class="title-type-4 mb-3">Место для чего то </h4>
        </div>
        <div class="list-options col-12 p-0">
            <!-- <current-board-table-component :routes="{{ json_encode($routes) }}"></current-board-table-component> -->
        </div>
    </div>

@endsection

@section('content')

@endsection
<script type="text/javascript">
 window.changeFrame=   function ($i)
    {
        var src='';

        if($i==1)
        {
             src = "http://192.168.0.101";
             
        }
        else if($i==2)
        {
             src = "http://192.168.0.102";
        }
        else if($i==3)
        {
             src = "http://192.168.0.103";
        }
        else if($i==4)
        {
             src = "http://192.168.0.104";
        }
        else if($i==5)
        {
             src = "https://192.168.0.105";
        }
        else if($i==6)
        {
             src = "http://192.168.0.106";
        }
        else if($i==7)
        {
             src = "http://192.168.0.107";
        }
        else if($i==8)
        {
             src = "http://192.168.0.108";
        }
        var text = "ссылка на камеру № "+$i;
        $('#frame').attr('src',src);
        $('#targ').attr('href',src);
        $('#targ').html(text);
    }
</script>