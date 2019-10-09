<template>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <span class="nav-link"
                >Список рецептов</span>
            </li>
            <li class="nav-item">
                <span class="nav-link"
                >Изменение рецепта</span>
            </li>
        </ul>

        <div class="tab-content">
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
    </div><button class="btn btn-primary" type="button" id="collect">Сбор</button>
</div>
</div>
<!--     <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script> -->
<!--     <script src="/assets/js/collectData.js"></script> -->

</template>
<script type="text/javascript">
    window.obj= {!!$recept!!} ;
    if(obj[0]!=0){
for (let [key, value] of Object.entries(obj)) {
  console.log(`${key}: ${value}`);
  $("#"+key).attr("value",value);
}
}

var allData=new Array();
$('#collect').click(function(){
    allData=new Array();
    $('#allTabs').find('input').each(function(key,val){
        // console.log(key,'  ',$(this).val(),' ',$(this).attr("id"))
        
        var id=$(this).attr("id");
        var data=$(this).val();
        if (id.includes('Enable')) {
            data=$(this).prop('checked')
        };
                       
        allData.push({id:id,val:data})
});
  

if(obj[0]==0){
  		   $.ajax({
            type: "POST",
            url: "/Addrecepts",
            headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {"data":allData},
                 //   processData: false,
                               

            success: function(msg){
              alert( "Прибыли данные: " );
              console.log(msg);
            },
            error: function(){
                alert('error!');
            }
            
          });
}else{
     $.ajax({
            type: "POST",
            url: "/updateRecepts",
            headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {"data":allData},
                 //   processData: false,
                               

            success: function(msg){
              alert( "Прибыли данные: " );
              console.log(msg);
            },
            error: function(){
                alert('error!');
            }
            
          });
}


})



</script>





<script>

    import 'vfc/dist/vfc.css'
    import {
        Input,
        Button,
        Checkbox,
        CheckboxGroup,
        Radio,
        Select,
        Option,
        Form,
        FormItem,
        FormBuilder
    } from 'vfc'

    export default {
        components: {
            [Input.name]: Input,
            [Button.name]: Button,
            [Checkbox.name]: Checkbox,
            [CheckboxGroup.name]: CheckboxGroup,
            [Radio.name]: Radio,
            [Select.name]: Select,
            [Option.name]: Option,
            [Form.name]: Form,
            [FormItem.name]: FormItem,
            [FormBuilder.name]: FormBuilder,
        },
        data: function () {

            return {
              
            }
        },
        props: [
            'routes',
        ],
        methods: {
         
        }
    }
</script>