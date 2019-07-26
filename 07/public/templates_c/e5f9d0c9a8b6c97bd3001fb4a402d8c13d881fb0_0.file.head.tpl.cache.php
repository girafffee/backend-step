<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-26 23:29:33
  from '/var/www/clients/client13/web15/web/07/resources/view/mydesign/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d3b62ad2f7f44_10128458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f9d0c9a8b6c97bd3001fb4a402d8c13d881fb0' => 
    array (
      0 => '/var/www/clients/client13/web15/web/07/resources/view/mydesign/head.tpl',
      1 => 1564172971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3b62ad2f7f44_10128458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10867550525d3b62ad2efc97_91578301';
?>
<head>
		<meta name="description" content="Описание страницы"/>
		<meta name="keywords" content="Ключевые слова страницы"/>
		<meta name="author" content="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'author');?>
"/>
		<meta property="og:locale" content="ru_RU"/>
		<meta charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
"/>
		<meta property="og:type" content="article"/>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="/public/css/mystyle.css">

		<title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>
</head><?php }
}
