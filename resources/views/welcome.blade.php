@extends('layouts.app')

@section('content')

    <main id="main">
        <section class="hero">
            <div class="hero-top">
                <div class="swiper-button-prev slider-hero-left"></div>
                <div class="swiper slider-hero">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                            <div class="hero-title">
                                <h1 class="title text-4xl text-bold text-brand">
                                    Спецодежда <br>оптом и в розницу
                                </h1>
                                <a href="#" class="button button-brand">Перейти в каталог</a>
                            </div>
                            <img src="/tulpar-shop/assets/img/slider-image-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                            <div class="hero-title">
                                <h1 class="title text-4xl text-bold text-brand">
                                    Спецодежда <br>оптом и в розницу
                                </h1>
                                <a href="#" class="button button-brand">Перейти в каталог</a>
                            </div>
                            <img src="/tulpar-shop/assets/img/slider-image-2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next slider-hero-right"></div>
            </div>
            <div class="hero-bottom">
                <div class="swiper slider-hero-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <h3 class="text text-2xl text-bold">Бесплатная доставка</h3>
                                <p class="text text-sm text-regular">Доставляем день в день при заказе от 5000 тг</p>
                                <img src="/tulpar-shop/assets/img/slider-image-3.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <h3 class="text text-2xl text-bold">Несколько точек</h3>
                                <p class="text text-sm text-regular">У нас несколько складов по городу</p>
                                <img src="/tulpar-shop/assets/img/slider-image-4.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <h3 class="text text-2xl text-bold">Качественные товары</h3>
                                <p class="text text-sm text-regular">Подберём лучшее и по дешевле</p>
                                <img src="/tulpar-shop/assets/img/slider-image-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-categories">
            <h2 class="title text-2xl text-bold">Популярное категории</h2>
            <div class="swiper slider-popular">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <h3 class="text text-xl text-bold">Спецодежда</h3>
                            <img src="/tulpar-shop/assets/img/slider-image-6.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <h3 class="text text-xl text-bold" style="color: #fff;">СИЗ</h3>
                            <img src="/tulpar-shop/assets/img/slider-image-7.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <h3 class="text text-xl text-bold" style="color: #fff;">Спец. обувь</h3>
                            <img src="/tulpar-shop/assets/img/slider-image-8.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <h3 class="text text-xl text-bold" style="color: #fff;">Перчатки и руковицы</h3>
                            <img src="/tulpar-shop/assets/img/slider-image-9.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="new-products">
            <header>
                <h2 class="title text-2xl text-bold">Новинки</h2>
                <button class="button-light">Все</button>
            </header>
            <div class="product">
                <div class="product-item">
                    <div class="content">
                        <div class="image">
                            <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                            <button class="button button-bookmark active">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="price">
                            <p class="price-new text-base text-bold text-brand">3000&#8376;</p>
                            <p class="price-old text-sm text-regular text-gray text-line-through">4800&#8376;</p>
                            <span class="price-sale text-xs text-regular text-orange">-12%</span>
                        </div>
                        <h3 class="title text text-sm text-regular">Костюм Сварщика Брезентовый</h3>
                    </div>
                    <button class="button button-brand">В корзину</button>
                </div>
                <div class="product-item">
                    <div class="content">
                        <div class="image">
                            <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                            <button class="button button-bookmark">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="price">
                            <p class="price-new text-base text-bold text-brand">3000&#8376;</p>
                            <p class="price-old text-sm text-regular text-gray text-line-through">4800&#8376;</p>
                            <span class="price-sale text-xs text-regular text-orange">-12%</span>
                        </div>
                        <h3 class="title text text-sm text-regular">Костюм Сварщика Брезентовый</h3>
                    </div>
                    <button class="button button-brand">В корзину</button>
                </div>
                <div class="product-item">
                    <div class="content">
                        <div class="image">
                            <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                            <button class="button button-bookmark">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="price">
                            <p class="price-new text-base text-bold text-brand">3000&#8376;</p>
                            <p class="price-old text-sm text-regular text-gray text-line-through">4800&#8376;</p>
                            <span class="price-sale text-xs text-regular text-orange">-12%</span>
                        </div>
                        <h3 class="title text text-sm text-regular">Костюм Сварщика Брезентовый</h3>
                    </div>
                    <button class="button button-brand">В корзину</button>
                </div>
                <div class="product-item">
                    <div class="content">
                        <div class="image">
                            <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                            <button class="button button-bookmark">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="price">
                            <p class="price-new text-base text-bold text-brand">3000&#8376;</p>
                            <p class="price-old text-sm text-regular text-gray text-line-through">4800&#8376;</p>
                            <span class="price-sale text-xs text-regular text-orange">-12%</span>
                        </div>
                        <h3 class="title text text-sm text-regular">Костюм Сварщика Брезентовый</h3>
                    </div>
                    <button class="button button-brand">В корзину</button>
                </div>
                <div class="product-item">
                    <div class="content">
                        <div class="image">
                            <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                            <button class="button button-bookmark">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="price">
                            <p class="price-new text-base text-bold text-brand">3000&#8376;</p>
                            <p class="price-old text-sm text-regular text-gray text-line-through">4800&#8376;</p>
                            <span class="price-sale text-xs text-regular text-orange">-12%</span>
                        </div>
                        <h3 class="title text text-sm text-regular">Костюм Сварщика Брезентовый</h3>
                    </div>
                    <button class="button button-brand">В корзину</button>
                </div>
                <div class="product-item">
                    <div class="content">
                        <div class="image">
                            <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                            <button class="button button-bookmark">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="price">
                            <p class="price-new text-base text-bold text-brand">3000&#8376;</p>
                            <p class="price-old text-sm text-regular text-gray text-line-through">4800&#8376;</p>
                            <span class="price-sale text-xs text-regular text-orange">-12%</span>
                        </div>
                        <h3 class="title text text-sm text-regular">Костюм Сварщика Брезентовый</h3>
                    </div>
                    <button class="button button-brand">В корзину</button>
                </div>
                <div class="product-item">
                    <div class="content">
                        <div class="image">
                            <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                            <button class="button button-bookmark">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="price">
                            <p class="price-new text-base text-bold text-brand">3000&#8376;</p>
                            <p class="price-old text-sm text-regular text-gray text-line-through">4800&#8376;</p>
                            <span class="price-sale text-xs text-regular text-orange">-12%</span>
                        </div>
                        <h3 class="title text text-sm text-regular">Костюм Сварщика Брезентовый</h3>
                    </div>
                    <button class="button button-brand">В корзину</button>
                </div>
                <div class="product-item">
                    <div class="content">
                        <div class="image">
                            <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                            <button class="button button-bookmark">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="price">
                            <p class="price-new text-base text-bold text-brand">3000&#8376;</p>
                            <p class="price-old text-sm text-regular text-gray text-line-through">4800&#8376;</p>
                            <span class="price-sale text-xs text-regular text-orange">-12%</span>
                        </div>
                        <h3 class="title text text-sm text-regular">Костюм Сварщика Брезентовый</h3>
                    </div>
                    <button class="button button-brand">В корзину</button>
                </div>
                <div class="product-item">
                    <div class="content">
                        <div class="image">
                            <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                            <button class="button button-bookmark">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="price">
                            <p class="price-new text-base text-bold text-brand">3000&#8376;</p>
                            <p class="price-old text-sm text-regular text-gray text-line-through">4800&#8376;</p>
                            <span class="price-sale text-xs text-regular text-orange">-12%</span>
                        </div>
                        <h3 class="title text text-sm text-regular">Костюм Сварщика Брезентовый</h3>
                    </div>
                    <button class="button button-brand">В корзину</button>
                </div>
                <div class="product-item">
                    <div class="content">
                        <div class="image">
                            <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                            <button class="button button-bookmark">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class="price">
                            <p class="price-new text-base text-bold text-brand">3000&#8376;</p>
                            <p class="price-old text-sm text-regular text-gray text-line-through">4800&#8376;</p>
                            <span class="price-sale text-xs text-regular text-orange">-12%</span>
                        </div>
                        <h3 class="title text text-sm text-regular">Костюм Сварщика Брезентовый</h3>
                    </div>
                    <button class="button button-brand">В корзину</button>
                </div>
            </div>
        </section>
        <section class="partners">
            <h2 class="title text-2xl text-bold">Наши партнеры</h2>
            <div class="partner">
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-1.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-2.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-3.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-4.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-5.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-6.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-7.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-8.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-9.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-10.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-11.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-12.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-13.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-14.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-15.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-16.png" alt="">
                </a>
                <a href="#" class="partner-logo">
                    <img src="/tulpar-shop/assets/img/partner-logo-17.png" alt="">
                </a>
            </div>
        </section>
        <div class="information">
            <h3>Интернет-магазин спецодежды</h3>
            <p>ТОО "TULPAR REDA", ИП "ТҰЛПАР" — компания, осуществляющая комплексные поставки перчатки и рукавицы широком ассортименте, химической продукции широкого спектра применения и спецодежды, сиз, спец обувь и мелкие строительные материалы.</p>
            <p>Швейных цех основано с 2015 года , отечественные производители Республики Казахстан.</p>
            <p>Нашими основными партнерами являются крупные отечественные производители, хорошо зарекомендовавшие себя как на рынке РК, так и за рубежом.</p>
        </div>
        <div class="modal modal-cart" id="modal">
            <div class="modal-header">
                <h2 class="title text text-2xl text-semibold">2 товара на 8 268 тг.</h2>
                <button class="button button-close" id="close-btn"></button>
            </div>
            <div class="modal-body">
                <div class="product-card">
                    <div class="card-top">
                        <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
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
                        <img src="/tulpar-shop/assets/img/slider-image-2.jpg" alt="">
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


@section('seo_side')
    <title>Tulpar</title>
    <meta name="description" content="Клиника реабилитологии в Алматы по американским стандартам предлагает передовые методы лечения и восстановления. Профессиональная команда врачей и индивидуальный подход к каждому пациенту.">
    <meta name="keywords" content="реабилитология, клиника реабилитологии, Алматы, американские стандарты, восстановление после травм, реабилитация, физическая терапия, медицинская реабилитация, физиотерапия, лечение боли, восстановление здоровья, реабилитация после операции, профессиональные врачи, индивидуальный подход">
    <meta property="og:title" content="Клиника реабилитологии по американским стандартам">
    <meta property="og:description" content="Клиника реабилитологии в Алматы по американским стандартам предлагает передовые методы лечения и восстановления. Профессиональная команда врачей и индивидуальный подход к каждому пациенту.">
    <meta property="og:image" content="/assets/img/logo.svg">
    <meta property="og:image:width" content="100">
    <meta property="og:image:height" content="50">
@endsection
