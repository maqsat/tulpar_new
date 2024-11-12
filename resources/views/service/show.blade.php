@extends('layouts.app')

@section('content')

    <main id="main-catalog">
        <div class="container container-fluid">
            <section class="catalog" id="catalog">
                <h1 class="title text text-2xl text-bold">Каталог</h1>
                <form action="" class="form-search">
                    <i class="icon icon-search"></i>
                    <input type="search" name="" id="" placeholder="Поиск по названиям" class="text text-base text-regular">
                </form>
                <div class="filter">
                    <button class="button button-filter active">
                        Дешевые
                    </button>
                    <button class="button button-filter">
                        Дорогие
                    </button>
                </div>
                <div class="product">
                    @foreach($posts as $key => $item)
                        <div class="product-item">
                        <div class="content">
                            <div class="image">
                                <img src="./assets/img/slider-image-1.jpg" alt="">
                                <button class="button button-bookmark active">
                                    <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="price">
                                <p class="price-new text-base text-bold text-brand">{{ number_format($item->cost, 0, '', ' ') }}&#8376;</p>
                                <p class="price-old text-sm text-regular text-gray text-line-through">{{ $item->cost+($item->cost*0.12) }}&#8376;</p>
                                <span class="price-sale text-xs text-regular text-orange">-12%</span>
                            </div>
                            <h3 class="title text text-sm text-regular">{{ $item->title }}</h3>
                        </div>
                        <button class="button button-brand">В корзину</button>
                    </div>
                    @endforeach
                </div>
                <div class="pagination">
                    <button class="button button-white">
                        в начало
                    </button>
                    <button class="button button-pagination-arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 19L8 12L14 5" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <ul class="pagination-list">
                        <li>
                            <button class="button button-pagination-item active">1</button>
                        </li>
                        <li>
                            <button class="button button-pagination-item">2</button>
                        </li>
                        <li>
                            <button class="button button-pagination-item">3</button>
                        </li>
                        <li>
                            <button class="button button-pagination-item">4</button>
                        </li>
                        <li>
                            <button class="button button-pagination-item">5</button>
                        </li>
                        <li>
                            <button class="button button-pagination-item">6</button>
                        </li>
                    </ul>
                    <button class="button button-pagination-arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 19L16 12L10 5" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="button button-white">
                        в конец
                    </button>
                </div>
                <div class="information">
                    <h3>Интернет-магазин спецодежды</h3>
                    <p>ТОО "TULPAR REDA", ИП "ТҰЛПАР" — компания, осуществляющая комплексные поставки перчатки и рукавицы широком ассортименте, химической продукции широкого спектра применения и спецодежды, сиз, спец обувь и мелкие строительные материалы.</p>
                    <p>Швейных цех основано с 2015 года , отечественные производители Республики Казахстан.</p>
                    <p>Нашими основными партнерами являются крупные отечественные производители, хорошо зарекомендовавшие себя как на рынке РК, так и за рубежом.</p>
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
        </div>
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
