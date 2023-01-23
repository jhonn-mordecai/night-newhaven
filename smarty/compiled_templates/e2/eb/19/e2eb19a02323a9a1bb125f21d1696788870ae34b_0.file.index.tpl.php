<?php
/* Smarty version 3.1.30, created on 2019-01-09 21:14:07
  from "/Users/John/Sites/smarty_test/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c36560f27a3c3_07963369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2eb19a02323a9a1bb125f21d1696788870ae34b' => 
    array (
      0 => '/Users/John/Sites/smarty_test/templates/index.tpl',
      1 => 1547064845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c36560f27a3c3_07963369 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['page']->value->page_title;?>
</title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
		<style type="text/css">
			html {
				position:relative;
				min-height:100%;
			}
			body {
				margin:0;
				padding:0;
				margin-bottom:50px;
				font-family:Arial,Helvetica,sans-serif;
				font-weight:lighter;
				text-rendering: optimizeLegibility;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;				
			}
			.page-wrapper {
				height:100%;
				min-height:100%;
				width:100%;
				background-color:#ffffff;
			}
			.sidebar {
				width:240px;
				height:100%;
				position:fixed;
				margin:0;
				top:0;
				left:0;
				background-color:#333333;
				color:#ffffff;
				z-index:100;
				padding-left:15px;
			}
			
			.content-wrapper {
				margin-left:280px;
				padding-right:25px;
				padding-bottom:50px;
				margin-top:50px;
			}
			
			nav ul {margin:0;padding:0;}
			nav ul li {
				list-style-type: none;
				margin-bottom:15px;
			}
			h1 {
				size:1.5rem;
				font-weight:lighter;
				margin:0;
			}
			nav {margin-top:30px;}
			nav a {
				color:#ffffff;
				text-decoration:none;
			}
			nav a:hover {
				color:#ffffae;
				text-decoration:none;
				transition:0.2s;
			}
			
			.text {
				font-size:1.1em;
				text-transform:uppercase;
				line-height:200%;
				color:#333333;
			}
			
			h3 {margin:0; font-weight:bold;}
			
			footer {display:none;}
			
			@media only screen and (max-width: 899px) {
				
				.sidebar {
					width:100%;
					height:160px;
					padding:15px 0;
					text-align:center;
					position:static;
					margin:0;
				}
				
				.content-wrapper {
					margin-left:0;
					padding-left:25px;
					padding-top:15px;
				}
				
				nav ul li {
					margin-bottom:none;
					display:inline-block;
				}
								
				footer {
					display:block;
					width:100%;
					background-color:#333333;
					padding:15px 0;
					position:absolute;
					height:50px;
					bottom:0;
					left:0;
					color:#ffffff;
					text-align:center;
				}
			}
		</style>
		
	</head>
	<body>	
		<div class="page-wrapper">
			<div class="sidebar">
				<h1>JOHN MORDECAI</h1>
				<p>You've made it this far, why not farther?</p>
				<nav>
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
">HOME</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
/about">ABOUT</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
/info">INFO</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
/work">WORK</a></li>
						<li><a href="contact">CONTACT</a></li>
					</ul>
				</nav>
			</div>
			<div class="content-wrapper">
				<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['page']->value->template, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			</div>
		</div>
		<footer>
			Copyright now.
		</footer>
		<!-- BOOTSTRAP JS JQ -->
		<!-- <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
> -->
		<?php echo '<script'; ?>
 src="web_assets/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="web_assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
