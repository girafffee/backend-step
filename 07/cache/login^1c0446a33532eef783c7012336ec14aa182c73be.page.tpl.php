<?php
/* Smarty version 3.1.34-dev-7, created on 2019-07-24 13:14:11
  from '/var/www/clients/client13/web15/web/07/resources/view/mydesign/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5d382f73d8cde7_80900430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1577d37b6ea4c7187556cff6aa69cba3739ec04' => 
    array (
      0 => '/var/www/clients/client13/web15/web/07/resources/view/mydesign/page.tpl',
      1 => 1563960726,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 86400,
),true)) {
function content_5d382f73d8cde7_80900430 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
    <h1>HELLO WORLD!!</h1>
    <div class="container">
<form method="POST" action="home">
<input type="hidden" name="doUserAction" value="loginInto" class="form-control">

  <div class="form-group row">
    <label for="email" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputPassword" name="pswd" placeholder="Password">
<input type="submit" class="btn btn-primary" style="margin: 1.3em 0 0 0">
    </div>
  </div>
</form>
</div>

</section><?php }
}
