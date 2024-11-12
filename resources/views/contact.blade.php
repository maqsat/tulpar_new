@extends('layouts.app')

@section('content')

    <main id="main-contact">
        <section class="contact" id="contact">
            <div class="container-fluid">
                <h1 class="title text text-4xl text-bold">Контакты</h1>
                <div class="contact-info">
                    <div class="contact-info__item">
                        <h4 class="text text-gray text-regular text-xl">Напишите нам</h4>
                        <ul>
                            <li><a href="#" class="text text-medium text-2xl">info@tulparreda.kz</a></li>
                            <li><a href="#" class="text text-medium text-2xl">Telegram</a></li>
                            <li><a href="#" class="text text-medium text-2xl">WhatsApp</a></li>
                        </ul>
                    </div>
                    <div class="contact-info__item">
                        <h4 class="text text-gray text-regular text-xl">Позвоните нам</h4>
                        <ul>
                            <li><a href="#" class="text text-medium text-2xl">+7 707 521 66-93</a></li>
                            <li><a href="#" class="text text-medium text-2xl">+7 727 233 97-85</a></li>
                            <li><a href="#" class="text text-medium text-2xl">+7 727 234 39-31</a></li>
                        </ul>
                    </div>
                    <div class="contact-info__item">
                        <h4 class="text text-gray text-regular text-xl">График работы</h4>
                        <ul>
                            <li><a href="#" class="text text-medium text-2xl">Пн - Пт 09:00-19:00</a></li>
                            <li><a href="#" class="text text-medium text-2xl">Cб - Вс 10:00-17:00</a></li>
                            <li><a href="#" class="text text-medium text-2xl text-orange">Вс - выходной</a></li>
                        </ul>
                    </div>
                </div>
                <div class="contact-address">
                    <div class="content">
                        <h4 class="text text-gray text-regular text-xl">Наш офис</h4>
                        <p class="text text-medium text-2xl">пр. Сейфуллина 451/1 Райымбека</p>
                        <span class="text text-gray text-regular text-xl">РК, г. Алматы</span>
                    </div>
                    <div class="map" id="map"></div>
                </div>
            </div>
        </section>
        <div class="modal modal-cart" id="modal">
            <div class="modal-header">
                <h2 class="title text text-2xl text-semibold">2 товара на 8 268 тг.</h2>
                <button class="button button-close" id="close-btn"></button>
            </div>
            <div class="modal-body">
                <div class="product-card">
                    <div class="card-top">
                        <img src="./assets/img/slider-image-1.jpg" alt="">
                        <div class="text">
                            <p class="text text-gray text-regular text-xs">Спецодежда</p>
                            <p class="text text-base text-semibold">Костюм Сварщика Брезентовый</p>
                        </div>
                    </div>
                    <div class="card-bottom">
                        <p class="price text text-xs text-bold">4268 тг.</p>
                        <div class="counter">
                            <button class="button button-transparent text-white text-sm text-regular">
                                -
                            </button>
                            <p class="text-white text-sm text-regular">
                                1
                            </p>
                            <button class="button button-transparent text-white text-sm text-regular">
                                +
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="card-top">
                        <img src="./assets/img/slider-image-2.jpg" alt="">
                        <div class="text">
                            <p class="text text-gray text-regular text-xs">СИЗ</p>
                            <p class="text text-base text-semibold">Костюм Сварщика Брезентовый</p>
                        </div>
                    </div>
                    <div class="card-bottom">
                        <p class="price text text-xs text-bold">4000 тг.</p>
                        <div class="counter">
                            <button class="button button-transparent text-white text-sm text-regular">
                                -
                            </button>
                            <p class="text-white text-sm text-regular">
                                2
                            </p>
                            <button class="button button-transparent text-white text-sm text-regular">
                                +
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="card">
                    <form action="" class="form-promocode card-item">
                        <input type="text" name="" id="" placeholder="Введите промокод" class="text text-base text-semibold">
                        <button class="button button-transparent text-subscribe text-xs text-regular text-uppercase">Применить</button>
                    </form>
                    <div class="card-item">
                        <p class="text text-regular text-xs">2 товара</p>
                        <p class="text text-regular text-xs">8 888 тг.</p>
                    </div>
                    <div class="card-item">
                        <p class="text text-regular text-xs">Скидка</p>
                        <p class="text text-regular text-xs">+ 118</p>
                    </div>
                    <div class="card-item">
                        <p class="text text-semibold text-base">Сумма заказа</p>
                        <p class="text text-regular text-base">8 268 тг.</p>
                    </div>
                    <button class="button button-brand text-white text-lg text-medium">К оформлению заказа</button>
                </div>
            </div>
        </div>
        <div class="overlay" id="overlay"></div>
    </main>

@endsection



@section('js_side')
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <script type="text/javascript">
        var map;

        DG.then(function () {
            map = DG.map('map', {
                center: [43.27308, 76.930007],
                zoom: 17
            });
            DG.marker([43.27308, 76.930007]).addTo(map);
        });
    </script>
@endsection


@section('seo_side')
    <title>Tulpar</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="/assets/img/logo.svg">
    <meta property="og:image:width" content="100">
    <meta property="og:image:height" content="50">
@endsection
