@extends('layouts.app')

@section('content')

    <section class="hero" id="hero">
        <div class="container">
            <div class="left-block">
                <img src="./assets/img/hero-0.png" alt="">
            </div>
            <div class="right-block">
                <h1 class="title text-4xl">
                    Спасибо за вашу заявку!
                </h1>
                <p class="text text-lg ">
                    Ваша заявка принята и будет обработана в ближайшее время.
                </p>
                <a href="https://wa.me/77085550848?text=Здравствуйте,%20пишу%20из%20сайта%20neurorehab.kz" target="_blank" class="btn btn-primary text-base">Написать на ватсап</a>
            </div>
        </div>
    </section>

@endsection
