<?php
/* Smarty version 3.1.30, created on 2020-08-18 05:22:25
  from "/Applications/MAMP/htdocs/night/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3b659183a812_13553041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8a771e5b582e3ce71850081a11810589e9f8a5f' => 
    array (
      0 => '/Applications/MAMP/htdocs/night/templates/login.tpl',
      1 => 1590717094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3b659183a812_13553041 (Smarty_Internal_Template $_smarty_tpl) {
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
