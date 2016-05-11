<?php
/* Smarty version 3.1.30-dev/68, created on 2016-05-11 07:58:51
  from "c:\wamp\www\guestbook\smarty\guestbook\templates\form_input_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/68',
  'unifunc' => 'content_5732e63bd12f57_99403391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c318ecc7d7ddcbaf9e685041ddf5df7a55e06148' => 
    array (
      0 => 'c:\\wamp\\www\\guestbook\\smarty\\guestbook\\templates\\form_input_add.tpl',
      1 => 1462953526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5732e63bd12f57_99403391 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST">
	

	<div class="input-name">
		<select name="input_type" id="type_selector">
			<option value="-1">------ select input ------</option>
			
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

	<div id="added_inputs_wrapper"></div>
</form>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$('#type_selector').on('change', function(){
			if($(this).val() != -1)
				$.post('<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
', {input_type: $(this).find('option:selected').text()}, function(response)
				{
					$('#added_inputs_wrapper').html(response);
				}, 'text');
			else
				$('#added_inputs_wrapper').html('');

		});
		
	});
<?php echo '</script'; ?>
><?php }
}
