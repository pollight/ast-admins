<template>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item" ><a class="nav-link active" role="tab" data-toggle="tab" href="#tab1-x1">
                <span class="nav-link"
                >Список рецептов</span></a>
            </li>
            <li class="nav-item"  id="redactRecept"><a class="nav-link disabled" onclick="upd()" role="tab" data-toggle="tab" href="#tab1-x2">
                <span class="nav-link"
                >Изменение рецепта</span></a>
            </li>
        </ul>
<div class="tab-content" id="BigTabs">
        <div class="tab-pane active"  role="tabpanel" id="tab1-x1">
            <div class="table-responsive">
                <table  id="Table"  class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Имя рецепта</th>
                        <th scope="col">Используемый ГОСТ</th>
                        <th scope="col">Автор</th>
                        <th scope="col">Дата добавления</th>
                        <th scope="col">Установлен</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr  v-for="(i, index) in recipes"
                        @click="onActiveRow(i.id,i.Name)"
                        v-bind:class="{ active: currentID == i.id }"
                        :data-id="i.id"
                    >
                        <td>{{ ++index }}</td>
                        <td data-id="obj">{{ i.Name }}</td>
                        <td>{{ i.Gost }}</td>
                        <td>{{ i.user_name }}</td>
                        <td>{{ i.Time }}</td>
                        <td>{{i.select}}</td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                    </tbody>
                </table>
            </div>
        </div>

 <div class="tab-pane"  role="tabpanel" id="tab1-x2">
    <div>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">1 Сучки<br>сросшиеся <br>здоровые</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">2 Сучки частично<br>сросшиеся&nbsp;<br>и несросшиеся</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">3 Сучки&nbsp;<br>загнившие<br>гнилые<br></a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4">4 Трещины <br>пластевые и<br>кромочные</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-5">5 Трещены&nbsp;<br>пластевые<br>сквозные</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-6">6 Прорость</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-7">7 Заболонь</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-8">8 Плесень</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-9">9 Гниль</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-10">10 Синева</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-11">11 Обзол</a></li>
            <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-12">12 Мех <br>повреждения</a></li>
        </ul>
        <div class="tab-content" id="allTabs">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <div class="col">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="healthyKnotsEnable"><label class="form-check-label" for="healthyKnotsEnable">Разрешить</label></div>
                </div>
                <div class="row">
                    <div class="col text-center"><span>Отборный</span></div>
                    <div class="col text-center"><span>1 сорт</span></div>
                    <div class="col text-center"><span>2 сорт</span></div>
                    <div class="col text-center"><span>3 сорт</span></div>
                    <div class="col text-center"><span>4 сорт</span></div>
                </div>
                <p><br>Допускаются размером в долях ширины стороны и в количестве на любом однометровом участке длины&nbsp;на каждой из сторон, не более:<br><br>Пластевые и ребровые<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnStrataSize0s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnStrataAmount0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnStrataSize1s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnStrataAmount1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnStrataSize2s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnStrataAmount2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnStrataSize3s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnStrataAmount3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnStrataSize4s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnStrataAmount4s"></div>
                        </div>
                    </div>
                </div>
                <p><br>Кромочные, на материалах толщиной до 40 мм<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeTo40Size0s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeTo40Amount0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeTo40Size1s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeTo40Amount1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeTo40Size2s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeTo40Amount2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeTo40Size3s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeTo40Amount3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeTo40Size4s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeTo40Amount4s"></div>
                        </div>
                    </div>
                </div>
                <p><br>Кромочные, на материалах толщиной 40 мм и более<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeFrom40Size0s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeFrom40Amount0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeFrom40Size1s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeFrom40Amount1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeFrom40Size2s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeFrom40Amount2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeFrom40Size3s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeFrom40Amount3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeFrom40Size4s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeFrom40Amount4s"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-2">
                <div class="col">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="partHealthyKnotsEnable"><label class="form-check-label" for="partHealthyKnotsEnable">Разрешить</label></div>
                </div>
                <div class="row">
                    <div class="col text-center"><span>Отборный</span></div>
                    <div class="col text-center"><span>1 сорт</span></div>
                    <div class="col text-center"><span>2 сорт</span></div>
                    <div class="col text-center"><span>3 сорт</span></div>
                    <div class="col text-center"><span>4 сорт</span></div>
                </div>
                <p><br>Допускаются в общем числе сросшихся сучков размером в долях ширины стороны и в количестве на любом однометровом участке длины на каждой из сторон, не более:<br><br>Пластевые и ребровые<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnStrataSize0s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnStrataAmount0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnStrataSize1s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnStrataAmount1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnStrataSize2s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnStrataAmount2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnStrataSize3s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnStrataAmount3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnStrataSize4s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnStrataAmount4s"></div>
                        </div>
                    </div>
                </div>
                <p><br>Кромочные, на материалах толщиной до 40 мм<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeTo40Size0s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeTo40Amount0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeTo40Size1s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeTo40Amount1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="healthyKnotsOnEdgeTo40Size2s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeTo40Amount2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeTo40Size3s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeTo40Amount3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeTo40Size4s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeTo40Amount4s"></div>
                        </div>
                    </div>
                </div>
                <p><br>Кромочные, на материалах толщиной 40 мм и более<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeFrom40Size0s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeFrom40Amount0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeFrom40Size1s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeFrom40Amount1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeFrom40Size2s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeFrom40Amount2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeFrom40Size3s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeFrom40Amount3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeFrom40Size4s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="partHealthyKnotsOnEdgeFrom40Amount4s"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-3">
                <div class="col">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="badKnotsEnable"><label class="form-check-label" for="badKnotsEnable">Разрешить</label></div>
                </div>
                <div class="row">
                    <div class="col text-center"><span>Отборный</span></div>
                    <div class="col text-center"><span>1 сорт</span></div>
                    <div class="col text-center"><span>2 сорт</span></div>
                    <div class="col text-center"><span>3 сорт</span></div>
                    <div class="col text-center"><span>4 сорт</span></div>
                </div>
                <p><br>Допускаются в общем числе сучков размером в долях ширины стороны и в количестве на любом однометровом участке длины на каждой из сторон, не более:<br><br>Загнившие гнилые и табачные<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="badKnotsSize0s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="badKnotsAmount0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="badKnotsSize1s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="badKnotsAmount1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="badKnotsSize2s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="badKnotsAmount2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="badKnotsSize3s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="badKnotsAmount3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="badKnotsSize4s"></div>
                            <div class="col-6"><span>Количество</span></div>
                            <div class="col-6"><input type="number" id="badKnotsAmount4s"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-10">
                <p><br>Нет такого в базе</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-9">
                <div class="col">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="rotEnable"><label class="form-check-label" for="rotEnable">Разрешить</label></div>
                </div>
                <div class="row">
                    <div class="col text-center"><span>Отборный</span></div>
                    <div class="col text-center"><span>1 сорт</span></div>
                    <div class="col text-center"><span>2 сорт</span></div>
                    <div class="col text-center"><span>3 сорт</span></div>
                    <div class="col text-center"><span>4 сорт</span></div>
                </div>
                <p><br>Допускаются общей площадью, %, от площади пиломатериала, не более:<br><br>Поверхностная</p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="rotSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="rotSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="rotSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="rotSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="rotSize4s"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-12">
                <div class="col">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="mechanicalDamageEnable"><label class="form-check-label" for="mechanicalDamageEnable">Разрешить</label></div>
                </div>
                <div class="row">
                    <div class="col text-center"><span>Отборный</span></div>
                    <div class="col text-center"><span>1 сорт</span></div>
                    <div class="col text-center"><span>2 сорт</span></div>
                    <div class="col text-center"><span>3 сорт</span></div>
                    <div class="col text-center"><span>4 сорт</span></div>
                </div>
                <p><br>Допускаются общей площадью, %, от площади пиломатериала, не более:<br><br>Инородные тела</p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="mechanicalDamageSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="mechanicalDamageSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="mechanicalDamageSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="mechanicalDamageSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="mechanicalDamageSize4s"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-8">
                <div class="col">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="moldEnable"><label class="form-check-label" for="moldEnable">Разрешить</label></div>
                </div>
                <div class="row">
                    <div class="col text-center"><span>Отборный</span></div>
                    <div class="col text-center"><span>1 сорт</span></div>
                    <div class="col text-center"><span>2 сорт</span></div>
                    <div class="col text-center"><span>3 сорт</span></div>
                    <div class="col text-center"><span>4 сорт</span></div>
                </div>
                <p><br>Допускаются общей площадью, %, от площади пиломатериала, не более:<br><br>Поверхностная и глубокая<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="moldSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="moldSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="moldSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="moldSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="moldSize4s"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-7">
                <div class="col">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="sapwoodEnable"><label class="form-check-label" for="sapwoodEnable">Разрешить</label></div>
                </div>
                <div class="row">
                    <div class="col text-center"><span>Отборный</span></div>
                    <div class="col text-center"><span>1 сорт</span></div>
                    <div class="col text-center"><span>2 сорт</span></div>
                    <div class="col text-center"><span>3 сорт</span></div>
                    <div class="col text-center"><span>4 сорт</span></div>
                </div>
                <p><br>Допускаются общей площадью, %, от площади пиломатериала, не более:<br><br>Поверхностная и глубокая<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sapwoodSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sapwoodSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sapwoodSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sapwoodSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sapwoodSize4s"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-6">
                <div class="col">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="sweepEnable"><label class="form-check-label" for="sweepEnable">Разрешить</label></div>
                </div>
                <div class="row">
                    <div class="col text-center"><span>Отборный</span></div>
                    <div class="col text-center"><span>1 сорт</span></div>
                    <div class="col text-center"><span>2 сорт</span></div>
                    <div class="col text-center"><span>3 сорт</span></div>
                    <div class="col text-center"><span>4 сорт</span></div>
                </div>
                <p><br>Допускается односторонняя широной в долях соответствующей стороны пиломатериала и длиной в долях длины пиломатериала, не более:<br><br>Ширина<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sweepWidthSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sweepWidthSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sweepWidthSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sweepWidthSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sweepWidthSize4s"></div>
                        </div>
                    </div>
                </div>
                <p><br>Длина</p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sweepLengthSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sweepLengthSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sweepLengthSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sweepLengthSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="sweepLengthSize4s"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-4">
                <div class="col">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="strataEdgeOutOneEdgeCrackEnable"><label class="form-check-label" for="strataEdgeOutOneEdgeCrackEnable">Разрешить</label></div>
                </div>
                <div class="row">
                    <div class="col text-center"><span>Отборный</span></div>
                    <div class="col text-center"><span>1 сорт</span></div>
                    <div class="col text-center"><span>2 сорт</span></div>
                    <div class="col text-center"><span>3 сорт</span></div>
                    <div class="col text-center"><span>4 сорт</span></div>
                </div>
                <p><br>Допускаются длиной в долях длины пиломатериала, не более:<br><br>Неглубокие<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="strataEdgeOutOneEdgeNonDeepCrackSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="strataEdgeOutOneEdgeNonDeepCrackSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="strataEdgeOutOneEdgeNonDeepCrackSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="strataEdgeOutOneEdgeNonDeepCrackSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="strataEdgeOutOneEdgeNonDeepCrackSize4s"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-5">
                <div class="col">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="strataEdgeThrouthCrackEnable"><label class="form-check-label" for="strataEdgeThrouthCrackEnable">Разрешить</label></div>
                </div>
                <div class="row">
                    <div class="col text-center"><span>Отборный</span></div>
                    <div class="col text-center"><span>1 сорт</span></div>
                    <div class="col text-center"><span>2 сорт</span></div>
                    <div class="col text-center"><span>3 сорт</span></div>
                    <div class="col text-center"><span>4 сорт</span></div>
                </div>
                <p><br>Допускаются длиной, мм, не более:<br><br>Неглубокие<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="strataEdgeThrouthCrackSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="strataEdgeThrouthCrackSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="strataEdgeThrouthCrackSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="strataEdgeThrouthCrackSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="strataEdgeThrouthCrackSize4s"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-11">
                <div class="col">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="barkEnable"><label class="form-check-label" for="barkEnable">Разрешить</label></div>
                </div>
                <div class="row">
                    <div class="col text-center"><span>Отборный</span></div>
                    <div class="col text-center"><span>1 сорт</span></div>
                    <div class="col text-center"><span>2 сорт</span></div>
                    <div class="col text-center"><span>3 сорт</span></div>
                    <div class="col text-center"><span>4 сорт</span></div>
                </div>
                <p><br>В пиломатериалах толщиной до 40 мм:<br><br>Допускается шириной на пласти от каждой кромки, мм<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40FromEdgeSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40FromEdgeSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40FromEdgeSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40FromEdgeSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40FromEdgeSize4s"></div>
                        </div>
                    </div>
                </div>
                <p><br>Допускается шириной на кромке, мм:<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40OnEdgeSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40OnEdgeSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40OnEdgeSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40OnEdgeSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40OnEdgeSize4s"></div>
                        </div>
                    </div>
                </div>
                <p><br>Допускается протяженностью на кромке, %, от длины<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40ExtLengthSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40ExtLengthSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40ExtLengthSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40ExtLengthSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkTo40ExtLengthSize4s"></div>
                        </div>
                    </div>
                </div>
                <p><br><br>В пиломатериалах толщиной 40 мм и более:<br><br><br>Допускается шириной на пласти от каждой кромки, мм<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40FromEdgeSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40FromEdgeSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40FromEdgeSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40FromEdgeSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40FromEdgeSize4s"></div>
                        </div>
                    </div>
                </div>
                <p><br>Допускается шириной на кромке, мм:<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40OnEdgeSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40OnEdgeSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40OnEdgeSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40OnEdgeSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40OnEdgeSize4s"></div>
                        </div>
                    </div>
                </div>
                <p><br>Допускается протяженностью на кромке, %, от длины<br></p>
                <div class="row">
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40ExtLengthSize0s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40ExtLengthSize1s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40ExtLengthSize2s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40ExtLengthSize3s"></div>
                        </div>
                    </div>
                    <div class="col" style="border: 3px inset grey;">
                        <div class="row">
                            <div class="col-6"><span>Размер</span></div>
                            <div class="col-6"><input type="number" id="barkFrom40ExtLengthSize4s"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><button class="btn btn-primary" @click="udateRec()" type="button" id="collect">одтвердить</button>
 </div>






</div>
    </div>
</template>

<script>

    export default {
        data: function () {

            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                recipes: [],
                currentID: 0,
            }
        },
        props: [
            'routes',
        ],
        mounted() {
            this.refresh();
            let vue = this;
            setInterval(function() {
                vue.refresh();
            }, 1000);
        },
        methods: {
            refresh: function () {

                let vue = this;
                axios.get(vue.routes['get_recipes_list']).then(function (response) {
                    vue.recipes = response.data;
                    vue.recipes.forEach(function(a,b){if(a.selected){a.select="Испoльуется";}else{a.select="";}});
                });
            },
            onActiveRow: function (id,name) {
                this.currentID = id;
                window.nameR=name;
                this.$emit('currentID', this.currentID);
               $(".nav li a.disabled").removeClass("disabled");
               $("span.noclick").removeClass("noclick");
            },
            getRec: function () {

                axios.post('/redactRecept',{'Name':nameR}).then(function (response) {
                    window.obj1 = response.data;
                    for (let [key, value] of Object.entries(obj1)) {
                    console.log(`${key}: ${value}:${typeof(value)}`);

                    if(typeof(value)=='boolean' && key!='selected'){
                        if(value!=null){
                            $("#"+key).attr("checked",value);
                        }
                    }else{
                        if(value!=null){
                            $("#"+key).attr("value",value);
                        }else{$("#"+key).attr("value",0);}
                    }
                    }
                });
            },
            udateRec: function () {
                  var allData=new Array();
    $('#allTabs').find('input').each(function(key,val){
        // console.log(key,'  ',$(this).val(),' ',$(this).attr("id")) selected
        
        var id=$(this).attr("id");
        var data=$(this).val();
        if (id.includes('Enable')) {
            data=$(this).prop('checked')
        };
                       
        allData.push({id:id,val:data})
});
                axios.post('/updateRecepts',{"data":allData,'name':nameR}).then(function (response) {
                    obj = response.data;
                    for (let [key, value] of Object.entries(obj)) {
                    console.log(`${key}: ${value}`);
                     $("#"+key).attr("value",value);
                    }
                });
            },
        }
    }



    window.upd = function(){
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
           $.ajax({
              type:'POST',
              url:'/redactRecept',
              data:{'Name':nameR},
              success:function(data){
                  window.obj1 = JSON.parse(data);
                    for (let [key, value] of Object.entries(obj1)) {
                    console.log(`${key}: ${value}:${typeof(value)}`);

                    if(typeof(value)=='boolean' && key!='selected'){
                        if(value!=null){
                            $("#"+key).attr("checked",value);
                        }
                    }else{
                       // $("#"+key).val(0);
                        if(value!=null){
                            $("#"+key).val(value);
                        }else{$("#"+key).val(0);}
                    }
                    }
              }
           });
        }
</script>

<style scoped>
    .table tr::before {
        display: none;
    }
    tr.active{
         border-left: 5px solid #d65617;
    /*border-color: #d65617;*/
}
</style>