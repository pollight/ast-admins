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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/dashboard.css') }}?<?php echo date('l jS \of F Y h:i:s A'); ?><?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="sidebar">
                <div class="row sidebar-container box-logo">
                    <div class="col-12 d-flex justify-content-center px-0">
                        <div class="butt_menu_mobile">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="logo-box">
                            <img src="{{ asset('images/logo.svg') }}" alt="logo">
                        </div>
                    </div>
                </div>

                <div class="row sidebar-container">
                    <div class="col-12 p-0">
                        <h3 class="title-type-3">Wood sorting system</h3>
                    </div>
                    <div class="col-12 p-0">
                        <div class="system-datetime-info">
                            <span id="indicator" class="indicator"></span>
                            <span class="system-datetime">{{ now() }}</span>
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6.5" cy="6.5" r="3" stroke="white"/>
                                <path d="M6 0.5C6 0.223858 6.22386 0 6.5 0C6.77614 0 7 0.223858 7 0.5V1.5C7 1.77614 6.77614 2 6.5 2C6.22386 2 6 1.77614 6 1.5V0.5Z" fill="white"/>
                                <path d="M6 11.5C6 11.2239 6.22386 11 6.5 11C6.77614 11 7 11.2239 7 11.5V12.5C7 12.7761 6.77614 13 6.5 13C6.22386 13 6 12.7761 6 12.5V11.5Z" fill="white"/>
                                <path d="M1.90433 2.61088C1.70907 2.41562 1.70907 2.09903 1.90433 1.90377C2.0996 1.70851 2.41618 1.70851 2.61144 1.90377L3.31855 2.61088C3.51381 2.80614 3.51381 3.12272 3.31855 3.31798C3.12329 3.51325 2.8067 3.51325 2.61144 3.31798L1.90433 2.61088Z" fill="white"/>
                                <path d="M9.68251 10.3891C9.48725 10.1938 9.48725 9.87721 9.68251 9.68195C9.87777 9.48668 10.1944 9.48668 10.3896 9.68195L11.0967 10.3891C11.292 10.5843 11.292 10.9009 11.0967 11.0962C10.9015 11.2914 10.5849 11.2914 10.3896 11.0962L9.68251 10.3891Z" fill="white"/>
                                <path d="M10.3886 1.90385C10.5839 1.70858 10.9005 1.70858 11.0957 1.90385C11.291 2.09911 11.291 2.41569 11.0957 2.61095L10.3886 3.31806C10.1934 3.51332 9.87679 3.51332 9.68153 3.31806C9.48627 3.1228 9.48627 2.80622 9.68153 2.61095L10.3886 1.90385Z" fill="white"/>
                                <path d="M2.61046 9.68202C2.80572 9.48676 3.1223 9.48676 3.31757 9.68202C3.51283 9.87728 3.51283 10.1939 3.31757 10.3891L2.61046 11.0962C2.4152 11.2915 2.09862 11.2915 1.90335 11.0962C1.70809 10.901 1.70809 10.5844 1.90335 10.3891L2.61046 9.68202Z" fill="white"/>
                                <path d="M12.5 6C12.7761 6 13 6.22386 13 6.5C13 6.77614 12.7761 7 12.5 7L11.5 7C11.2239 7 11 6.77614 11 6.5C11 6.22386 11.2239 6 11.5 6L12.5 6Z" fill="white"/>
                                <path d="M1.5 6C1.77614 6 2 6.22386 2 6.5C2 6.77614 1.77614 7 1.5 7L0.5 7C0.223858 7 -3.39263e-08 6.77614 -2.18557e-08 6.5C-9.78513e-09 6.22386 0.223858 6 0.5 6L1.5 6Z" fill="white"/>
                            </svg>

                        </div>
                    </div>
                </div>
                @guest
                    <div class="row sidebar-container">
                        <div class="col-12 p-0">
                            <h4 class="title-type-4 mb-3">Профиль</h4>
                        </div>
                        <div class="col-12 p-0">
                            <form method="POST" action="{{ route('login') }}"
                            class="form-login"
                            >
                                @csrf

                                <input id="user_name"
                                       type="text"
                                       name="userName"
                                       class="form-input"
                                       placeholder="Имя пользователя"
                                       required
                                >

                                <input id="user_password"
                                       type="password"
                                       class="form-input"
                                       name="userPassword"
                                       placeholder="Пароль"
                                       required
                                >

                                <button type="submit" class="form-button">Войти</button>
                            </form>
                        </div>
                    </div>
                @endguest

                @yield('sidebar')
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
