<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/foto/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/foto/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/foto/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/foto/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/foto/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="{{ asset('front/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
    <title>Uy-Bozor</title>
</head>
<body>

    <!-- header start -->

    <header>
        <div class="header">
            <section class="container">
                <div class="header__cart">
                    <div class="header__list">
                        <div class="header__logo">
                            <a href="{{ route('/') }}">
                                <img src="{{ asset('front/foto/logo.svg') }}" alt="logo">
                            </a>
                        </div>

                        <section class="header__list__item sidenav" id="slide-out">
                            <ul class="header__menu">
                                <li>
                                    <a href="{{ route('/') }}" class="header__link">Главная</a>
                                </li>

                                <li>
                                    <a href="{{ route('categories', ['id' => 1]) }}" class="header__link">Категории</a>
                                </li>

                                <li>
                                    <a href="{{ route('about') }}" class="header__link">о нас</a>
                                </li>

                                <li>
                                    <a href="{{ $options->where('key', 'telegram')->first()->value }}" class="header__link">подать объявление</a>
                                </li>
                            </ul>

                            <a href="{{ $options->where('key', 'telegram_kanal')->first()->value }}" class="header__button__link">
                                <img src="{{ asset('front/foto/icons/teligram.svg') }}" alt="tilegram">
                                <span>Telegram канал</span>
                            </a>
                        </section>

                        <button class="header__burger__none sidenav-trigger" data-target="slide-out">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </header>

    <!-- header end -->

    @yield('content')

    <!-- footer start -->

    <footer>
        <div class="footer">
            <section class="container">
                <div class="footer__cart">
                    <div class="footer__list">
                        <div class="footer__logo">
                            <a href="{{ route('/') }}">
                                <img src="{{ asset('front/foto/logoFooter.svg') }}" alt="logo">
                            </a>
                        </div>

                        <ul class="footer__icons__list">
                            <li>
                                <a href="{{ $options->where('key', 'instagram')->first()->value }}" class="footer__icons__link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="{{ $options->where('key', 'facebook')->first()->value }}" class="footer__icons__link">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="{{ $options->where('key', 'telegram')->first()->value }}" class="footer__icons__link">
                                    <i class="fab fa-telegram-plane"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="footer__bottom">
                <section class="container">
                    <div class="footer__bottom__list">
                        <h4 class="footer__bottom__title__h4">
                            “Uy Bozor” Все права защищены
                        </h4>
                        <h4 class="footer__bottom__title__h4">
                            © Copyright 2023 - Web developed by
                            <a href="http://sos.uz" target="_blank">SOS Group</a>
                        </h4>
                    </div>
                </section>
            </div>
        </div>
    </footer>

    <!-- footer end -->

    <script src="{{ asset('front/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('front/js/slick.min.js') }}"></script>
    <script src="{{ asset('front/js/slic.js') }}"></script>
    <script src="{{ asset('front/js/materialize.min.js') }}"></script>
    <script src="{{ asset('front/js/index.js') }}"></script>
</body>
</html>

