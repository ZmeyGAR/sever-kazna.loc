@extends('layouts.app')


@section('content')
    <section class="hero">
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
                <button class="button js-getConsultationForm">
                    Получить консультацию
                </button>
            </div>

            <ul class="hero__benefits">
                <li class="hero__benefits-item hero__benefits-item--clock">
                    Быстро
                </li>
                <li class="hero__benefits-item hero__benefits-item--star">
                    Удобно
                </li>
                <li class="hero__benefits-item hero__benefits-item--shield">
                    Безопасно
                </li>
                <li class="hero__benefits-item hero__benefits-item--money-bag">
                    Выгодно
                </li>
            </ul>
        </div>

        <div class="hero__banner">
            <picture>
                <source srcset="../../img/hero_banner_no_img.png" media="(max-width: 567px )">
                <source srcset="../../img/hero_banner.png" media="(min-width: 568px )">
                <img src="../../img/hero_banner.png" alt="Баннер">
            </picture>
        </div>
    </section>

    <section class="info-1">
        <h2 class="info-1__title">
            <span class="info-1__title-line info-1__title-line--1">4 ЗАКОННЫХ СПОСОБА</span>
            <span class="info-1__title-line info-1__title-line--2">ИСПОЛЬЗОВАТЬ МАТКАПИТАЛ</span>
            <span class="info-1__title-line info-1__title-line--3">СРАЗУ, ПОСЛЕ РОЖДЕНИЯ РЕБЁНКА :</span>
        </h2>


        <div class="info-1__container info-1__content info-1-content">
            <div class="info-1-content__banner">
                <picture>
                    <img src="../../img/info-1-banner.jpg" alt="Счастливая семья под крышей">
                </picture>
            </div>
            <div class="info-1-content__text">
                <ul class="info-1-content__list">
                    <li class="info-1-content__item">
                        <div>Купить квартиру <span>или ее часть (долю)</span></div>
                    </li>
                    <li class="info-1-content__item">
                        <div>Купить дом <span>или ее часть (долю)</span></div>
                    </li>
                    <li class="info-1-content__item">
                        <div>Построить жилой дом</div>
                    </li>
                    <li class="info-1-content__item">
                        <div>
                            Купить квартиру в строящемся доме <span>по Договору долевого
                                участия;</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="info-1__footer info-1-footer">
            <div class="info-1-footer__column info-1-footer__column--left">
                <h3 class="info-1-footer__title">
                    Мы проверим:
                </h3>
                <span class="info-1-footer__subtitle">Проверка сделок происходит <br>на всей территории России.</span>
            </div>
            <div class="info-1-footer__column">

                <ul>
                    <li>не находится ли жилье в залоге или под арестом</li>
                    <li>не является ли продавец банкротом</li>
                    <li>сверяем документы объекта недвижимости со сведениями, указанными в официальных реестрах</li>
                    <li>напрямую взаимодействуем с ПФР и МФЦ</li>
                </ul>
            </div>
        </div>

    </section>

    <section class="info-2">
        <div class="info-2__container">
            <div class="info-2__column info-2__column--left">
                <div class="info-2__subcolumn">
                    <h2 class="info-2__title">
                        Алгоритм работы
                        <span>КПК «Северная Казна»</span>
                    </h2>
                    <p>
                        Вся деятельность происходит только в соответствии <br>с Федеральным Законом №190-ФЗ
                    </p>
                    <p> Полное юридическое сопровождение</p>
                </div>
                <div class="info-2__subcolumn">
                    <picture class="info-2__banner">
                        <img src="../../img/info-2-banner.png" alt="Девушка менеджер">
                        <span class="info-2__banner-msg">
                            Доверяйте Ваши
                            документы
                            и денежные средства
                            только проверенным
                            организациям
                        </span>
                    </picture>
                </div>
            </div>
            <div class="info-2__column">
                <ul class="info-2__list">
                    <li class="info-2__item">
                        Сбор необходимых документов,
                        обработка и их оформление</li>
                    <li class="info-2__item">
                        Заключение договора
                        займа
                    </li>
                    <li class="info-2__item">
                        Регистрация договора
                        купли-продажи
                        недвижимости
                    </li>
                    <li class="info-2__item">
                        Подача заявления в ПФР
                        (Пенсионный Фонд)
                    </li>
                    <li class="info-2__item">
                        Погашения займа средствами
                        из Материнского Сертификата
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="info-3">
        <h2 class="info-3__title">
            <span>
                Кредитный потребительский
                кооператив (КПК)
            </span>
        </h2>

        <div class="info-3__container">
            <div class="info-3__content">

                <picture>
                    <img src="../../img/info-3-banner.png" alt="Девушка менеджер">
                </picture>

                <p>Некоммерческая организация, специализирующаяся на финансовой взаимопомощи путём предоставления
                    ссудо-сберегательных услуг своим членам. </p>

                <p>Образуются для взаимного кредитования и сбережения денежных средств своих членов целью которой является
                    оказание сберегательных услуг (приём вкладов) и услуг по выдаче займов своим участникам (пайщикам) под
                    проценты.</p>

                <p>КПК является добровольным объединением граждан, созданным для организации услуг финансовой взаимопомощи
                    друг другу.</p>

                <p>Согласно Устава КПК «Северная Казна» Целями деятельности Кооператива являются: удовлетворение
                    потребностей членов Кооператива в финансовой взаимопомощи, обес-печение финансовой поддержки своих
                    членов, распространение идей, принципов и опыта кредитной потребительской кооперации.</p>

                <p>КПК «Северная Казна», зарегистрировано в установленном законом порядке, дата государственной регистрации
                    29.10.2014 г, состоит в СРО Кредитных Кооперативов – Союз СРО «Национальное содружество кредитных
                    кооперативов «Содействие», № в реестре чле-нов СРО СЗ-0284 от 26.11.2020г.</p>
            </div>
        </div>
    </section>
@endsection
