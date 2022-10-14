@extends('layouts.app')


@section('content')
    <section class="hero">
        {{-- <div class="hero__container"> --}}
        <div class="hero__content">
            <h1 class="hero__title">
                Получите займ под
                <span class="strong">МАТЕРИНСКИЙ КАПИТАЛ</span>
            </h1>

            <ol class="hero__list">
                <li>Выдаем деньги в день подписания договора займа</li>
                <li>Не дожидаясь 3-х летия ребенка</li>
                <li>Займ погашает Пенсионный фонд РФ средствами Вашего сертификата</li>
            </ol>

            <div class="hero__btns">
                <button class="button">Получить консультацию</button>
            </div>
        </div>

        <div class="hero__banner">
            <picture>
                <img src="../../img/hero_banner.png" alt="Баннер">
            </picture>
        </div>
        {{-- </div> --}}
    </section>
@endsection
