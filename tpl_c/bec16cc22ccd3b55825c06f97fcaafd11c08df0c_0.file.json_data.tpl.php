<?php
/* Smarty version 3.1.30, created on 2018-09-28 19:00:19
  from "/var/www/html/booked/tpl/json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bae7a433745a0_40534778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bec16cc22ccd3b55825c06f97fcaafd11c08df0c' => 
    array (
      0 => '/var/www/html/booked/tpl/json_data.tpl',
      1 => 1533986606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bae7a433745a0_40534778 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
