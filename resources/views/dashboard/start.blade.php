@extends('layouts.dashboard')

@section('title-content', "Текущая доска")

@section('sidebar')
    <div class="row sidebar-container">
        <div class="col-12 p-0">
            <h4 class="title-type-4 mb-3">Текущая доска</h4>
        </div>
        <div class="list-options col-12 p-0">
            <table>
                <tbody>
                <tr>
                    <td class="coll-first">Номер</td>
                    <td class="coll-second">30002</td>
                </tr>
                <tr>
                    <td class="coll-first">Рецепт</td>
                    <td class="coll-second">Для себя</td>
                </tr>
                <tr>
                    <td class="coll-first">Сорт</td>
                    <td class="coll-second">1 сорт</td>
                </tr>
                <tr>
                    <td class="coll-first">Размер</td>
                    <td class="coll-second">6×0,2×0,1 м</td>
                </tr>
                <tr>
                    <td class="coll-first">Пороки</td>
                    <td class="coll-second">0 шт.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row sidebar-container">
        <div class="col-12 p-0">
            <div id="indicator-current-process" class="indicator-current-process">
                <div class="Planning">
                    <div class="left">
                        <span class="name">Планирование</span>
                        <span class="count">45%</span>
                    </div>
                    <div class="right">
                        <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="3" height="12" fill="#FF5E0C"/>
                            <rect x="6" width="3" height="12" fill="#FF5E0C"/>
                        </svg>

                    </div>
                </div>
                <div class="progress-bar-planning mb-5">
                    <span class="line">

                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 pl-0">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <spam class="nav-link active">Original</spam>
                </li>
                <li class="nav-item">
                    <spam class="nav-link">X-ray</spam>
                </li>
                <li class="nav-item">
                    <spam class="nav-link">Gray</spam>
                </li>
            </ul>

            <div class="tab-content">
                <div class="picture item-1 mb-2"
                     style="background-image: url({{ \Storage::disk('public')->url('pictures/original/1/1.jpg') }})"
                ></div>

                <div class="picture item-2"
                     style="background-image: url({{ \Storage::disk('public')->url('pictures/original/2/2.jpg') }})"
                ></div>
            </div>

            <h4 class="title-type-4 mb-3">Последняя проверка</h4>
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Время снимка</th>
                            <th scope="col">Ш×В×Т, м</th>
                            <th scope="col" class="text-right text-nowrap">Объем, м3</th>
                            <th scope="col" class="text-center">Тип древесины</th>
                            <th scope="col" class="text-right">Сорт</th>
                            <th scope="col" class="text-right">Сучки</th>
                            <th scope="col" class="text-right">Трещины</th>
                            <th scope="col" class="text-right">Свилеватость</th>
                            <th scope="col" class="text-right">Прорость</th>
                            <th scope="col" class="text-right">Забольнь</th>
                            <th scope="col" class="text-right">Плесень</th>
                            <th scope="col" class="text-right">Гниль</th>
                            <th scope="col" class="text-right">Синева</th>
                            <th scope="col" class="text-right">Обзол</th>
                            <th scope="col" class="text-right">Механические повреждения</th>
                            <th scope="col" class="text-right">Пятна</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                20220222
                            </td>
                            <td>
                                14:36:12
                            </td>
                            <td>
                                6×0,2×0,1
                            </td>
                            <td class="text-right">
                                0,5
                            </td>
                            <td class="text-center">
                                сосна
                            </td>
                            <td class="text-right">
                                Первый
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right">
                                0
                            </td>
                        </tr>
                        <tr>
                            <td>
                                20220222
                            </td>
                            <td>
                                14:36:12
                            </td>
                            <td>
                                6×0,2×0,1
                            </td>
                            <td class="text-right">
                                0,5
                            </td>
                            <td class="text-center">
                                сосна
                            </td>
                            <td class="text-right">
                                Первый
                            </td>
                            <td class="text-right status-1">
                                1
                            </td>
                            <td class="text-right status-2">
                                1
                            </td>
                            <td class="text-right status-3">
                                1
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right status-4">
                                1
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right status-5">
                                1
                            </td>
                            <td class="text-right status-6">
                                1
                            </td>
                            <td class="text-right status-7">
                                1
                            </td>
                            <td class="text-right">
                                0
                            </td>
                            <td class="text-right">
                                0
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
