

<div class="<?= $this->prefix_kebab ?>div">
<div class="<?= $this->prefix_kebab ?>content">
    <div class="<?= $this->prefix_kebab ?>container">
        <div class="<?= $this->prefix_kebab ?>form-section">
            <div class="<?= $this->prefix_kebab ?>form-content-sign">
                <div class="<?= $this->prefix_kebab ?>input-item">
                    <div class="-label"></div>
                    <div class="-input">
                        <ul class="-tabs">
                            <li class="-tabs-item -tabs-item-active">Войти</li>
                            <li><a href="https://www.promkod.ru/register" class="-tabs-item -links">Зарегистрироваться</a></li>
                        </ul>
                    </div>
                </div>
                <form method="POST" action="https://www.promkod.ru/login">
                    <div class="<?= $this->prefix_kebab ?>input-item">
                        <div class="-label">
                            <label for="email">Электронная почта</label>
                        </div>
                        <div class="-input">
                            <input id="email" type="email" name="email" value="" >
                            <div class="-validation-error">Введите e-mail</div>
                        </div>
                    </div>
                    <div class="<?= $this->prefix_kebab ?>input-item">
                        <div class="-label">
                            <label for="password">Пароль</label>
                        </div>
                        <div class="-input">
                            <input id="password" type="password" name="password" >
                        </div>
                    </div>
                    <div class="<?= $this->prefix_kebab ?>input-item">
                        <div class="-label">
                        </div>
                        <div class="-button -forgot">
                            <button type="submit" class="-form-button">Войти</button>
                            <div class="button-message"><a href="#" data-popup-toggle="forgot-password" data-endpoint="https://www.promkod.ru/popup/forgot-password" rel="nofollow"> Забыли пароль?</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>