@extends('layouts.front')

@section('content')

    <!-- categoriesTop start -->

    <div class="categoriesTop" style="background-image: url(foto/categoriesFon.png);">
        <section class="container">
            <div class="categoriesTop__cart">
                <h2 class="premiumAds__title__h2">Категории</h2>
                <ul class="categoriesTop__menu">
                    <li>
                        <a href="{{ route('/') }}" class="categoriesTop__menu__link">Главная</a>
                    </li>

                    <li>
                        <a class="categoriesTop__menu__link">Категории</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- categoriesTop end -->

    <!-- categories start -->

    <div class="categories">
        <section class="container">
            <div class="categories__cart">
                <ul class="categories__filter">
                    <li>
                        <a href="#!" class="categories__filter__link active">
                            Участок
                        </a>
                    </li>

                    <li>
                        <a href="#!" class="categories__filter__link">
                            Квартира
                        </a>
                    </li>

                    <li>
                        <a href="#!" class="categories__filter__link">
                            Земля
                        </a>
                    </li>

                    <li>
                        <a href="#!" class="categories__filter__link">
                            Новостройки
                        </a>
                    </li>

                    <li>
                        <a href="#!" class="categories__filter__link">
                            Нежилые
                        </a>
                    </li>
                </ul>

                <div class="categories__list">
                    <div class="categories__item">
                        <a href="categories_in.html">
                            <div class="categories__img">
                                <img src="foto/premiumAds_1.png" alt="categories">
                            </div>
                            <section class="categories__item__cart">
                                <div class="categories__text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                                </div>

                                <div class="categories__item__list">
                                    <ul class="categories__address">
                                        <li>
                                            <span>
                                                <img src="foto/icons/map.svg" alt="map">
                                            </span>
                                            Узбекистан, г. ТашкентУл. Садыка Азимова, 68
                                        </li>

                                        <li>
                                            <span>
                                                <img src="foto/icons/m.svg" alt="m">
                                            </span>
                                            55 м²
                                        </li>
                                    </ul>

                                    <h3 class="categories__money">500 000 000 сум</h3>
                                </div>
                            </section>
                        </a>
                    </div>

                    <div class="categories__item">
                        <a href="categories_in.html">
                            <div class="categories__img">
                                <img src="foto/premiumAds_2.png" alt="categories">
                            </div>
                            <section class="categories__item__cart">
                                <div class="categories__text">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                                </div>

                                <div class="categories__item__list">
                                    <ul class="categories__address">
                                        <li>
                                            <span>
                                                <img src="foto/icons/map.svg" alt="map">
                                            </span>
                                            Узбекистан, г. ТашкентУл. Садыка Азимова, 68
                                        </li>

                                        <li>
                                            <span>
                                                <img src="foto/icons/m.svg" alt="m">
                                            </span>
                                            55 м²
                                        </li>
                                    </ul>

                                    <h3 class="categories__money">500 000 000 сум</h3>
                                </div>
                            </section>
                        </a>
                    </div>

                    <div class="categories__item">
                        <a href="categories_in.html">
                            <div class="categories__img">
                                <img src="foto/premiumAds_3.png" alt="categories">
                            </div>
                            <section class="categories__item__cart">
                                <div class="categories__text">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                                </div>

                                <div class="categories__item__list">
                                    <ul class="categories__address">
                                        <li>
                                            <span>
                                                <img src="foto/icons/map.svg" alt="map">
                                            </span>
                                            Узбекистан, г. ТашкентУл. Садыка Азимова, 68
                                        </li>

                                        <li>
                                            <span>
                                                <img src="foto/icons/m.svg" alt="m">
                                            </span>
                                            55 м²
                                        </li>
                                    </ul>

                                    <h3 class="categories__money">500 000 000 сум</h3>
                                </div>
                            </section>
                        </a>
                    </div>

                    <div class="categories__item">
                        <a href="categories_in.html">
                            <div class="categories__img">
                                <img src="foto/premiumAds_1.png" alt="categories">
                            </div>
                            <section class="categories__item__cart">
                                <div class="categories__text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
                                </div>

                                <div class="categories__item__list">
                                    <ul class="categories__address">
                                        <li>
                                            <span>
                                                <img src="foto/icons/map.svg" alt="map">
                                            </span>
                                            Узбекистан, г. ТашкентУл. Садыка Азимова, 68
                                        </li>

                                        <li>
                                            <span>
                                                <img src="foto/icons/m.svg" alt="m">
                                            </span>
                                            55 м²
                                        </li>
                                    </ul>

                                    <h3 class="categories__money">500 000 000 сум</h3>
                                </div>
                            </section>
                        </a>
                    </div>

                    <div class="categories__item">
                        <a href="categories_in.html">
                            <div class="categories__img">
                                <img src="foto/premiumAds_2.png" alt="categories">
                            </div>
                            <section class="categories__item__cart">
                                <div class="categories__text">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                                </div>

                                <div class="categories__item__list">
                                    <ul class="categories__address">
                                        <li>
                                            <span>
                                                <img src="foto/icons/map.svg" alt="map">
                                            </span>
                                            Узбекистан, г. ТашкентУл. Садыка Азимова, 68
                                        </li>

                                        <li>
                                            <span>
                                                <img src="foto/icons/m.svg" alt="m">
                                            </span>
                                            55 м²
                                        </li>
                                    </ul>

                                    <h3 class="categories__money">500 000 000 сум</h3>
                                </div>
                            </section>
                        </a>
                    </div>

                    <div class="categories__item">
                        <a href="categories_in.html">
                            <div class="categories__img">
                                <img src="foto/premiumAds_3.png" alt="categories">
                            </div>
                            <section class="categories__item__cart">
                                <div class="categories__text">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                                </div>

                                <div class="categories__item__list">
                                    <ul class="categories__address">
                                        <li>
                                            <span>
                                                <img src="foto/icons/map.svg" alt="map">
                                            </span>
                                            Узбекистан, г. ТашкентУл. Садыка Азимова, 68
                                        </li>

                                        <li>
                                            <span>
                                                <img src="foto/icons/m.svg" alt="m">
                                            </span>
                                            55 м²
                                        </li>
                                    </ul>

                                    <h3 class="categories__money">500 000 000 сум</h3>
                                </div>
                            </section>
                        </a>
                    </div>

                    <div class="categories__item">
                        <a href="categories_in.html">
                            <div class="categories__img">
                                <img src="foto/premiumAds_2.png" alt="categories">
                            </div>
                            <section class="categories__item__cart">
                                <div class="categories__text">
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                                </div>

                                <div class="categories__item__list">
                                    <ul class="categories__address">
                                        <li>
                                            <span>
                                                <img src="foto/icons/map.svg" alt="map">
                                            </span>
                                            Узбекистан, г. ТашкентУл. Садыка Азимова, 68
                                        </li>

                                        <li>
                                            <span>
                                                <img src="foto/icons/m.svg" alt="m">
                                            </span>
                                            55 м²
                                        </li>
                                    </ul>

                                    <h3 class="categories__money">500 000 000 сум</h3>
                                </div>
                            </section>
                        </a>
                    </div>

                    <div class="categories__item">
                        <a href="categories_in.html">
                            <div class="categories__img">
                                <img src="foto/premiumAds_3.png" alt="categories">
                            </div>
                            <section class="categories__item__cart">
                                <div class="categories__text">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                                </div>

                                <div class="categories__item__list">
                                    <ul class="categories__address">
                                        <li>
                                            <span>
                                                <img src="foto/icons/map.svg" alt="map">
                                            </span>
                                            Узбекистан, г. ТашкентУл. Садыка Азимова, 68
                                        </li>

                                        <li>
                                            <span>
                                                <img src="foto/icons/m.svg" alt="m">
                                            </span>
                                            55 м²
                                        </li>
                                    </ul>

                                    <h3 class="categories__money">500 000 000 сум</h3>
                                </div>
                            </section>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- categories end -->

  @endsection
