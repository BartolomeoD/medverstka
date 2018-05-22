<footer>
        <div class="content">
            <div>
                <a href="/" class="logo">
                    <img src="dist/img/logo.png" alt="">
                    <div class="text">
                        <h2>Сатурн</h2>
                        <p>Медицинский центр</p>
                    </div>
                </a>
                <div class="data">
                    ИНН 3465734658273894 &nbsp;&nbsp; ОГРН 267564387562
                </div>
            </div>
            <div>
                <div class="center">
                    <div>
                        <div class="icon">
                            <div class="icon-location-outline"></div>
                        </div>
                        <div class="text">
                            <? echo $address; ?>
                            <br>
                            <span class="red">м.</span> <? echo $metro; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="email:<? echo $email; ?>" class="email"><? echo $email; ?></a>
            </div>
            <div>
                <div class="right">
                    <a href="" class="phone">
                        <? echo $headerPhone; ?>
                    </a>
                </div>
            </div>
        </div>
    </footer>

<div class="modal" id="success">
	<h2>Спасибо</h2>
	<p>Мы свяжемся с вами в скором времени</p>
</div>
<div class="modal" id="call-modal">
	<form action="" url=".call-me-post.php">
		<h2>Заказать звонок</h2>
		<p>Введите Ваши данные в форму ниже и мы свяжемся с Вами, чтобы ответить на все Ваши вопросы</p>
		<input type="text" name="phone" placeholder="Ваш телефон" required="" class="input-text phone-input" maxlength="18">
		<button class="yellow-button">Отправить</button>
	</form>
</div>
<script src="dist/js/main.js"></script>