@extends('layouts.front')

@section('content')

    <!-- categoriesTop start -->

    <div class="categoriesTop" style="background-image: url({{ asset('front/foto/categoriesFon.png') }});">
        <section class="container">
            <div class="categoriesTop__cart">
                <h2 class="premiumAds__title__h2">О нас</h2>
                <ul class="categoriesTop__menu">
                    <li>
                        <a href="{{ route('/') }}" class="categoriesTop__menu__link">Главная</a>
                    </li>

                    <li>
                        <a class="categoriesTop__menu__link">О нас</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- categoriesTop end -->

    <!-- about start -->

    <div class="about">
        <section class="container">
            <div class="about__cart">
                <div class="about__list clearfix">
                    {{-- <div class="about__img">
                        <img src="foto/about.png" alt="about">
                    </div> --}}
                    @foreach ($pages as $page)
                    <section>

                        <h2 class="premiumAds__title__h2">{{ $page->title }}</h2>
                        <div class="about__text">
                            <p>
                                {!! $page->content !!}
                            </p>
                        </div>
                    </section>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- about end -->

    @endsection
