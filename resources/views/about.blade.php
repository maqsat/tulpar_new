@extends('layouts.app')

@section('content')

    <main id="main-about">
    <section class="about" id="about">
        <div class="container-fluid">
            <h1 class="title text text-2xl text-bold">О нас</h1>
            <div class="information">
                <p>ТОО "TULPAR REDA", ИП "ТҰЛПАР"
                    Компания, осуществляющая комплексные поставки перчатки и рукавицы широком ассортименте, химической продукции широкого спектра применения и спецодежды, сиз, спец обувь и мелкие строительные материалы.
                     
                    Швейных цех основано с 2015 года , отечественные производители Республики Казахстан.
                     
                    Нашими основными партнерами являются крупные отечественные производители, хорошо зарекомендовавшие себя как на рынке РК, так и за рубежом.
                    Ассортимент предлагаемой нами продукции достаточно широк, это:
                    - Мелкие строительные материалы
                    - Спецодежды - отечественные производители Республики Казахстан.
                    - СИЗ
                    - Спец обуви
                    - Перчатки и рукавицы широком ассортименте
                    - Хозяйственные товары
                     
                    Одежда специального назначения – неотъемлемый атрибут создания безопасных условий труда. Ее основное назначение – защита работника от всевозможных негативных факторов среды, начиная от холода и ветра, и заканчивая механическими и термическими повреждениями. Компания «ТҰЛПАР» предлагает большой выбор спецодежды в Алматы для работников различных сфер деятельности. У нас можно купить спецодежду, отвечающую официальным нормативам и стандартам.
                     
                    Мы предлагаем большой выбор одежды и спецобуви для представителей разных профессий и рода занятий. Для придания униформе отличительных признаков и поддержания корпоративного стиля выполняем нанесение логотипов методом шелкографии, термопереноса и вышивки. Заказать рабочие комплекты, купить спецобувь и СИЗ по доступной цене можно по телефону или через оформление покупки в интернет-магазине.
                </p>
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


@section('seo_side')
    <title>Tulpar</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="К">
    <meta property="og:description" content="">
    <meta property="og:image" content="/assets/img/logo.svg">
    <meta property="og:image:width" content="100">
    <meta property="og:image:height" content="50">
@endsection
