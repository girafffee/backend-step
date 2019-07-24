<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-22 01:34:31
  from '/var/www/clients/client13/web15/web/07/resources/view/mydesign/footer.tpl.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d34e8773f7a23_92195840',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'abd049f697d8a86b49a2a86ec44dd0516ecd8a7f' => 
    array (
      0 => '/var/www/clients/client13/web15/web/07/resources/view/mydesign/footer.tpl.php',
      1 => 1553618354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d34e8773f7a23_92195840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19336693145d34e8773f62b5_94081642';
?>

<footer>
	<?php echo '/*%%SmartyNocache:19336693145d34e8773f62b5_94081642%%*/<?php echo \'<?php
	\';?>
/*/%%SmartyNocache:19336693145d34e8773f62b5_94081642%%*/';?>
echo $data["footerMenu"];
<?php echo '/*%%SmartyNocache:19336693145d34e8773f62b5_94081642%%*/<?php echo \'?>\';?>
/*/%%SmartyNocache:19336693145d34e8773f62b5_94081642%%*/';?>

</footer>
<?php echo '/*%%SmartyNocache:19336693145d34e8773f62b5_94081642%%*/<?php echo \'<?php \';?>
/*/%%SmartyNocache:19336693145d34e8773f62b5_94081642%%*/';?>
if (isset($data['error'])) {
	echo '<div class="alert alert-danger" role="alert">' . $data ['error'] . '</div>';
}

	echo Kernel\Lib\PP::dump(Kernel\Router::$routes);

<?php echo '/*%%SmartyNocache:19336693145d34e8773f62b5_94081642%%*/<?php echo \'?>\';?>
/*/%%SmartyNocache:19336693145d34e8773f62b5_94081642%%*/';?>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<?php }
}
