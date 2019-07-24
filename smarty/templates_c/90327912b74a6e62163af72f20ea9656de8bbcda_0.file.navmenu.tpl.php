<?php
/* Smarty version 3.1.33, created on 2019-07-21 14:18:26
  from '/var/www/clients/client13/web15/web/smarty/templates/navmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d344a0281ee50_44208245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90327912b74a6e62163af72f20ea9656de8bbcda' => 
    array (
      0 => '/var/www/clients/client13/web15/web/smarty/templates/navmenu.tpl',
      1 => 1563707904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d344a0281ee50_44208245 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="main-nav">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'url', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['url']->value) {
?>
            <?php if (is_array($_smarty_tpl->tpl_vars['url']->value)) {?>
                <?php if (isset($_smarty_tpl->tpl_vars['url']->value['a_class'])) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['url'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['url']->value['a_class'];?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>

                <?php } elseif (isset($_smarty_tpl->tpl_vars['url']->value['li_class'])) {?>
                    <li class="<?php echo $_smarty_tpl->tpl_vars['url']->value['li_class'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>

                <?php } elseif (isset($_smarty_tpl->tpl_vars['url']->value['li_class']) && isset($_smarty_tpl->tpl_vars['url']->value['a_class'])) {?>
                    <li class="<?php echo $_smarty_tpl->tpl_vars['url']->value['li_class'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['url'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['url']->value['a_class'];?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
                <?php }?>
            <?php } else { ?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</nav><?php }
}
