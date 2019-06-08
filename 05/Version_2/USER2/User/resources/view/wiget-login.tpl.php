<?php namespace App;

?>
<header id="header">

    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html">
                    <h1><img src="https://www.php.net/images/logos/new-php-logo.svg" width="208" height="60" alt="logo"></h1>
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?=$_SERVER['PHP_SELF']?>">Home</a></li>
                    
                      
                    
                    
                    <li><a href="shortcodes.html ">Shortcodes</a></li>
                    <li class="dropdown">
                        <a href="<?=$_SERVER['PHP_SELF']?>">
                        <?=$_SESSION['email']?><i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="#">Личный кабинет</a></li>
                            <?php if (ControllerUser::getInstance()->isUserRole(['admin', 'car_editor'])) { ?>
                                <li><a href="<?=RouteUser::getInstance()->getAdminPanel();?>">Панель редактирования</a></li>
                            <?php } ?>
                            <li><a href="<?=RouteUser::getInstance()->getLogOutLink(); ?>">Выйти</a></li>
                            
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</header>
<?php
