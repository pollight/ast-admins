<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/dashboard.js') }}" defer></script>
    <script>
        function menuToggle(checked) {
            let sidebar = document.getElementById("add_sidebar");
            let menu = document.getElementById("menu");
            console.log(checked);
            if (checked) {
                sidebar.classList.add("hidden");
                menu.classList.remove("hidden");
            } else {
                sidebar.classList.remove("hidden");
                menu.classList.add("hidden");
            }
        }
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/dashboard.css') }}?<?php echo date('l jS \of F Y h:i:s A'); ?><?php echo date('l jS \of F Y h:i:s A'); ?>"
          rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="sidebar">
                <div class="sidebar-max-height">


                    <div class="row sidebar-container box-logo">
                        <div class="col-12 d-flex justify-content-center px-0">

                            <div class="butt_menu_mobile">
                                <input id="menu__toggle"
                                       type="checkbox"
                                       onchange="menuToggle(this.checked)"
                                       @guest disabled @endguest
                                />
                                <label class="menu__btn" for="menu__toggle">
                                    <span></span>
                                </label>
                            </div>

                            <div class="logo-box">
                                <a href="/">
                                    <img src="{{ asset('images/logo.svg') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row sidebar-container">
                        <div class="col-12 p-0">
                            <h3 class="title-type-3">Wood sorting system</h3>
                        </div>
                        <div class="col-12 p-0">
                            <date-time-component></date-time-component>
                        </div>
                    </div>
                    @guest
                        <div class="row sidebar-container">
                            <div class="col-12 p-0">
                                <h4 class="title-type-4 mb-3">Профиль</h4>
                            </div>
                            <div class="col-12 p-0">
                                <form method="POST"
                                      action="{{ route('login') }}"
                                      class="form-login"
                                >
                                    @csrf

                                    <input id="user_name"
                                           type="text"
                                           name="login"
                                           class="form-input"
                                           placeholder="Имя пользователя"
                                           autocomplete="off"
                                           required
                                    >

                                    <input id="user_password"
                                           type="password"
                                           class="form-input"
                                           name="password"
                                           placeholder="Пароль"
                                           autocomplete="off"
                                           required
                                    >

                                    <button type="submit" class="form-button">Войти</button>
                                </form>
                            </div>
                        </div>
                    @endguest

                    <div id="add_sidebar">
                        @yield('sidebar')
                    </div>

                    @guest

                    @else
                        <div id="menu" class="row sidebar-container hidden">
                            <ul class="menu">
                                <li class="menu-item home">
                                    <a href="{{ route('start') }}">Главная</a>
                                </li>
                                <li class="menu-item recipes">
                                    <a href="{{ route('dashboard.recipes') }}">Рецепты</a>
                                </li>
                                <li class="menu-item admin">
                                    <a href="{{ route('dashboard.administration') }}">Администрирование</a>
                                </li>
                                <li class="menu-item stat">
                                    <a href="{{ route('dashboard.statistics') }}">Статистика</a>
                                </li>
                                <li class="menu-item diagnostics">
                                    <a href="{{ route('dashboard.diagnostics') }}">Диагностика</a>
                                </li>
                                <li class="menu-item network">
                                    <a href="{{ route('dashboard.neural_network') }}">Обучение нейросети</a>
                                </li>
                                <li class="menu-item logs">
                                    <a href="{{ route('dashboard.logs') }}">Логи</a>
                                </li>
                            </ul>

                            <form method="POST"
                                  action="{{ route('logout') }}"
                                  class="form-login w-100"
                            >
                                @csrf
                                <button id="logout" type="submit" class="form-button mb-0 mt-auto">Выйти</button>
                            </form>
                        </div>
                    @endguest
                </div>
            </div>

            <div class="content">
                <div class="title-content mb-4">
                    @yield('title-content')
                </div>

                @yield('content')
            </div>
        </div>
    </div>
</div>

</body>
</html>
