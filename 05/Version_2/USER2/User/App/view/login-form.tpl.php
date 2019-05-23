<div class="container" style="width: 300px">
    <div class="text-center">
        <p>Чтоб войти введите Email и пароль:</p>
    </div>
    <form action="<?= \App\RouteUser::getInstance()->getLoginLink(); ?>" method="post" class="form-group">
        <input type="hidden" name="doUserAction" value="loginInto" class="form-control">
        <label style="margin-top: 5px">E-mail:</label>
        <input type="text" class="form-control" name="email">
        <label style="margin-top: 5px">Пароль:</label>
        <input type="password" class="form-control" name="pswd">
        <button type="submit" class="btn btn-primary" style="margin-top: 15px">Войти</button>
        <ul style="list-style: none; float: right; padding-top: 12%;">
            <li><a href="<?= \App\RouteUser::getInstance()->getNewPassLink(); ?>">Забыли пароль?</a></li>
        </ul>
    </form>
</div>
