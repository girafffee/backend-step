<div class="container" style="width: 300px">

    <form action="<?= \App\RouteUser::getInstance()->getLoginLink(); ?>" method="post">
        <input type="hidden" name="doUserAction" value="updatePassword">
        <input type="hidden" name="email" value="<?=\App\ControllerUser::getInstance()->sessionEmail();?>">
        <fieldset disabled>
            <div class="form-group">
                <label style="margin-top: 5px">E-mail:</label>
                <input type="text" class="form-control" name="emailView" value="<?=\App\ControllerUser::getInstance()->sessionEmail();?>">
            </div>
        </fieldset>
        <div class="text-center">
            Введите новый пароль:
        </div>
        <label style="margin-top: 5px">Пароль:</label>
        <input type="password" class="form-control" name="pswd">
        <label style="margin-top: 5px">Подтверждение пароля:</label>
        <input type="password" class="form-control" name="pswd1">
        <button type="submit" class="btn btn-primary" style="margin-top: 15px">Сохранить</button>
    </form>
</div>
