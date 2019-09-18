@extends('layouts.dashboard')

@section('title-content', "Рецепты")

@section('sidebar')
    <div class="row sidebar-container">
        <div class="list-options col-12 p-0">
            <ul class="menu">
                <li class="menu-item home">
                    <a href="{{ route('start') }}">Печать</a>
                </li>
                <li class="menu-item recipes">
                    <a href="{{ route('dashboard.recipes') }}">Сохранить PDF</a>
                </li>
                <li class="menu-item admin">
                    <a href="{{ route('dashboard.administration') }}">Экспорт рецептов</a>
                </li>
                <li class="menu-item stat">
                    <a href="{{ route('dashboard.statistics') }}">Импорт рецептов</a>
                </li>
                <li class="menu-item diagnostics">
                    <a href="{{ route('dashboard.diagnostics') }}">Добавить рецепт</a>
                </li>
                <li class="menu-item network">
                    <a href="{{ route('dashboard.neural_network') }}">Удалить рецепт</a>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 pl-0">

            <tab-recipes-tab-table-component
                    :recipes="{{ json_encode($recipes) }}"
                    :routes="{{ json_encode($routes) }}"
            ></tab-recipes-tab-table-component>

        </div>
    </div>
@endsection
