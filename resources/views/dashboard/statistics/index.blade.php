@extends('layouts.dashboard')

@section('title-content', "Статистика")

@section('sidebar')
    <div class="row sidebar-container">
        <statistics-filter-component
                :routes="{{ json_encode($routes) }}"
        ></statistics-filter-component>
    </div>
@endsection

@section('content')
    <statistics-tables-component></statistics-tables-component>
@endsection
