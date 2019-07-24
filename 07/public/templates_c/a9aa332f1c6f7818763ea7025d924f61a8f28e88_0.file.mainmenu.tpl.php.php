<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-21 16:59:02
  from '/var/www/clients/client13/web15/web/07/resources/view/mydesign/mainmenu.tpl.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d346fa6195a63_44599880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9aa332f1c6f7818763ea7025d924f61a8f28e88' => 
    array (
      0 => '/var/www/clients/client13/web15/web/07/resources/view/mydesign/mainmenu.tpl.php',
      1 => 1560073544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d346fa6195a63_44599880 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
//var_dump($data);

echo \Kernel\Router::BuildItem($data, 0);
<?php echo '?>';?>



<?php echo '<?php
';?>
/*

		<nav id="menuMain" class="col-lg-8">
			<ul>
				<li><a href="<?php echo '<?=';?>
$_SERVER['PHP_SELF']<?php echo '?>';?>
">Home</a></li>
				<li><a href="#Services">Services</a></li>
				<li><a href="<?php echo '<?=';?>
$_SERVER['PHP_SELF']<?php echo '?>';?>
?controller=page&action=index&page_id=1">About</a></li>
				<li><a href="#Works">Works</a></li>
				<li><a href="#Blog">Blog</a></li>
				<li><a href="#Clients">Clients</a></li>
				<li><a href="<?php echo '<?=';?>
$_SERVER['PHP_SELF']<?php echo '?>';?>
?controller=contactform">Contact</a></li>
			</ul>
		</nav>

*/<?php }
}
