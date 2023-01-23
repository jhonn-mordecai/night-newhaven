<?php
/* Smarty version 3.1.30, created on 2019-01-22 21:43:13
  from "/Users/John/Sites/night/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c4780615a6126_45688011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95cfd40fa1eb0482de8dedc83c57113ad43eccd4' => 
    array (
      0 => '/Users/John/Sites/night/templates/login.tpl',
      1 => 1548189791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4780615a6126_45688011 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container h-100">
    <div class="row d-flex h-100 align-items-center justify-content-center">
        <div class="col-md-6 col-align-center">
            <div class="login-container text-center">
                <p><img class="login-logo" src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
/night_logo_silver.svg" /></p>
                <br>
                <form id="login-form" role="form" method="post">
                    <p><input class="form-control text-input" type="password" name="password" placeholder="Password" style="background-color:#181818;color:#cccccc;border-color:black;" /></p>
                    <button class="btn btn-light btn-block" type="submit" name="login">Login</button>
                </form>
            </div>
            <p style="font-color:white;">
            <?php if ($_smarty_tpl->tpl_vars['error_msg']->value) {?> <?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
 <?php } else { ?> &nbsp; <?php }?>
            </p>
        </div>
    </div>
</div><?php }
}
