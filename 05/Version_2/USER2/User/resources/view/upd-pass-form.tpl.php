<!--<div class="form">
    <div class="tab-content">
        <h1>Введите новый пароль:</h1>
        <form action="<?/*= \App\RouteUser::getInstance()->getLoginLink(); */?>" method="post">
            <input type="hidden" name="doUserAction" value="updatePassword">
            <input type="hidden" name="email" value="<?/*=\App\ControllerUser::getInstance()->sessionEmail();*/?>">

            <fieldset disabled>
                <div class="field-wrap form-group">
                    <input name="emailView" type="email" disabled value="<?/*=\App\ControllerUser::getInstance()->sessionEmail();*/?>"/>
                </div>
            </fieldset>

            <div class="field-wrap">
                <label>
                    Придумайте пароль<span class="req">*</span>
                </label>
                <input name="pswd" type="password" required autocomplete="off"/>
            </div>
            <div class="field-wrap">
                <label>
                    Повторите пароль<span class="req">*</span>
                </label>
                <input name="pswd1" type="password" required autocomplete="off"/>
            </div>

            <button type="submit" class="button button-block"/>Сменить</button>

        </form>

    </div>
</div>
-->
<div class="container" style="width: 450px">
    <h2>Введите новый пароль:</h2>
    <form name="contact-form" method="post" action="<?=\App\RouteUser::getInstance()->getLoginLink();?>">
        <input type="hidden" name="doUserAction" value="updatePassword">
        <input type="hidden" name="email" value="<?=\App\ControllerUser::getInstance()->sessionEmail();?>">

        <fieldset disabled>
            <div class="form-group">
                <input name="emailView" type="email" class="form-control" disabled value="<?=\App\ControllerUser::getInstance()->sessionEmail();?>"/>
            </div>
        </fieldset>

        <div class="form-group">
            <input type="password" name="pswd" class="form-control" required="required" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" name="pswd1" class="form-control" required="required" placeholder="Repeat Password">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-submit" value="Сменить">
        </div>
    </form>
</div>

