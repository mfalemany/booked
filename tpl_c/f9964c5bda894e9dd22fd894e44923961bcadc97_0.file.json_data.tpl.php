<?php
/* Smarty version 3.1.30, created on 2018-09-28 20:47:34
  from "/var/www/html/booked/tpl/json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bae9366b09c53_98579577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9964c5bda894e9dd22fd894e44923961bcadc97' => 
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
function content_5bae9366b09c53_98579577 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
