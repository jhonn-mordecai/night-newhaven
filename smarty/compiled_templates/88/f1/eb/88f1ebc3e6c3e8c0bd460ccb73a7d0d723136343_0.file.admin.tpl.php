<?php
/* Smarty version 3.1.30, created on 2019-03-01 23:16:47
  from "/home/johnmord/public_html/nightnewhaven.club/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c7a03af5b69d3_47337663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88f1ebc3e6c3e8c0bd460ccb73a7d0d723136343' => 
    array (
      0 => '/home/johnmord/public_html/nightnewhaven.club/templates/admin.tpl',
      1 => 1551500203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7a03af5b69d3_47337663 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container admin-container">
    <div class="logo-container text-center">
        <img src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
/night_logo_silver.svg" class="admin-logo" />
        <span class="admin-sub-head">Admin Portal</span>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card admin-box">
                <div class="card-header">
                    <h4>Enter Playlist</h4>
                </div>
                <div class="card-body">
                    <form id="playlist" method="post">
                        <div class="row field-row justify-content-start">
                            <div class="col-md-6">
                                <input class="form-control text-input" type="text" name="date" placeholder="Date (ex. yyyy-mm-dd)" />
                            </div>
                        </div>
                        <div class="row field-row">
	                        <div class="col-12">
                                <p class="caption">Each artist and song separated by a space+dash+space (ex. "Artist - Song Title").<br />One song per line.</p>
		                        <textarea class="form-control text-input" name="playlist-text" form="playlist" rows="10"></textarea>
	                        </div>
                        </div>
                        <div class="row form-row">
	                        <div class="col-md-2 text-center">
		                        <label class="ready-submit-label" for="ready-submit">
                                    <input id="ready-submit" type="checkbox" name="ready-submit" value="ready-submit" />
                                    <i class="fa fa-square-o" aria-hidden="true"></i> &nbsp;OK
                                </label>
	                        </div>
	                        <div class="col-md-10">
		                        <button class="btn btn-goth-red btn-block submit-playlist" name="submit-playlist" type="submit" disabled>Enter</button>
	                        </div>
                        </div>
                    </form>
                </div> 
            </div> 
        </div>
    </div>
    <br>
    <?php if ($_smarty_tpl->tpl_vars['error_msg']->value) {?>
    <div class="error-msg red-text text-center">
        <?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
 
    </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['success_msg']->value) {?>
    <div class="success-msg text-center">
        <?php echo $_smarty_tpl->tpl_vars['success_msg']->value;?>

    </div> 
    <?php } else { ?> &nbsp; 
    <?php }?>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card admin-box">
                <div class="card-header">
                    <h4>Search Playlists</h4>
                </div>
                <div class="card-body">
                    <div class="row field-row form-row">
                        <div class="col-md-6">
                            <input class="form-control text-input" type="text" name="item-search" placeholder="Artist/Song Title" />
                        </div>
                        <div class="col-md-6">
                            <div class="row form-row">
                                <div class="col-md-6">
                                    <button class="btn btn-block btn-goth-red playlist-search-button" name="search-playlist" role="button">Search</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-block btn-secondary clear-search-field">Clear</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="playlist-search-results">
                    
                    </div>
                </div> 
            </div> 
        </div>
    </div>
    <br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form id="logout" method="post">
                <button class="btn btn-block btn-secondary" name="logout" type="submit">Log Out</button>
            </form>
        </div>
    </div>
    <br><br>
</div><?php }
}
