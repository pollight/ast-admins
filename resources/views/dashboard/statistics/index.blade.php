@extends('layouts.dashboard')

@section('title-content', "Статистика")

@section('sidebar')

    <div class="row sidebar-container d-print-none">
        <statistics-filter-component
                :routes="{{ json_encode($routes) }}"
        ></statistics-filter-component>

    </div>
@endsection

@section('content')
    <statistics-tables-component></statistics-tables-component>
    <div id="containerH" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
@endsection
