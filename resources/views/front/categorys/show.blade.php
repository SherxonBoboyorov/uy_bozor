@extends('layouts.front')

@section('content')

    <!-- categoriesTop start -->

    <div class="categoriesTop" style="background-image: url(foto/categoriesFon.png);">
        <section class="container">
            <div class="categoriesTop__cart">
                <h2 class="premiumAds__title__h2">Lorem ipsum dolor sit amet</h2>
                <ul class="categoriesTop__menu">
                    <li>
                        <a href="index.html" class="categoriesTop__menu__link">Главная</a>
                    </li>

                    <li>
                        <a href="categories_in.html" class="categoriesTop__menu__link">Lorem ipsum dolor sit amet</a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- categoriesTop end -->

    <!-- categoriesIn start -->

    <div class="categoriesIn">
        <section class="container">
            <div class="categoriesIn__cart">
                <div class="categoriesIn__gallery">

                    <div class="categoriesIn__gallery__item">
                        <img src="foto/slick_1.png" alt="categoriesIn">
                        <h5 class="premiumAds__icons">
                            <img src="foto/icons/king.svg" alt="king">
                        </h5>
                    </div>

                    <div class="categoriesIn__gallery__item">
                        <img src="foto/slick_2.png" alt="categoriesIn">
                        <h5 class="premiumAds__icons">
                            <img src="foto/icons/king.svg" alt="king">
                        </h5>
                    </div>

                    <div class="categoriesIn__gallery__item">
                        <img src="foto/slick_3.png" alt="categoriesIn">
                        <h5 class="premiumAds__icons">
                            <img src="foto/icons/king.svg" alt="king">
                        </h5>
                    </div>

                </div>

                <h2 class="categoriesIn__title__h2">Lorem ipsum dolor sit amet</h2>

                <ul class="categoriesIn__list">
                    <li>
                        <h5 class="categoriesIn__title__h5">
                            Количество комнат:
                        </h5>
                        <h4 class="categoriesIn__title__h4">
                            4
                        </h4>
                    </li>

                    <li>
                        <h5 class="categoriesIn__title__h5">
                            Площадь:
                        </h5>
                        <h4 class="categoriesIn__title__h4">
                            55 м²
                        </h4>
                    </li>

                    <li>
                        <h5 class="categoriesIn__title__h5">
                            Этаж:
                        </h5>
                        <h4 class="categoriesIn__title__h4">
                            3
                        </h4>
                    </li>

                    <li>
                        <h5 class="categoriesIn__title__h5">
                            Цена:
                        </h5>
                        <h4 class="categoriesIn__money">500 000 000 сум</h4>
                    </li>
                </ul>

                <div class="categoriesIn__button__cart">
                    <a href="#!" class="categoriesIn__link">
                        Позвонить
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.9994 17.1864V14.4767C19.0104 14.0337 18.8579 13.6021 18.5708 13.264C17.7614 12.3106 14.9854 11.7008 13.885 11.935C13.0273 12.1176 12.4271 12.9788 11.8404 13.5644C9.57464 12.2785 7.69857 10.4062 6.41019 8.1448C6.99689 7.55929 7.85987 6.96036 8.04283 6.10428C8.27713 5.00777 7.66812 2.24949 6.72131 1.43684C6.38828 1.151 5.96246 0.995768 5.52324 1.00009H2.8081C1.77357 1.00106 0.912875 1.92895 1.00706 2.96919C0.999995 11.935 8.00004 19 17.0264 18.9929C18.0722 19.0873 19.0036 18.2223 18.9994 17.1864Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.5 4.5C13.2372 4.64382 13.9689 4.96892 14.5 5.5C15.0311 6.03108 15.3562 6.76284 15.5 7.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13 1C14.5315 1.17014 15.9097 1.91107 17 3C18.0903 4.08893 18.8279 5.46869 19 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- categoriesIn end -->

    @endsection
