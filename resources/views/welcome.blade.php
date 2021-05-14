<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<style>

</style>

<body>

    <div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-sticky-fixed">
        <div class="uk-container uk-container-expand uk-background-primary">
            <nav class="uk-navbar">
                <div class="uk-navbar-left">
                    <!-- <a href="#" class="uk-navbar-item uk-logo">
                        LOGO
                    </a> -->
                    <a class="uk-navbar-item uk-logo" href="#"><img src="https://image.flaticon.com/img/default_avatar.png" class="uk-border-rounded" width="50" height="50" alt=""></a>

                    <ul class="uk-navbar-nav uk-visible@m">
                        @auth
                            <li><a href="/">Главная</a></li>
                            <li><a href="/friends"><span class="uk-margin-small-right" uk-icon="users"></span>Друзья</a></li>
                            <li><a href="/comments"><span class="uk-margin-small-right" uk-icon="mail"></span>Cообщения</a></li>
                            <li><a href="/gallery"><span class="uk-margin-small-right" uk-icon="image"></span>Галерея</a></li>
                            <li><a href="/discuss"><span class="uk-margin-small-right" uk-icon="file-text"></span>Лента</a></li>
                        @endauth
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    @auth
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href=""><span class="uk-margin-small-right" uk-icon="settings"></span>Настройки</a></li>
                    </ul>

                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="">Азимов Сухроб</a></li>
                    </ul>
                    <div class="uk-navbar-item uk-visible@m">
                        <a href="/" class="uk-button uk-button-default tm-button-default uk-icon">Выйти</a>
                    </div>
                    @endauth

                    @guest
                        <div class="uk-navbar-item uk-visible@m">
                            <a href="/login" class="uk-button uk-button-default tm-button-default uk-icon">Войти</a>
                        </div>
                        <div class="uk-navbar-item uk-visible@m">
                            <a href="/registration" class="uk-button uk-button-default tm-button-default uk-icon">Зарегистраться</a>
                        </div>
                    @endguest
                    <a uk-navbar-toggle-icon="" href="#offcanvas" uk-toggle="" class="uk-navbar-toggle uk-hidden@m uk-icon uk-navbar-toggle-icon" aria-expanded="false"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <rect y="9" width="20" height="2"></rect>
                            <rect y="3" width="20" height="2"></rect>
                            <rect y="15" width="20" height="2"></rect>
                        </svg>
                    </a>
                </div>
            </nav>
        </div>
    </div>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>