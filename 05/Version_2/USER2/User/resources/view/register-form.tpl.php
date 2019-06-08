<div class="container" style="width: 450px">
    <div class="text-center">
        <h2>Форма регистрации:</h2>
    </div>
    <form action="<?= \App\RouteUser::getInstance()->getRegisterLink(); ?>" method="post">
        <input type="hidden" name="doUserAction" value="registerCreate">

        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Email" value="<?=(isset($data['email']) ? $data['email'] : '') ?>"/>
        </div>

        <div class="form-group">
            <input type="password" name="pswd" class="form-control" required="required" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" name="pswd1" class="form-control" required="required" placeholder="Repeat Password">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-submit" value="отправить">
        </div>
    </form>
</div>
