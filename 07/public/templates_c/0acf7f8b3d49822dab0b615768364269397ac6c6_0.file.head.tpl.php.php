<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-21 16:59:02
  from '/var/www/clients/client13/web15/web/07/resources/view/mydesign/head.tpl.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d346fa61a4130_27570353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0acf7f8b3d49822dab0b615768364269397ac6c6' => 
    array (
      0 => '/var/www/clients/client13/web15/web/07/resources/view/mydesign/head.tpl.php',
      1 => 1560030152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d346fa61a4130_27570353 (Smarty_Internal_Template $_smarty_tpl) {
?>  	<head>
		<meta name="description" content="Описание страницы"/>
		<meta name="keywords" content="Ключевые слова страницы"/>
		<meta name="autor" content="Oleksandr Ivanenko"/>
		<meta property="og:locale" content="ru_RU"/>
		<meta charset="utf-8"/>
		<meta property="og:type" content="article"/>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="/public/css/mystyle.css">

		<title><?php echo '<?=';?>
(isset($data['title'])?$data['title']:' Welocme title')<?php echo '?>';?>
</title>
	</head><?php }
}
