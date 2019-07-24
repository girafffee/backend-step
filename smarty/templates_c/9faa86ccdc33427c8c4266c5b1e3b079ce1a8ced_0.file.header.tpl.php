<?php
/* Smarty version 3.1.33, created on 2019-07-21 14:09:05
  from '/var/www/clients/client13/web15/web/smarty/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3447d1c8c342_45214950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9faa86ccdc33427c8c4266c5b1e3b079ce1a8ced' => 
    array (
      0 => '/var/www/clients/client13/web15/web/smarty/templates/header.tpl',
      1 => 1563705305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navmenu.tpl' => 1,
    'file:pre-title.tpl' => 1,
  ),
),false)) {
function content_5d3447d1c8c342_45214950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "main.conf", null, 0);
?>

<!doctype html>
<html lang="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'lang');?>
">
<head>
    <meta charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico">
    <title>
        <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'main_title');?>

    </title>
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="author" content="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'author');?>
" />
    <meta property="og:site_name" content="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'main_title');?>
" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="_css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/fancybox.css">
    <link rel="stylesheet" href="_css/styles.css">
    <link rel="stylesheet" href="_css/responsive.css">
</head>
<body>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "main.conf", "header", 0);
?>

<header class="main-header">
    <div class="container-fluid">
        <div class="logo">
            <a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'href_logo');?>
"><img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'img_logo');?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'alt_logo');?>
"></a>
        </div>
    <?php $_smarty_tpl->_subTemplateRender("file:navmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="menu-button">
        <span></span>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:pre-title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</header><?php }
}
