<div class="container" style="width: 300px">
    <div class="text-center">
        Восстановление пароля:
    </div>
    <form action="<?= \User\RouteUser::getInstance()->getRestoreLink(); ?>" method="post">
        <input type="hidden" name="doUserAction" value="restoreEmail">
        <label style="margin-top: 5px">E-mail:</label>
        <input type="text" class="form-control" name="email">
        <button type="submit" class="btn btn-primary" style="margin-top: 15px">Восстановить</button>
    </form>
</div>

