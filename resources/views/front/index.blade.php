@extends('layouts.front')

@section('content')

    <!-- slider start -->

    <div class="slider">
        <div class="slider__list">
            @foreach ($sliders as $slider)
            <div class="slider__item" style="background-image:url({{ asset($slider->image) }});">
                <section class="container">
                    <div class="slider__cart">
                        <div class="slider__cart__list">
                            <h1 class="slider__title__h1">{{ $slider->title }}</h1>
                            <div class="slider__text">{{ $slider->description }}</div>
                        </div>
                    </div>
                </section>
            </div>
            @endforeach
        </div>
    </div>

    <!-- slider end -->

    <!-- Premium Ads start -->

    <div class="premiumAds">
        <section class="container">
            <div class="premiumAds__cart">
                <h2 class="premiumAds__title__h2">Премиум объявления</h2>

                <div class="premiumAds__list">
                    <div class="premiumAds__item">
                        <a href="categories_in.html">
                            <div class="premiumAds__img">
                                <img src="foto/premiumAds_1.png" alt="premiumAds">
                                <h5 class="premiumAds__icons">
                                    <img src="foto/icons/king.svg" alt="king">
                                </h5>
                                <h4 class="premiumAds__title__h4">Квартира</h4>
                            </div>
                            <div class="premiumAds__text">
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <h5 class="premiumAds__money">500 000 000 сум</h5>
                        </a>
                    </div>

                    <div class="premiumAds__item">
                        <a href="categories_in.html">
                            <div class="premiumAds__img">
                                <img src="foto/premiumAds_2.png" alt="premiumAds">
                                <h5 class="premiumAds__icons">
                                    <img src="foto/icons/king.svg" alt="king">
                                </h5>
                                <h4 class="premiumAds__title__h4">Новостройка</h4>
                            </div>
                            <div class="premiumAds__text">
                                <p>Сonsectetur adipiscing elit</p>
                            </div>
                            <h5 class="premiumAds__money">500 000 000 сум</h5>
                        </a>
                    </div>

                    <div class="premiumAds__item">
                        <a href="categories_in.html">
                            <div class="premiumAds__img">
                                <img src="foto/premiumAds_2.png" alt="premiumAds">
                                <h5 class="premiumAds__icons">
                                    <img src="foto/icons/king.svg" alt="king">
                                </h5>
                                <h4 class="premiumAds__title__h4">Квартира</h4>
                            </div>
                            <div class="premiumAds__text">
                                <p>Sed do eiusmod tempor</p>
                            </div>
                            <h5 class="premiumAds__money">500 000 000 сум</h5>
                        </a>
                    </div>

                    <div class="premiumAds__item">
                        <a href="categories_in.html">
                            <div class="premiumAds__img">
                                <img src="foto/premiumAds_1.png" alt="premiumAds">
                                <h5 class="premiumAds__icons">
                                    <img src="foto/icons/king.svg" alt="king">
                                </h5>
                                <h4 class="premiumAds__title__h4">Квартира</h4>
                            </div>
                            <div class="premiumAds__text">
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <h5 class="premiumAds__money">500 000 000 сум</h5>
                        </a>
                    </div>

                    <div class="premiumAds__item">
                        <a href="categories_in.html">
                            <div class="premiumAds__img">
                                <img src="foto/premiumAds_2.png" alt="premiumAds">
                                <h5 class="premiumAds__icons">
                                    <img src="foto/icons/king.svg" alt="king">
                                </h5>
                                <h4 class="premiumAds__title__h4">Новостройка</h4>
                            </div>
                            <div class="premiumAds__text">
                                <p>Сonsectetur adipiscing elit</p>
                            </div>
                            <h5 class="premiumAds__money">500 000 000 сум</h5>
                        </a>
                    </div>

                    <div class="premiumAds__item">
                        <a href="categories_in.html">
                            <div class="premiumAds__img">
                                <img src="foto/premiumAds_2.png" alt="premiumAds">
                                <h5 class="premiumAds__icons">
                                    <img src="foto/icons/king.svg" alt="king">
                                </h5>
                                <h4 class="premiumAds__title__h4">Квартира</h4>
                            </div>
                            <div class="premiumAds__text">
                                <p>Sed do eiusmod tempor</p>
                            </div>
                            <h5 class="premiumAds__money">500 000 000 сум</h5>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Premium Ads end -->

    <!-- Latest announcements start -->

    <div class="latestAnnouncements">
        <section class="container">
            <div class="premiumAds__cart">
                <h2 class="premiumAds__title__h2">Последние объявления</h2>

                <div class="premiumAds__list">
                    <div class="premiumAds__item">
                        <a href="categories_in.html">
                            <div class="premiumAds__img">
                                <img src="foto/premiumAds_1.png" alt="premiumAds">
                                <h4 class="premiumAds__title__h4">Квартира</h4>
                            </div>
                            <div class="premiumAds__text">
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <h5 class="premiumAds__money">500 000 000 сум</h5>
                        </a>
                    </div>

                    <div class="premiumAds__item">
                        <a href="categories_in.html">
                            <div class="premiumAds__img">
                                <img src="foto/premiumAds_2.png" alt="premiumAds">
                                <h4 class="premiumAds__title__h4">Новостройка</h4>
                            </div>
                            <div class="premiumAds__text">
                                <p>Сonsectetur adipiscing elit</p>
                            </div>
                            <h5 class="premiumAds__money">500 000 000 сум</h5>
                        </a>
                    </div>

                    <div class="premiumAds__item">
                        <a href="categories_in.html">
                            <div class="premiumAds__img">
                                <img src="foto/premiumAds_2.png" alt="premiumAds">
                                <h4 class="premiumAds__title__h4">Квартира</h4>
                            </div>
                            <div class="premiumAds__text">
                                <p>Sed do eiusmod tempor</p>
                            </div>
                            <h5 class="premiumAds__money">500 000 000 сум</h5>
                        </a>
                    </div>

                    <div class="premiumAds__item">
                        <a href="categories_in.html">
                            <div class="premiumAds__img">
                                <img src="foto/premiumAds_1.png" alt="premiumAds">
                                <h4 class="premiumAds__title__h4">Квартира</h4>
                            </div>
                            <div class="premiumAds__text">
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <h5 class="premiumAds__money">500 000 000 сум</h5>
                        </a>
                    </div>

                    <div class="premiumAds__item">
                        <a href="categories_in.html">
                            <div class="premiumAds__img">
                                <img src="foto/premiumAds_2.png" alt="premiumAds">
                                <h4 class="premiumAds__title__h4">Новостройка</h4>
                            </div>
                            <div class="premiumAds__text">
                                <p>Сonsectetur adipiscing elit</p>
                            </div>
                            <h5 class="premiumAds__money">500 000 000 сум</h5>
                        </a>
                    </div>

                    <div class="premiumAds__item">
                        <a href="categories_in.html">
                            <div class="premiumAds__img">
                                <img src="foto/premiumAds_2.png" alt="premiumAds">
                                <h4 class="premiumAds__title__h4">Квартира</h4>
                            </div>
                            <div class="premiumAds__text">
                                <p>Sed do eiusmod tempor</p>
                            </div>
                            <h5 class="premiumAds__money">500 000 000 сум</h5>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Latest announcements end -->


    @endsection
