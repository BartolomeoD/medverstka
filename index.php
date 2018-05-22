<?php 
include("base_info.php");
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <? include("components/head.php"); ?>
    <meta name="description" content=""/>
	<title>Title</title> 
</head>

<body>
<? include("components/header.php"); ?>
    <section class="main-block">
        <div class="content">
            <div class="top-wrapper">
                <h1>Оформление Оформление Оформление Оформление Оформление
                    <span>в Ворнеже</span>
                </h1>
                <ul>
                    <li>
                        Без очередей
                    </li>
                    <li>
                        От 1 часа
                    </li>
                    <li>
                        Официально
                    </li>
                    <li>
                        Гарантия качества
                    </li>
                    <li>
                        Лучшая цена
                    </li>
                    <li>
                        С доставкой
                    </li>
                </ul>
            </div>
            <div class="phone-form">
                <div class="yellow-block">
                    Нужна медсправка или медкнижка?
                </div>
                <div class="desc">
                    Оставьте заявку, и в течении 5-15 минут оператор свяжется с Вами, ответ на все вопросы и сделает скидку до 20%
                </div>
                <form action="">
                    <input type="text" class="phone-input" placeholder="+7 (___) ___ - __ - __">
                    <button class="yellow-button">Отправить</button>
                </form>
            </div>
        </div>
    </section>
    <? include("components/advantages.php"); ?>
    <section class="services">
        <div class="content">
            <div class="services-list">
                <h2>Услуги</h2>
                <div class="line blue"></div>
                <div class="line yellow"></div>
                <ul>
                    <? echo $smallServiceList; ?>
                </ul>
            </div>
            <div class="service-card">
                <h3>Медицинские книжки</h3>
                <div class="wrapper">
                    <div class="text">
                        <div class="price">
                            <div> Цена</div>
                            <div class="blue-bubble">
                                1500 р.
                            </div>
                        </div>
                        <div class="desc">Позиционирование на рынке порождает креативный медиамикс, не считаясь с затратами. Диверсификация
                            бизнеса инновационна. Медиамикс отталкивает экспериментальный жизненный цикл продукции. Рекламная
                            заставка, как следует из вышесказанного, экономит связанный стратегический рыночный план. Таргетирование
                            переворачивает маркетинг. Мониторинг активности одновременно поддерживает традиционный канал.
                            Ассортиментная политика предприятия, как следует из вышесказанного, недостаточно усиливает эксклюзивный
                            жизненный цикл продукции. Стратегическое планирование, конечно, ускоряет медийный канал, используя
                            опыт предыдущих кампаний. Согласно ставшей уже классической работе Филипа Котлера, рекламная
                            поддержка переворачивает BTL, оптимизируя бюджеты.</div>

                    </div>
                    <div class="picture">
                        <img src="dist/img/medkniga.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <? include("components/how-we-works.php"); ?>
    <? include("components/why-trusts.php"); ?>
    <section class="comments">
        <div class="content">
            <h2> Что о нас говорят? </h2>
            <div class="circles">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="comments-wrapper carousel owl-carousel owl-theme">
                <div class="comment">
                    <div class="top">
                        <div class="name">Имя</div>
                        <div class="date">30 февраля 2018</div>
                    </div>
                    <div class="line"></div>
                    <div class="text">ыфвыыыыыыыыыыыыыыыыыыыыыыыыы ы </div>
                </div>
                <div class="comment">
                    <div class="top">
                        <div class="name">Имя</div>
                        <div class="date">30 февраля 2018</div>
                    </div>
                    <div class="line"></div>
                    <div class="text">ыфвыыыыыыыыыыыыыыыыыыыыыыыыы ы </div>
                </div>
                <div class="comment">
                    <div class="top">
                        <div class="name">Имя</div>
                        <div class="date">30 февраля 2018</div>
                    </div>
                    <div class="line"></div>
                    <div class="text">ыфвыыыыыыыыыыыыыыыыыыыыыыыыы ы </div>
                </div>
                <div class="comment">
                    <div class="top">
                        <div class="name">Имя</div>
                        <div class="date">30 февраля 2018</div>
                    </div>
                    <div class="line"></div>
                    <div class="text">ыфвыыыыыыыыыыыыыыыыыыыыыыыыы ы </div>
                </div>
            </div>
        </div>
    </section>
    <? include("components/blue-form.php"); ?>
    <? include("components/bottom-nav.php"); ?>
    <? include("components/footer.php"); ?>
</body>
</html>