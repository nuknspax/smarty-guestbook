<?php
/* Smarty version 3.1.30-dev/68, created on 2016-05-11 07:54:13
  from "c:\wamp\www\guestbook\smarty\guestbook\templates\input_attrs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/68',
  'unifunc' => 'content_5732e525d3e089_77652211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0b173db23ee7a9424d794a07482f628a263121c' => 
    array (
      0 => 'c:\\wamp\\www\\guestbook\\smarty\\guestbook\\templates\\input_attrs.tpl',
      1 => 1462953245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5732e525d3e089_77652211 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aAttrs']->value, 'sVal', false, 'sKey');
foreach ($_from as $_smarty_tpl->tpl_vars['sKey']->value => $_smarty_tpl->tpl_vars['sVal']->value) {
$_smarty_tpl->tpl_vars['sVal']->_loop = true;
$__foreach_sVal_0_saved = $_smarty_tpl->tpl_vars['sVal'];
?>
	<label for="add_attr--<?php echo $_smarty_tpl->tpl_vars['sKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sVal']->value;?>
: </label><input id="add_attr--<?php echo $_smarty_tpl->tpl_vars['sKey']->value;?>
" type="text"><br />
<?php
$_smarty_tpl->tpl_vars['sVal'] = $__foreach_sVal_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
