<?php
/* Smarty version 3.1.30, created on 2018-09-28 19:07:13
  from "/var/www/html/booked/tpl/Calendar/mycalendar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bae7be1562e78_00999142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54a7ceb37aa33e40c4770b884d7aa7ee3fd50872' => 
    array (
      0 => '/var/www/html/booked/tpl/Calendar/mycalendar.tpl',
      1 => 1533986606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Calendar/calendar-page-base.tpl' => 1,
  ),
),false)) {
function content_5bae7be1562e78_00999142 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php ob_start();
echo Pages::MY_CALENDAR;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('pageUrl', $_prefixVariable1);
$_smarty_tpl->_assignInScope('pageIdSuffix', "my-calendar");
$_smarty_tpl->_assignInScope('subscriptionTpl', "mycalendar.subscription.tpl");
$_smarty_tpl->_subTemplateRender("file:Calendar/calendar-page-base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
