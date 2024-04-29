<?php
session_start();
?>

<section class="main-content auth-content">

    <div class="auth">
        <h1>Регистрация на сайте</h1>
        <h3>Введите учетные данные</h3>
        <form action="functions/reg-scr.php" method="POST">
            <label for="login-reg">
                  Ваш логин:
              </label>
            <input type="text"
                   id="login-reg"
                   name="login-reg"
                   placeholder="Символы латиницы, цифры и знак _" required
                   minlength="6" maxlength="20">
 
            <label for="password">
                  Ваш пароль:
              </label>
            <input type="password"
                   id="password"
                   name="password"
                   placeholder="Минимум 8 символов, состоящих из символов латиницы, цифр и !_?" required
                   minlength="8" maxlength="20">

                <h3>Введите сведения о себе:</h3>
            <label for="login-reg">
                Имя:
            </label>
            <input type="name"
                   id="name"
                   name="name"
                   placeholder="Только символы кириллицы" required>
            <label for="first_name">
                Фамилия:
            </label>
            <input type="text"
                   id="first_name"
                   name="first_name"
                   placeholder="Только символы кириллицы" required>
            <label for="phone">
                Номер телефона:
            </label>
            <input type="text"
                   id="phone"
                   name="phone"
                   placeholder="Номер телефона, начиная с 7" required
                   minlength="11" maxlength="11">
            <label for="email">
                Адрес электронной почты:
            </label>
            <input type="text"
                   id="email"
                   name="email"
                   placeholder="Адрес почты" required>
            <div class="wrap">
                <button type="submit">
                    Регистрация
                </button>
            </div>
        </form>
    </div>
            
</section>