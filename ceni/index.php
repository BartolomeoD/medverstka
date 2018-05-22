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
            <a href="/" class="link">Главная</a> > Цены
        </div>
    </section>
    <section class="another-content">
        <div class="content">
            <div class="left">
                <div class="services-list">
                    <h2>Цены</h2>
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
                <div class="services">
                <? echo $priceList; ?>
                </div>
            </div>
        </div>
    </section>
    <? include("../components/blue-form.php"); ?>
    <? include("../components/bottom-nav.php"); ?>
    <? include("../components/footer.php"); ?>
</body>
</html>