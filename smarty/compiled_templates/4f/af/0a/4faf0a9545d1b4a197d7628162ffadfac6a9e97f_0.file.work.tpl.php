<?php
/* Smarty version 3.1.30, created on 2019-01-09 17:59:46
  from "/Users/John/Sites/smarty_test/templates/work.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c362882b57c95_41178722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4faf0a9545d1b4a197d7628162ffadfac6a9e97f' => 
    array (
      0 => '/Users/John/Sites/smarty_test/templates/work.tpl',
      1 => 1547053184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c362882b57c95_41178722 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>WORK</h3>
<div class="text">
	<p><?php echo $_smarty_tpl->tpl_vars['work_text']->value;?>
</p>
	<br>
	<h3>STATUS</h3>
	<br>
	<table class="table table-striped">
		<tr>
			<th>Name</th>
			<th>Object</th>
			<th>Food</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['work_array']->value, 'object', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['object']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['object']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['object']->value['item'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['object']->value['food'];?>
</td>
		</tr>	
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
</div><?php }
}
