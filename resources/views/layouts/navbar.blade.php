@php
    $names = array("welcome", "category");
    //dd(in_array(Illuminate\Support\Facades\Route::currentRouteName(),$names))
@endphp
<aside class="aside-block @if(!in_array(Illuminate\Support\Facades\Route::currentRouteName(),$names)) hidden @endif">
    <div class="card">
        <a href="#" class="logo">
            <img src="/tulpar-shop/assets/img/logo.svg" alt="Tulpar shop logo">
        </a>
    </div>
    <button class="button aside-hover-close button-close"></button>
    <div class="aside-menu">
        <div class="aside-menu__link" onmouseenter="toggleBodyOverflow(true)" onmouseleave="toggleBodyOverflow(false)">
            <div class="aside-menu__name">
                <i class="icon icon-new"></i>
                <p class="text text-regular text-base">Новинки</p>
            </div>
            <i class="icon icon-arrow-right"></i>
            <div class="aside-submenu">
                <div class="card">
                    <a href="#" class="aside-submenu__link">
                        <p class="text text-base text-medium">Для сварщика</p>
                        <span class="text text-gray text-sm text-regular">・788</span>
                    </a>
                    <a href="#" class="aside-submenu__link">
                        <p class="text text-base text-medium">Зимняя спецодежда</p>
                        <span class="text text-gray text-sm text-regular">・16</span>
                    </a>
                    <a href="#" class="aside-submenu__link">
                        <p class="text text-base text-medium">Летняя спецодежда</p>
                        <span class="text text-gray text-sm text-regular">・16</span>
                    </a>
                    <a href="#" class="aside-submenu__link">
                        <p class="text text-base text-medium">Влагозащитная одежда</p>
                        <span class="text text-gray text-sm text-regular">・16</span>
                    </a>
                    <a href="#" class="aside-submenu__link">
                        <p class="text text-base text-medium">Одежда для охранных структур</p>
                        <span class="text text-gray text-sm text-regular">・16</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="aside-menu__link" onmouseenter="toggleBodyOverflow(true)" onmouseleave="toggleBodyOverflow(false)">
            <div class="aside-menu__name">
                <i class="icon icon-sale"></i>
                <p class="text text-regular text-base">Товары по акции</p>
            </div>
            <i class="icon icon-arrow-right"></i>
            <div class="aside-submenu">
                <div class="card">
                    <a href="#" class="aside-submenu__link">
                        <p class="text text-base text-medium">Товары по акции Для сварщика</p>
                        <span class="text text-gray text-sm text-regular">・788</span>
                    </a>
                    <a href="#" class="aside-submenu__link">
                        <p class="text text-base text-medium">Товары по акции Зимняя спецодежда</p>
                        <span class="text text-gray text-sm text-regular">・16</span>
                    </a>
                    <a href="#" class="aside-submenu__link">
                        <p class="text text-base text-medium">Летняя спецодежда</p>
                        <span class="text text-gray text-sm text-regular">・16</span>
                    </a>
                    <a href="#" class="aside-submenu__link">
                        <p class="text text-base text-medium">Влагозащитная одежда</p>
                        <span class="text text-gray text-sm text-regular">・16</span>
                    </a>
                    <a href="#" class="aside-submenu__link">
                        <p class="text text-base text-medium">Одежда для охранных структур</p>
                        <span class="text text-gray text-sm text-regular">・16</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="aside-menu__link" onmouseenter="toggleBodyOverflow(true)" onmouseleave="toggleBodyOverflow(false)">
            <div class="aside-menu__name">
                <i class="icon icon-workwear"></i>
                <p class="text text-regular text-base">Спецодежда </p>
            </div>
            <i class="icon icon-arrow-right"></i>
            <div class="aside-submenu">
                <div class="card">
                     @foreach(\App\Models\Service::whereParentId(1)->get() as $key => $item)
                        <a href="/catalog/{{ $item->url }}" class="aside-submenu__link">
                            <p class="text text-base text-medium">{{ $item->title }}</p>
                            <span class="text text-gray text-sm text-regular">・{{ \App\Models\Post::where('type',$item->id)->count() }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="aside-menu__link" onmouseenter="toggleBodyOverflow(true)" onmouseleave="toggleBodyOverflow(false)">
            <div class="aside-menu__name">
                <i class="icon icon-ppe"></i>
                <p class="text text-regular text-base">СИЗ</p>
            </div>
            <i class="icon icon-arrow-right"></i>
            <div class="aside-submenu">
                <div class="card">
                    @foreach(\App\Models\Service::whereParentId(2)->get() as $key => $item)
                        <a href="/catalog/{{ $item->url }}" class="aside-submenu__link">
                            <p class="text text-base text-medium">{{ $item->title }}</p>
                            <span class="text text-gray text-sm text-regular">・{{ \App\Models\Post::where('type',$item->id)->count() }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="aside-menu__link" onmouseenter="toggleBodyOverflow(true)" onmouseleave="toggleBodyOverflow(false)">
            <div class="aside-menu__name">
                <i class="icon icon-safety-shoes"></i>
                <p class="text text-regular text-base">Спецобувь</p>
            </div>
            <i class="icon icon-arrow-right"></i>
            <div class="aside-submenu">
                <div class="card">
                    @foreach(\App\Models\Service::whereParentId(3)->get() as $key => $item)
                        <a href="/catalog/{{ $item->url }}" class="aside-submenu__link">
                            <p class="text text-base text-medium">{{ $item->title }}</p>
                            <span class="text text-gray text-sm text-regular">・{{ \App\Models\Post::where('type',$item->id)->count() }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="aside-menu__link" onmouseenter="toggleBodyOverflow(true)" onmouseleave="toggleBodyOverflow(false)">
            <div class="aside-menu__name">
                <i class="icon icon-gloves-mittens"></i>
                <p class="text text-regular text-base">Перчатки и рукавицы</p>
            </div>
            <i class="icon icon-arrow-right"></i>
            <div class="aside-submenu">
                <div class="card">
                    @foreach(\App\Models\Service::whereParentId(4)->get() as $key => $item)
                        <a href="/catalog/{{ $item->url }}" class="aside-submenu__link">
                            <p class="text text-base text-medium">{{ $item->title }}</p>
                            <span class="text text-gray text-sm text-regular">・{{ \App\Models\Post::where('type',$item->id)->count() }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="aside-menu__link -last" onmouseenter="toggleBodyOverflow(true)" onmouseleave="toggleBodyOverflow(false)">
            <div class="aside-menu__name">
                <p class="text text-regular text-base">Другие товары</p>
            </div>
        </div>
    </div>

</aside>
