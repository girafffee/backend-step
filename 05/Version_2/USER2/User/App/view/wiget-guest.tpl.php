<nav style="text-align: right; margin-right: 10px">
    <ul style="list-style: none">
        <li><a href="<?= \App\RouteUser::getInstance()->getLoginLink(); ?>">Войти</a></li>
        <li><a href="<?= \App\RouteUser::getInstance()->getRegisterLink(); ?>">Регистрация</a></li>
    </ul>
</nav>
<?php
