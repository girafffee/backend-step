<!--<div class="container" style="width: 300px">
    <div class="text-center">
        <p>Введите свой Email для подтверждения адреса:</p>
    </div>
    <form action="<?/*= \App\RouteUser::getInstance()->getCheckEmailLink(); */?>" method="post" class="form-group">
        <input type="hidden" name="doUserAction" value="checkEmail" class="form-control">
        <label style="margin-top: 5px">E-mail:</label>
        <input type="text" class="form-control" name="email">

        <button type="submit" class="btn btn-primary" style="margin-top: 15px">Отправить</button>

    </form>
</div>-->

<div class="form">
    <div class="tab-content">
        <h1>Введите свой Email для подтверждения адреса:</h1>
        <form action="<?= \App\RouteUser::getInstance()->getCheckEmailLink(); ?>" method="post">
            <input type="hidden" name="doUserAction" value="checkEmail">
            <div class="field-wrap">
                <label>
                    Email-адрес<span class="req">*</span>
                </label>
                <input name="email" type="email" required autocomplete="on" value="<?=(isset($data['email']) ? $data['email'] : '') ?>"/>
            </div>

            <button type="submit" class="button button-block"/>Отправить</button>
        </form>
    </div>
</div>
