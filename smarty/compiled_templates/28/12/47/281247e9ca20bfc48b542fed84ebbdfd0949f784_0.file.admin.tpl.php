<?php
/* Smarty version 3.1.30, created on 2023-01-23 17:50:16
  from "/Applications/MAMP/htdocs/night/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63cec8d8254538_65455190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '281247e9ca20bfc48b542fed84ebbdfd0949f784' => 
    array (
      0 => '/Applications/MAMP/htdocs/night/templates/admin.tpl',
      1 => 1674496214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63cec8d8254538_65455190 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="admin-container">
    <div class="container-950">
        <div class="logo-container">
            <img src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
/night_logo_silver.svg" class="admin-logo" />
            <span class="admin-sub-head">Admin Portal</span>
        </div>
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

    <br /><br /><br /><br />
    <div class="container-1140">
        <div class="stat-count-box">
            <div class="stat-count-header">
                Most Played Songs
            </div>
            <div class="stat-listings">
                <div class="column-container col-contain-2">
                    <ol>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['most_played_songs']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
                        <li>
                            <span class="result-item"><span class="result-artist"><?php echo $_smarty_tpl->tpl_vars['result']->value['artist'];?>
</span> - <?php echo $_smarty_tpl->tpl_vars['result']->value['title'];?>
</span> - <span class="result-count"><?php echo $_smarty_tpl->tpl_vars['result']->value['count'];?>
 plays</span>
                        </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ol>
                </div>
            </div>
        </div>

        <br /><br />

        <div class="stat-count-box">
            <div class="stat-count-header">
                Most Played Artists
            </div>
            <div class="stat-listings">
                <div class="column-container col-contain-4">
                    <ol>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['most_played_artists']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
                            <li>
                                <span class="result-item"><span class="result-artist"><?php echo $_smarty_tpl->tpl_vars['result']->value['artist'];?>
</span></span>&nbsp;&nbsp;- <span class="result-count"><?php echo $_smarty_tpl->tpl_vars['result']->value['count'];?>
 plays</span>
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ol>
                </div>
            </div>
        </div>

        <div class="note">
            Counts are for reference only; may not be 100% accurate due to irregularities in the database. Will be fixed one day. Maybe.
        </div>
        <br><br>

        <form id="logout" method="post">
            <button class="btn btn-block btn-secondary" name="logout" type="submit">Log Out</button>
        </form>
    </div>
    <br><br>
</div><?php }
}
