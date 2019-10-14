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
    <div class="row">
        <div class="col-12 pl-0">
              <div class="container-fluid text-center">
      <svg width="1000" height="513" viewBox="0 0 1285 513" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="Group 6">
    <a href="http://192.168.0.102/" target="_blink">
<g id="cam2">
<g id="Group 5">
<path id="Vector" d="M491.633 204.65L468.242 161.208L441.508 161.208L418.117 204.65L491.633 204.65Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
<path id="Vector_2" d="M418.333 161C410.97 161 405 156.19 405 150.257L405 77.7429C405 71.8101 410.97 67 418.333 67L491.667 67C499.03 67 505 71.8101 505 77.7429L505 150.257C505 156.19 499.03 161 491.667 161L418.333 161Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
</g>
<text id="&#208;&#154;&#208;&#176;&#208;&#188;&#208;&#181;&#209;&#128;&#208;&#176; 2" fill="white" xml:space="preserve" style="white-space: pre" font-family="Montserrat" font-size="42" letter-spacing="0em"><tspan x="354" y="40.557">&#x41a;&#x430;&#x43c;&#x435;&#x440;&#x430; 2</tspan></text>
</g>
</a>
<a href="http://192.168.0.103/" target="_blink">
<g id="cam3">
<g id="Group 5_2">
<path id="Vector_3" d="M854.633 204.65L831.242 161.208L804.508 161.208L781.117 204.65L854.633 204.65Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
<path id="Vector_4" d="M781.333 161C773.97 161 768 156.19 768 150.257L768 77.7429C768 71.8101 773.97 67 781.333 67L854.667 67C862.03 67 868 71.8101 868 77.7429L868 150.257C868 156.19 862.03 161 854.667 161L781.333 161Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
</g>
<text id="&#208;&#154;&#208;&#176;&#208;&#188;&#208;&#181;&#209;&#128;&#208;&#176; 3" fill="white" xml:space="preserve" style="white-space: pre" font-family="Montserrat" font-size="42" letter-spacing="0em"><tspan x="717" y="40.557">&#x41a;&#x430;&#x43c;&#x435;&#x440;&#x430; 3</tspan></text>
</g>
</a>
<a href="http://192.168.0.104/" target="_blink">
<g id="cam4">
<g id="Group 5_3">
<path id="Vector_5" d="M1219.63 204.65L1196.24 161.208L1169.51 161.208L1146.12 204.65L1219.63 204.65Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
<path id="Vector_6" d="M1146.33 161C1138.97 161 1133 156.19 1133 150.257L1133 77.7429C1133 71.8101 1138.97 67 1146.33 67L1219.67 67C1227.03 67 1233 71.8101 1233 77.7429L1233 150.257C1233 156.19 1227.03 161 1219.67 161L1146.33 161Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
</g>
<text id="&#208;&#154;&#208;&#176;&#208;&#188;&#208;&#181;&#209;&#128;&#208;&#176; 4" fill="white" xml:space="preserve" style="white-space: pre" font-family="Montserrat" font-size="42" letter-spacing="0em"><tspan x="1080" y="40.557">&#x41a;&#x430;&#x43c;&#x435;&#x440;&#x430; 4</tspan></text>
</g>
</a>
<a href="http://192.168.0.101/" target="_blink">
<g id="cam1">
<g id="Group 5_4">
<path id="Vector_7" d="M132.633 204.65L109.242 161.208L82.5083 161.208L59.1166 204.65L132.633 204.65Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
<path id="Vector_8" d="M59.3333 161C51.97 161 46 156.19 46 150.257L46 77.7429C46 71.8101 51.97 67 59.3333 67L132.667 67C140.03 67 146 71.8101 146 77.7429L146 150.257C146 156.19 140.03 161 132.667 161L59.3333 161Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
</g>
<text id="&#208;&#154;&#208;&#176;&#208;&#188;&#208;&#181;&#209;&#128;&#208;&#176; 1" fill="white" xml:space="preserve" style="white-space: pre" font-family="Montserrat" font-size="42" letter-spacing="0em"><tspan x="0" y="40.557">&#x41a;&#x430;&#x43c;&#x435;&#x440;&#x430; 1</tspan></text>
</g>
</a>
<a href="http://192.168.0.106/" target="_blink">
<g id="cam6">
<g id="Group 5_5">
<path id="Vector_9" d="M491.633 308L468.242 351.442L441.508 351.442L418.117 308L491.633 308Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
<path id="Vector_10" d="M418.333 351.65C410.97 351.65 405 356.46 405 362.393L405 434.907C405 440.84 410.97 445.65 418.333 445.65L491.667 445.65C499.03 445.65 505 440.84 505 434.907L505 362.393C505 356.46 499.03 351.65 491.667 351.65L418.333 351.65Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
</g>
<text id="&#208;&#154;&#208;&#176;&#208;&#188;&#208;&#181;&#209;&#128;&#208;&#176; 6" fill="white" xml:space="preserve" style="white-space: pre" font-family="Montserrat" font-size="42" letter-spacing="0em"><tspan x="354" y="502.557">&#x41a;&#x430;&#x43c;&#x435;&#x440;&#x430; 6</tspan></text>
</g>
</a>
<a href="http://192.168.0.107/" target="_blink">
<g id="cam7">
<g id="Group 5_6">
<path id="Vector_11" d="M854.633 308L831.242 351.442L804.508 351.442L781.117 308L854.633 308Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
<path id="Vector_12" d="M781.333 351.65C773.97 351.65 768 356.46 768 362.393L768 434.907C768 440.84 773.97 445.65 781.333 445.65L854.667 445.65C862.03 445.65 868 440.84 868 434.907L868 362.393C868 356.46 862.03 351.65 854.667 351.65L781.333 351.65Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
</g>
<text id="&#208;&#154;&#208;&#176;&#208;&#188;&#208;&#181;&#209;&#128;&#208;&#176; 7" fill="white" xml:space="preserve" style="white-space: pre" font-family="Montserrat" font-size="42" letter-spacing="0em"><tspan x="717" y="502.207">&#x41a;&#x430;&#x43c;&#x435;&#x440;&#x430; 7</tspan></text>
</g>
</a>
<a href="http://192.168.0.108/" target="_blink">
<g id="cam8">
<g id="Group 5_7">
<path id="Vector_13" d="M1219.63 308L1196.24 351.442L1169.51 351.442L1146.12 308L1219.63 308Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
<path id="Vector_14" d="M1146.33 351.65C1138.97 351.65 1133 356.46 1133 362.393L1133 434.907C1133 440.84 1138.97 445.65 1146.33 445.65L1219.67 445.65C1227.03 445.65 1233 440.84 1233 434.907L1233 362.393C1233 356.46 1227.03 351.65 1219.67 351.65L1146.33 351.65Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
</g>
<text id="&#208;&#154;&#208;&#176;&#208;&#188;&#208;&#181;&#209;&#128;&#208;&#176; 8" fill="white" xml:space="preserve" style="white-space: pre" font-family="Montserrat" font-size="42" letter-spacing="0em"><tspan x="1080" y="502.207">&#x41a;&#x430;&#x43c;&#x435;&#x440;&#x430; 8</tspan></text>
</g>
</a>
<a href="http://192.168.0.105/" target="_blink">
<g id="cam5">
<g id="Group 5_8">
<path id="Vector_15" d="M132.633 308L109.242 351.442L82.5083 351.442L59.1166 308L132.633 308Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
<path id="Vector_16" d="M59.3333 351.65C51.97 351.65 46 356.46 46 362.393L46 434.907C46 440.84 51.97 445.65 59.3333 445.65L132.667 445.65C140.03 445.65 146 440.84 146 434.907L146 362.393C146 356.46 140.03 351.65 132.667 351.65L59.3333 351.65Z" stroke="white" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
</g>
<text id="&#208;&#154;&#208;&#176;&#208;&#188;&#208;&#181;&#209;&#128;&#208;&#176; 5" fill="white" xml:space="preserve" style="white-space: pre" font-family="Montserrat" font-size="42" letter-spacing="0em"><tspan x="0" y="502.207">&#x41a;&#x430;&#x43c;&#x435;&#x440;&#x430; 5</tspan></text>
</g>
</a>
</g>
</svg>


        </div>
    </div>
    </div>
@endsection
