@extends('layouts.app')

@section('content')

    <main id="main-product">
        <div class="container-fluid">
            <section class="product-page" id="product-page">
                <button class="button button-back">
                    <i class="icon icon-arrow-left-back"></i>
                    Назад
                </button>
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="/" class="text-gray text-xs text-regular text-underline">Главная</a></li>
                        <li><a href="#" class="text-gray text-xs text-regular text-underline">Каталог</a></li>
                        @php
                            $type = \App\Models\Service::find($post->type);
                            $parent_type = \App\Models\Service::find($type->parent_id);
                        @endphp
                        <li><a href="#" class="text-gray text-xs text-regular text-underline">{{ $parent_type->title }}</a></li>
                        <li><a href="#" class="text-gray text-xs text-regular text-underline">{{ $type->title }}</a></li>
                        <li><a href="#" class="text-gray text-xs text-regular">{{ $post->title }}</a></li>
                    </ul>
                </div>
                <div class="product-block">
                    <div class="product-slider-image">
                        <!-- Slider main wrapper -->
                        <div class="swiper-container-wrapper">
                            <!-- Slider main container -->
                            <div class="swiper-container gallery-top">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/tulpar-shop/assets/img/slider-image-2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/tulpar-shop/assets/img/slider-image-3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/tulpar-shop/assets/img/slider-image-4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/tulpar-shop/assets/img/slider-image-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Slider thumbnail container -->
                            <div class="swiper-container gallery-thumbs">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <img src="/tulpar-shop/assets/img/slider-image-1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/tulpar-shop/assets/img/slider-image-2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/tulpar-shop/assets/img/slider-image-3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/tulpar-shop/assets/img/slider-image-4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/tulpar-shop/assets/img/slider-image-5.jpg" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-text">
                        <ul class="category-list">
                            <li>
                                <h3 class="category text text-orange text-medium text-xs text-uppercase">
                                    {{ $parent_type->title }}
                                </h3>
                            </li>
                            <li>
                                <h3 class="category text text-orange text-medium text-xs text-uppercase">
                                    {{ $type->title }}
                                </h3>
                            </li>
                        </ul>
                        <h1 class="title text text-semibold text-4xl">
                            {{ $post->title }}
                        </h1>
                        <button class="button button-transparent -gray">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 21L12 16L5 21V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H17C17.5304 3 18.0391 3.21071 18.4142 3.58579C18.7893 3.96086 19 4.46957 19 5V21Z" stroke="#6F7893" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Добавить в избранное
                        </button>
                        <div class="description">
                            <h2 class="title text text-xl text-semibold">О товаре</h2>
                            <div class="text text-base text-regular">
                                <p>{{ $post->text }}</p>
                            </div>
                        </div>
                        <div class="size-count">
                            <div class="select">
                                <select name="" id="">
                                    <option value="1">Размер 52-XL</option>
                                    <option value="2">Размер 50-M</option>
                                </select>
                            </div>
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
                        <div class="card card-gray-light">
                            <div class="price">
                                <p class="price-new text-xl text-bold text-brand">
                                    {{ number_format($post->cost, 0, '', ' ')  }}&#8376;
                                </p>
                                <div class="price-old">
                                    <p class="text-sm text-regular text-gray text-line-through">{{ $post->cost+($post->cost*0.12) }}&#8376;</p>
                                    <span class="price-sale text-xs text-regular text-orange">-12%</span>
                                </div>
                            </div>
                            <button class="button button-brand">В корзину</button>
                            <button class="button button-green">Купить сейчас</button>
                        </div>
                        <div class="characteristic">
                            <h2 class="title text text-xl text-semibold">Характеристика</h2>
                            <div class="characteristic-block">
                                @if($post->model != '')
                                    <div class="characteristic-item">
                                        <p class="text text-gray text-sm text-regular">
                                           Модель :<span class="text text-sm text-medium">{{ $post->model }}</span>
                                        </p>
                                    </div>
                                @endif

                                @if($post->material != '')
                                    <div class="characteristic-item">
                                        <p class="text text-gray text-sm text-regular">
                                            Материал :<span class="text text-sm text-medium"> {{ $post->material }}</span>
                                        </p>
                                    </div>
                                @endif


                                @if($post->color != '')
                                    <div class="characteristic-item">
                                        <p class="text text-gray text-sm text-regular">
                                            Цвет :<span class="text text-sm text-medium">{{ $post->color }}</span>
                                        </p>
                                    </div>
                                @endif


                                @if($post->size != '')
                                    <div class="characteristic-item">
                                        <p class="text text-gray text-sm text-regular">
                                            Размеры :<span class="text text-sm text-medium">{{ $post->size }}</span>
                                        </p>
                                    </div>
                                @endif

                                @if($post->height != '')
                                    <div class="characteristic-item">
                                        <p class="text text-gray text-sm text-regular">
                                            Рост  :<span class="text text-sm text-medium"> {{ $post->height }}</span>
                                        </p>
                                    </div>
                                @endif

                                @if($post->season != '')
                                    <div class="characteristic-item">
                                        <p class="text text-gray text-sm text-regular">
                                            Сезон :<span class="text text-sm text-medium"> {{ $post->season }}</span>
                                        </p>
                                    </div>
                                @endif

                                @if($post->protection != '')
                                    <div class="characteristic-item">
                                        <p class="text text-gray text-sm text-regular">
                                            Защита :<span class="text text-sm text-medium"> {{ $post->protection }}</span>
                                        </p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper product swiper-product">
                    <h3 class="title text text-2xl text-bold">Похожие</h3>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide product-item">
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
                        <div class="swiper-slide product-item">
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
                        <div class="swiper-slide product-item">
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
                        <div class="swiper-slide product-item">
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
                        <div class="swiper-slide product-item">
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
                        <div class="swiper-slide product-item">
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
        </div>
    </main>

@endsection


@section('seo_side')
    <title>{{ $post->title }}</title>
    <meta name="description" content="{{ $post->meta_description }}">
    <meta name="keywords" content="{{ $post->meta_keywords }}">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ $post->meta_description }}">
    <meta property="og:image" content="/{{ $post->photo }}">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="300">
@endsection
