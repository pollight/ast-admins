@extends('layouts.dashboard')

@section('title-content', "Рецепты")

@section('sidebar')
    <div class="row sidebar-container">
        <recipes-sidebar-nav-component
                :routes="{{ json_encode($routes) }}"
        ></recipes-sidebar-nav-component>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 pl-0">

            <recipes-tab-table-component
                    :routes="{{ json_encode($routes) }}"
            ></recipes-tab-table-component>

        </div>
    </div>
@endsection
