<?php
/* Smarty version 3.1.30, created on 2019-01-12 04:29:52
  from "/Applications/MAMP/htdocs/night/templates/playlist_modal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c395f301988a3_33027419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c83ac90fe3a915197d5dcf37be530d28272252d' => 
    array (
      0 => '/Applications/MAMP/htdocs/night/templates/playlist_modal.tpl',
      1 => 1547238960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c395f301988a3_33027419 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/Applications/MAMP/htdocs/night/includes/libs/plugins/modifier.date_format.php';
?>
<div class="modal fade" id="playlistModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-times" aria-hidden="true"></i>
				</button>
			</div>
			<div class="modal-body text-center">
				<img class="logo img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
/night_logo_wht.svg" />
				<p class="list-heading">
					<i class="fa fa-star" aria-hidden="true"></i>
					&nbsp;&nbsp;&nbsp;&nbsp; <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['playlist_date']->value,"%B %e, %Y");?>
 &nbsp;&nbsp;&nbsp;&nbsp;
					<i class="fa fa-star" aria-hidden="true"></i>
				</p>
				
				<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['playlist']->value, 'song');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['song']->value) {
?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['song']->value, 'title', false, 'artist');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['artist']->value => $_smarty_tpl->tpl_vars['title']->value) {
?>
					<li><?php echo $_smarty_tpl->tpl_vars['artist']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul>
				<p class="end-moon"><i class="fa fa-moon-o" aria-hidden="true"></i></p>
			</div>
		</div>
	</div>
</div>		<?php }
}
