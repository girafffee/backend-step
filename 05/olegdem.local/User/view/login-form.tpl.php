<div class="container" style="width: 300px">
    <div class="text-center">
        Чтоб войти введите Email и пароль:
    </div>
    <form action="<?= \User\RouteUser::getInstance()->getLoginLink(); ?>" method="post">
        <input type="hidden" name="doUserAction" value="loginIn">
        <label style="margin-top: 5px">E-mail:</label>
        <input type="text" class="form-control" name="email">
        <label style="margin-top: 5px">Пароль:</label>
        <input type="password" class="form-control" name="pswd">
        <button type="submit" class="btn btn-primary" style="margin-top: 15px">Войти</button>
    </form>
</div>
