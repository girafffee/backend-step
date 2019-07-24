<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-21 16:59:02
  from '/var/www/clients/client13/web15/web/07/resources/view/mydesign/header_home.tpl.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d346fa619e091_81521979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e172dc8a20ef0e4f8c18bdf8537779490b80ba93' => 
    array (
      0 => '/var/www/clients/client13/web15/web/07/resources/view/mydesign/header_home.tpl.php',
      1 => 1560076878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d346fa619e091_81521979 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="containerHeaderHome"  class="container-fluid">
	<header id="headerMain" class="container"><div class="row">
		<h1 id="siteLogo" class="col-lg-4"> <a href="<?php echo '<?=';?>
str_replace($_SERVER['PHP_SELF'], "", $_SERVER['PHP_SELF'])<?php echo '?>';?>
"> <?php echo '<?=';?>
(isset(\App\Config::$appSiteName)?\App\Config::$appSiteName:' Page title')<?php echo '?>';?>
 </a> </h1>

<nav id="menuMain" class="col-lg-8">		
<?php echo '<?=';?>
$data['mainMenu']<?php echo '?>';?>

</nav>

	<div></header>

	<div id="headerCaptions" class="text-center">
		<h2><?php echo '<?=';?>
(isset($data['pageTitle'])?$data['pageTitle']:' Page title')<?php echo '?>';?>
</h2>
		<p>Your Favourite Creative Agency Template </p>
		<a href="contact.html">Get Started</a>
	</div>
</div>
<?php }
}
