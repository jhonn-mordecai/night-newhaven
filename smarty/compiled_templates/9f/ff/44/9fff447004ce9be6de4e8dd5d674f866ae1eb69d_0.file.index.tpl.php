<?php
/* Smarty version 3.1.30, created on 2022-12-21 22:49:41
  from "/Applications/MAMP/htdocs/night/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63a38d85a74366_65485931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fff447004ce9be6de4e8dd5d674f866ae1eb69d' => 
    array (
      0 => '/Applications/MAMP/htdocs/night/templates/index.tpl',
      1 => 1671662828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a38d85a74366_65485931 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>		
		<title>: NIGHT :</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="NIGHT is a dark dance party in New Haven, CT, taking place the 2nd Saturday of every month. A welcoming place for the Goths, Rivetheads, Baby Bats, Cyberpunks, Thrashers, Fetish Queens, Pastels, Elders, the Dark-Curious, and Alternative types.">
		<meta name="keywords" content="night, new haven, night new haven, new haven goth night, connecticut goth, connecticut goth night, night partners, partners new haven, nhv, connecticut, ct, goth, club, goth club, goth night, dark dance party, dance party, club night, post-punk, darkwave, industrial, rivethead, ebm, new wave, witch house, partners, fetish, alternative, lgbtq, queer friendly, gay-friendly, trans-friendly">
		<meta name="author" content="John Mordecai">
		
		<meta property="og:title" content="NIGHT" />
		<meta property="og:site_name" content="NIGHT" />
		<meta property="og:description" content="NIGHT is a dark dance party in New Haven, CT, taking place on the 2nd Saturday of each month." />
		<meta property="og:image" content="http://nightnewhaven.club/img/night-og.jpg" />
		<meta property="og:image:type" content="image/jpg" />
		<meta property="og:url" content="http://nightnewhaven.club" />
				
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
/favicon_blk.png" />
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- My CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
/styles/styles.css">
	</head>
	
<body <?php if ($_smarty_tpl->tpl_vars['page']->value->page_name == 'live') {?>class="extra-dark"<?php }?>>
		
		<div class="page-wrapper <?php if ($_smarty_tpl->tpl_vars['page']->value->page_name == 'login' || $_smarty_tpl->tpl_vars['page']->value->page_name == 'admin') {?>h-100<?php } elseif ($_smarty_tpl->tpl_vars['page']->value->page_name == 'default') {?>home-padding<?php }?>">
			<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['page']->value->template, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
					
		</div> 
		
		<!-- jQuery, Tether, Bootstrap JS. -->
		<?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			// For use within JS
			var SITE_URL = '<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
';
			var PAGE_NAME = '<?php echo $_smarty_tpl->tpl_vars['page']->value->page_name;?>
';
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
/js/scripts.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
