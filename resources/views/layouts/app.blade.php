<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('seo_side')
    <link rel="shortcut icon" href="/tulpar-shop/assets/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="/tulpar-shop/assets/css/style.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/tulpar-shop/assets/css/plugins/swiper/swiper-bundle.min.css">
    <title>Tulpar Shop</title>
</head>
<body>
<div class="wrapper">


    <div class="main">
        <div class="container">

            @include('layouts.navbar')


            <div class="main-block">

                @include('layouts.header')

                @yield('content')

            </div>
        </div>
    </div>


    @include('layouts.footer')


</div>
<script src="/tulpar-shop/assets/js/plugins/swiper/swiper-bundle.min.js"></script>
<script src="/tulpar-shop/assets/js/main.js"></script>
@yield('js_side')

<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Lighthouse') === false): ?>

<!-- Yandex.Metrika counter -->

<!-- /Yandex.Metrika counter -->



<!-- Google tag (gtag.js) -->

<!-- Google tag (gtag.js) -->

<?php endif; ?>
</body>
</html>
