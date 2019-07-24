<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-21 19:49:37
  from '/var/www/clients/client13/web15/web/07/resources/view/mydesign/mainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d3497a1d2fac6_67014399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec8104636474a9b5ea404c3cb0c11530a92e5952' => 
    array (
      0 => '/var/www/clients/client13/web15/web/07/resources/view/mydesign/mainmenu.tpl',
      1 => 1563727776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3497a1d2fac6_67014399 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<nav id="menuMain" class="col-lg-8">
			<ul>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['mainMenu'], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['parentId'] == 0) {?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</a>
														<?php if ($_smarty_tpl->tpl_vars['item']->value['hasChildren']) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['mainMenu'], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['parentId'] == 0) {?>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</a></li>
									<?php }?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
							</li>


						<?php }?>
						<?php
}
} else {
?>
						<li><a href="#">+Home</a></li>
						<li><a href="#Services">+Servi</a></li>
						<li><a href="#About">+About</a></li>
						<li><a href="#Works">+Work</a></li>
						<li><a href="#Blog">+Blog</a></li>
						<li><a href="#Clients">+Clie</a></li>
						<li><a href="#Contact">+Conta</a></li>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			</ul>
		</nav>


<?php }
}
