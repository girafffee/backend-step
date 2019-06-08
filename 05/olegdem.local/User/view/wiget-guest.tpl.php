<nav style="text-align: right; margin-right: 10px">
    <ul style="list-style: none">
        <li><a href="<?= \User\RouteUser::getInstance()->getLoginLink(); ?>">Войти</a></li>
        <li><a href="<?= \User\RouteUser::getInstance()->getRegisterLink(); ?>">Регистрация</a></li>
        <li><a href="<?= \User\RouteUser::getInstance()->getRestoreLink(); ?>">Востановить пароль</a></li>
    </ul>
</nav>
<?php
