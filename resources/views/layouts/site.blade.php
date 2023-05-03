<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  @meta_tags

<body>
    {{-- <div class="layer">
        <div class="modal-box basic-flex">
            <button type="button" class="btn hide-modal-btn">x</button>
            <h4>Подписывайтесь на наш канал в Telegram и будьте всегда в курсе самых последних новостей:</h4>
            <div class="telegram-join  basic-flex">
                <a href="#"><img src="/img/tg.png" alt="Telegram">Подписатся</a>
            </div>
        </div>
    </div> --}}
    <div class="menu-mask"></div>
    <main>
        <header class="main-header">
            <div class="container">
                <div class="basic-flex header__top">
                    <a href="/" class="logo">
                        <img src="/img/logo.png" alt="NAMANGANLIKLAR24">
                    </a>
                    <div class="currencies basic-flex">
                        {{-- <div class="currency"><span>$</span><span>{{ $kursData['usd'] }} </span></div>
                        <div class="currency"><span>P</span><span>{{ $kursData['rub'] }}</span></div>
                        <div class="currency"><span>E</span><span>{{ $kursData['euro'] }}</span></div> --}}
                    </div>
                    <div class="header__actions basic-flex">
                        <form method="GET" action="{{ route('search') }}" class="search-form basic-flex">
                            <input type="search" name="key" class="search-input">
                            <button type="submit" class="btn search-btn"></button>
                        </form>
                        <div class="languages">
                            @if(\App::getLocale()=='ru')
                                <a  class="btn language__option language__option--ru active">Ru</a>
                                <div class="languages__list">
                                    <a href="/lang/uz" class="btn language__option language__option--uz" data-status="disabled">Uz</a>
                                </div>
                            @else
                                <a  class="btn language__option language__option--uz active" data-status="disabled">Uz</a>
                                <div class="languages__list">
                                    <a href="/lang/ru" class="btn language__option language__option--ru" data-status="disabled">Ru</a>
                                </div>
                            @endif
                        </div>
                        <div class="telegram-join basic-flex">
                            <a href="#"><img src="/img/tg.png" alt="Telegram">Подписатся</a>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-menu"><span class="hamburger"></span></button>
                <nav class="navbar">
                    <div class="currencies-responsive basic-flex">
                        {{-- <div class="currency"><span>$</span><span>{{ $kursData['usd'] }} </span></div>
                        <div class="currency"><span>P</span><span>{{ $kursData['rub'] }}</span></div>
                        <div class="currency"><span>E</span><span>{{ $kursData['euro'] }}</span></div> --}}
                    </div>
                    <ul class="navbar__menu basic-flex">
                        @foreach ($categories as $category)
                            <li class="menu__item"><a href="{{ route('categoryPosts', $category->slug) }}">{{ $category['name_'.\App::getLocale()] }}</a></li>
                        @endforeach
                        <li class="menu__item"><a href="{{ route('contact') }}">Bog'lanish</a></li>
                    </ul>
                </nav>
                {{-- <div class="advertisement-box">
                    <h4>PLACEHOLDER FOR ADVERTISEMENT</h1>
                </div> --}}
                <a href="{{ $ad->url1 ?? '' }}" class="advertisement-box" style="background-image: url(/site/images/ads/{{ $ad->image1 ?? ''}})">
                    <h2>
                        {{ $ad->title1 ?? ''}}
                    </h2>
                </a>
            </div>
        </header>

        @include('layouts.statistika')

        @yield('content')

    </main>

    <footer class="footer">
        <div class="container">
                <div class="footer__top basic-flex">
                    <a href="#" class="footer_logo"><img src="/img/logo-blue.png" alt="NAMANGANLIKLAR24"></a>
                    <div class="join-telegram-wrapper basic-flex">
                        <p>Подписывайтесь на наш канал в Telegram и будьте всегда в курсе самых последних новостей:</p>
                        <a href="#" class="join-telegram">Подписатся</a>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="about-site">
                        <h4>О сайте</h4>
                        <p>Воспроизводство, копирование, тиражирование, распространение и иное использование информации с сайта «NAMANGANLIKLAR24.UZ» возможно только с предварительного письменного разрешения редакции.</p>
                    </div>
                    <ul class="footer-menu">
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">Информация о сайте</a></li>
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">Напишите нам</a></li>
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">Реклама</a></li>
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">Прислать новость</a></li>
                    </ul>
                    <ul class="footer-menu">
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">Использование материалов </a></li>
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">Темы дня</a></li>
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">Наша команда</a></li>
                    </ul>
                </div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

</body>
</html>

