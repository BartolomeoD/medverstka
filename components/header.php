<header>
        <div class="content">
            <div class="top">
                <a href="/" class="logo">
                    <img src="dist/img/logo.png" alt="">
                    <div class="text">
                        <h2>Сатурн</h2>
                        <p>Медицинский центр</p>
                    </div>
                </a>
                <div class="center">
                    <div>
                        <div class="icon">
                            <div class="icon-clock"></div>
                        </div>
                        <div class="text">
                            ежедневно с 8:00 до 21:00
                        </div>
                    </div>
                    <div>
                        <div class="icon">
                            <div class="icon-location-outline"></div>
                        </div>
                        <div class="text">
                            <? echo $address; ?>
                            <br>
                            <span class="red">м.</span>
                            <? echo $metro; ?>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <a href="" class="phone">
                        <? echo $headerPhone; ?>
                    </a>
                    <button class="call-me yellow-button open-call-form">Обратный звонок</button>
                </div>
            </div>
            <nav class="bot">
                <div class="mobile">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="desktop">
                    <a href="/">
                        <span> Главная</span>
                    </a>

                    <a href="/uslugi">
                        <span> Услуги</span>
                    </a>

                    <a href="/ceni">
                        <span>Цены</span>
                    </a>

                    <a href="/o-nas">
                        <span> О мед. центре</span>
                    </a>

                    <a href="/contacti">
                        <span>Контакты</span>
                    </a>
                </div>
            </nav>
        </div>
    </header>