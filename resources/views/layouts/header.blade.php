<header id="header" class="header">
    <div class="container-fluid">
        <div class="header-top">
            <div class="header-top__left">
                <a href="/" class="logo-mini">
                    <img src="/tulpar-shop/assets/img/logo.svg" alt="">
                </a>
                <a href="tel:+77075216693" class="call">
                    <p class="text text-regular text-lg">+7 707 521 66-93</p>
                    <span class="text text-regular text-xs text-gray">Звонок по телефону</span>
                </a>
            </div>
            <div class="header-top__right">
                <a href="/search" class="button button-search">
                    <i class="icon icon-search"></i>
                    <span class="text-xs text-gray">Поиск</span>
                </a>
                <a href="/login" class="button button-profile">
                    <i class="icon icon-profile"></i>
                    <span class="text-xs text-gray">Мой кабинет</span>
                </a>
            </div>
        </div>
        <div class="header-bottom">
            <nav class="header-nav">
                <ul class="header-nav__list">
                    <li><a href="/" class="nav-link text text-medium text-base">Главная</a></li>
                    <li><a href="/catalog" class="nav-link @if(Illuminate\Support\Facades\Route::currentRouteName() == 'category') active @endif text text-medium text-base">Каталог</a></li>
                    <li><a href="/about" class="nav-link @if(Illuminate\Support\Facades\Route::currentRouteName() == 'about') active @endif text text-medium text-base">О нас</a></li>
                    <li><a href="/contact" class="nav-link @if(Illuminate\Support\Facades\Route::currentRouteName() == 'contact') active @endif text text-medium text-base">Контакты</a></li>
                </ul>
            </nav>
            <button class="button cart button-cart">
                <p>В корзине</p>
                <span class="cart-count">0</span>
            </button>
            <button class="button button-close button-close-menu"></button>
        </div>
    </div>
</header>
