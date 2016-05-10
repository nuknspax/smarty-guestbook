<?php
/* Smarty version 3.1.30-dev/68, created on 2016-05-11 06:06:58
  from "/Users/nuknspax/www/nuknspax/guestbook/smarty/guestbook/templates/form_input_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/68',
  'unifunc' => 'content_57323f62d83d90_53059468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbf2c68b2288af082f7220355a8da8cb39e5ea21' => 
    array (
      0 => '/Users/nuknspax/www/nuknspax/guestbook/smarty/guestbook/templates/form_input_add.tpl',
      1 => 1462910818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57323f62d83d90_53059468 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST">
	

	<div class="input-name">
		<select name="input_type" id="type_selector">
			<option value="0">------ select input ------</option>
			
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aInputTypes']->value, 'sValue', false, 'sKey');
foreach ($_from as $_smarty_tpl->tpl_vars['sKey']->value => $_smarty_tpl->tpl_vars['sValue']->value) {
$_smarty_tpl->tpl_vars['sValue']->_loop = true;
$__foreach_sValue_0_saved = $_smarty_tpl->tpl_vars['sValue'];
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['sKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sValue']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['sValue'] = $__foreach_sValue_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
		</select>
	</div>
</form>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$('#type_selector').on('change', function(){
			alert($(this).val());
			
		});
		
	});
<?php echo '</script'; ?>
><?php }
}
