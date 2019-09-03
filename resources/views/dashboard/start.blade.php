@extends('layouts.dashboard')

@section('title-content', "Текущая доска")

@section('sidebar')
    <div class="row sidebar-container">
        <div class="col-12 p-0">
            <h4 class="title-type-4 mb-3">Текущая доска</h4>
        </div>
        <div class="list-options col-12 p-0">
            <current-board-table-component :routes="{{ json_encode($routes) }}"></current-board-table-component>
        </div>
    </div>

    <div class="row sidebar-container">
        <div class="col-12 p-0">
            <planning-component :routes="{{ json_encode($routes) }}"></planning-component>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 pl-0">

            <tab-picture-content-component :pictures="{{ json_encode($pictures) }}"></tab-picture-content-component>

            <h4 class="title-type-4 mb-3">Последняя проверка</h4>
            <data-boards-table-component :routes="{{ json_encode($routes) }}"></data-boards-table-component>

        </div>
    </div>
@endsection
