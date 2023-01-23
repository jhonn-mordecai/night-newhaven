<?php
/* Smarty version 3.1.30, created on 2019-01-22 22:14:52
  from "/Users/John/Sites/night/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c4787cc1ce458_78797760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db63cdb38c5d721329e679503a9d9aba7e9f9875' => 
    array (
      0 => '/Users/John/Sites/night/templates/admin.tpl',
      1 => 1548191633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4787cc1ce458_78797760 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container admin-container">
    <div class="logo-container text-center">
        <img src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
/night_logo_silver.svg" class="admin-logo" />
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card playlist-enter-container">
                <div class="card-header">
                    <h4>Enter Playlist</h4>
                </div>
                <div class="card-body">
                    <form id="playlist" method="post">
                        <div class="row date-row justify-content-end">
                            <div class="col-md-6">
                                <input class="form-control text-input" type="text" name="date" placeholder="Date (ex. yyyy-mm-dd)" />
                            </div>
                        </div>
                        <div class="playlist-form-row">
                            <div class="row field-row">
                                <div class="col-md-6">
                                    <input class="form-control text-input" type="text" name="artist[]" placeholder="Artist" />
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control text-input" type="text" name="title[]" placeholder="Title" />
                                </div>
                            </div>
                        </div>
                        <div class="row buttons-row justify-content-end">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button class="btn btn-block btn-secondary add-row" type="button"><i class="fa fa-plus" aria-hidden="true"></i> Add Line</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-block btn-dark delete-row" type="button"><i class="fa fa-minus" aria-hidden="true"></i> Remove Line</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-goth-red btn-block" name="submit-playlist" type="submit">Enter</button>
                    </form>
                </div> 
            </div> 
        </div>
    </row>
    <?php if ($_smarty_tpl->tpl_vars['error_msg']->value) {?>
    <div class="error-msg">
        <?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
 
    </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['success_msg']->value) {?>
    <div class="success-msg">
        <?php echo $_smarty_tpl->tpl_vars['success_msg']->value;?>

    </div> 
    <?php } else { ?> &nbsp; 
    <?php }?>
</div><?php }
}
