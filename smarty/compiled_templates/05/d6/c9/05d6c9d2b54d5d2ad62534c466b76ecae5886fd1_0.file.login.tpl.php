<?php
/* Smarty version 3.1.30, created on 2019-02-07 19:56:43
  from "/home/johnmord/public_html/nightnewhaven.club/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c5cd3cb031994_03073358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05d6c9d2b54d5d2ad62534c466b76ecae5886fd1' => 
    array (
      0 => '/home/johnmord/public_html/nightnewhaven.club/templates/login.tpl',
      1 => 1549587325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5cd3cb031994_03073358 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container h-100">
    <div class="row d-flex h-100 align-items-center justify-content-center">
        <div class="col-md-6 col-align-center">
            <div class="login-container text-center">
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
"><img class="login-logo" src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
/night_logo_silver.svg" /></a>
                </p>
                <p>ADMIN LOGIN</p>
                <form id="login-form" role="form" method="post">
                    <p><input class="form-control text-input" type="password" name="password" placeholder="Password" style="background-color:#181818;color:#cccccc;border-color:black;" /></p>
                    <button class="btn btn-light btn-block" type="submit" name="login">Login</button>
                </form>
            </div>
            <div class="red-text text-center">
            <?php if ($_smarty_tpl->tpl_vars['error_msg']->value) {?> <?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
 <?php } else { ?> &nbsp; <?php }?>
            </div>
        </div>
    </div>
</div><?php }
}
