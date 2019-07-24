<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-21 20:39:21
  from '/var/www/clients/client13/web15/web/07/resources/view/mydesign/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d34a349952352_15070241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a9f2df2796196b2da6b2a55416f9e1b6f01b16c' => 
    array (
      0 => '/var/www/clients/client13/web15/web/07/resources/view/mydesign/header.tpl',
      1 => 1563730534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainmenu.tpl' => 1,
  ),
),false)) {
function content_5d34a349952352_15070241 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="containerHeader"  class="container-fluid">
	<header id="headerMain" class="container">
        <div class="row">
            <h1 id="siteLogo" class="col-lg-4"> <a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'protocol');?>
://<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'public');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'site_name');?>
</a> </h1>

            <?php $_smarty_tpl->_subTemplateRender("file:mainmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	    </div>
    </header>
</div>
<?php }
}
