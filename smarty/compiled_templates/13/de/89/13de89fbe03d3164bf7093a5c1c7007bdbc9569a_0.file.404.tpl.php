<?php
/* Smarty version 3.1.30, created on 2019-07-20 19:22:52
  from "/home/johnmord/public_html/nightnewhaven.club/templates/404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d33a24ccc88b1_78324079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13de89fbe03d3164bf7093a5c1c7007bdbc9569a' => 
    array (
      0 => '/home/johnmord/public_html/nightnewhaven.club/templates/404.tpl',
      1 => 1563664962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d33a24ccc88b1_78324079 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="page-not-found">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="oops-info text-center">
					<p>
						<a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
"><img class="oops-logo" src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
/night_logo_silver.svg" /></a>
					</p>
					<h2>That page doesn't exist.</h2>							
					<p>No need for existential crisis though. You probably just spilled blood on the keys.</p>

					<div class="back-home">
						<a class="btn btn-lg btn-goth-red" href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
"><i class="fa fa-angle-double-left" aria-hidden="true"></i> NIGHT</a>
					</div>
				</div>
			</div>						
		</div>				
	</div>
</section>	

<footer>
	<div class="container">
		<div class="row sub-row justify-content-center">
			<div class="col-md-5">
				<div class="bottom-info text-center">
					<div class="links">
						<div class="fb-diamond diamond">
							<a class="diamond-link" href="https://www.facebook.com/night.partners" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</div>
						<div class="ig-diamond diamond">
							<a class="diamond-link" href="https://www.instagram.com/night.partners/" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</div>
						<div class="contact-diamond diamond">
							<a class="diamond-link" href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_EMAIL']->value;?>
">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</a>
						</div>
					</div>
					<a href="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
/night_logo_silver.svg" />
					</a>
					<p class="copy">Copyright &copy; <?php echo date('Y');?>
</p>
				</div>
			</div>
		</div>
	</div>
</footer><?php }
}
