<div class="container" style="width: 300px">
    <div class="text-center">
        Введите новый пароль:
    </div>
    <form action="<?= \App\RouteUser::getInstance()->getRegisterLink(); ?>" method="post">
        <input type="hidden" name="doUserAction" value="registerCreate">
        <fieldset disabled>
            <div class="form-group">
                <label style="margin-top: 5px">E-mail:</label>
                <input type="text" class="form-control" name="email">
            </div>
        </fieldset>
        <label style="margin-top: 5px">Пароль:</label>
        <input type="password" class="form-control" name="pswd">
        <label style="margin-top: 5px">Подтверждение пароля:</label>
        <input type="password" class="form-control" name="pswd1">
   <!--     <button type="submit" class="btn btn-primary" style="margin-top: 15px">Зарегистрироватся</button>-->
    </form>
</div>
