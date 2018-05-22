<?php 
include("../base_info.php");
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <? include("../components/head.php"); ?>
    <meta name="description" content=""/>
	<title>Title</title> 
</head>
<body>
<? include("../components/header.php"); ?>
    <section class="breadcrumbs">
        <div class="content">
            <a href="/" class="link">Главная</a> > О нас
        </div>
    </section>
    <section class="another-content">
        <div class="content">
            <div class="left">
                <div class="services-list">
                    <h2>О нас</h2>
                    <div class="line blue"></div>
                    <div class="line yellow"></div>
                    <ul>
                        <? echo $smallServiceList; ?>
                    </ul>
                </div>
                <div class="advantages-wrapper">
                    <div class="advantage">
                        <div class="icon">
                            <div class="icon-calendar"></div>
                        </div>
                        <div class="text">
                            1 день получение документов
                            <br> в день обращения
                        </div>
                    </div>
                    <div class="advantage">
                        <div class="icon">
                            0
                        </div>
                        <div class="text">
                            0 рублей
                            <br> предоплата
                        </div>
                    </div>
                    <div class="advantage">
                        <div class="icon">
                            %
                        </div>
                        <div class="text">
                            Скидки
                            <br> от 2-х штук
                        </div>
                    </div>
                    <div class="advantage">
                        <div class="icon">
                            ₽
                        </div>
                        <div class="text">
                            цены ниже рынка
                            <br> на 10-20%
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="contacts">
                    <h2>О медицинском центре</h2>
                    <div class="block">
                        <div class="text"> text </div>
                        <div class="separator"></div>
                        <img src="dist/img/medcenter.jpg" alt="">
                    </div>
                    <div class="block">
                        <img class="zoom" src="dist/img/license_1.jpg" alt="">
                        <div class="separator"></div>
                        <img class="zoom" src="dist/img/license_2.jpg" alt="">
                        <div class="separator"></div>
                        <img class="zoom" src="dist/img/license_3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <? include("../components/blue-form.php"); ?>
    <? include("../components/bottom-nav.php"); ?>
    <? include("../components/footer.php"); ?>
</body>
</html>