<div class="container" style="width: 450px">
    <div class="text-center">
        <h2>Чтоб войти введите Email и пароль:</h2>
    </div>
    <form action="<?= \App\RouteUser::getInstance()->getLoginLink(); ?>" method="post" class="form-group">
        <input type="hidden" name="doUserAction" value="loginInto" class="form-control">

        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Email"/>
        </div>

        <div class="form-group">
            <input type="password" name="pswd" class="form-control" required="required" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-submit" value="Войти">
        </div>
        <ul style="list-style: none; float: right; padding-top: 12%;">
            <li><a href="<?= \App\RouteUser::getInstance()->getNewPassLink(); ?>">Забыли пароль?</a></li>
        </ul>
    </form>
</div>
