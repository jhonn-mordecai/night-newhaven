<?php
/* Smarty version 3.1.30, created on 2023-01-23 17:08:15
  from "/Applications/MAMP/htdocs/night/templates/live.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63cebeffc23136_51576488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd702139016d318964922452d53fd7c288461aa51' => 
    array (
      0 => '/Applications/MAMP/htdocs/night/templates/live.tpl',
      1 => 1674493693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63cebeffc23136_51576488 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="night-live-wrapper">
	
	<div class="night-live-header">
		<img src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
/night_logo_silver.svg" />
	</div>
	
	<div class="live-content-holder">

		<div class="embed-responsive embed-responsive-16by9 iframe-contain">
			<iframe name="video_player" src="https://player.vimeo.com/video/472423092" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
		</div>
		
		<div class="caption">
			Filmed live at Partners Cafe, New Haven | October 2020
		</div>
		
		<div class="previous-events-holder">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['live_streams']->value, 'event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
?>
			<div class="previous-event">
				<a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['video_link'];?>
" data-caption="<?php echo $_smarty_tpl->tpl_vars['event']->value['caption'];?>
" target="video_player">
					<div class="img-overlay-container">
						<div class="play-overlay">
							<i class="fa fa-play-circle" aria-hidden="true"></i>
						</div>
						<img src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['thumb'];?>
" />
					</div>
					<span><?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
</span>
				</a>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
					
		</div>
	</div>
</div><?php }
}
