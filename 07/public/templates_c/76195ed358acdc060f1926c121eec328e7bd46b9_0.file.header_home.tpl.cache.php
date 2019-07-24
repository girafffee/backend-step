<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-22 01:34:31
  from '/var/www/clients/client13/web15/web/07/resources/view/mydesign/header_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d34e87731ec69_32160541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76195ed358acdc060f1926c121eec328e7bd46b9' => 
    array (
      0 => '/var/www/clients/client13/web15/web/07/resources/view/mydesign/header_home.tpl',
      1 => 1563730759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainmenu.tpl' => 1,
  ),
),false)) {
function content_5d34e87731ec69_32160541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18475222995d34e877313335_86651620';
?>

<div id="containerHeaderHome"  class="container-fluid">
	<header id="headerMain" class="container"><div class="row">
		<h1 id="siteLogo" class="col-lg-4"> <a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'protocol');?>
://<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'public');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'site_name');?>
</a> </h1>

	<?php $_smarty_tpl->_subTemplateRender("file:mainmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div></header>

	<div id="headerCaptions" class="text-center">
		<h2><?php echo $_smarty_tpl->tpl_vars['data']->value['pageTitle'];?>
</h2>
		<p>Your Favourite Creative Agency Template </p>
		<a href="contact.html">Get Started</a>
	</div>
</div>
<?php }
}
