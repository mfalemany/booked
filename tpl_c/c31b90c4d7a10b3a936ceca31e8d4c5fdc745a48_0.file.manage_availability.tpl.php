<?php
/* Smarty version 3.1.30, created on 2018-09-28 20:57:46
  from "/var/www/html/booked/tpl/Admin/Schedules/manage_availability.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bae95ca064768_06820190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c31b90c4d7a10b3a936ceca31e8d4c5fdc745a48' => 
    array (
      0 => '/var/www/html/booked/tpl/Admin/Schedules/manage_availability.tpl',
      1 => 1533986606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bae95ca064768_06820190 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="availableDates"
     data-has-availability="<?php echo intval($_smarty_tpl->tpl_vars['schedule']->value->HasAvailability());?>
"
     data-start-date="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['schedule']->value->GetAvailabilityBegin(),'timezone'=>$_smarty_tpl->tpl_vars['timezone']->value,'key'=>'general_date'),$_smarty_tpl);?>
"
     data-end-date="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['schedule']->value->GetAvailabilityEnd(),'timezone'=>$_smarty_tpl->tpl_vars['timezone']->value,'key'=>'general_date'),$_smarty_tpl);?>
">
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Available'),$_smarty_tpl);?>

<span class="propertyValue">
<?php if ($_smarty_tpl->tpl_vars['schedule']->value->HasAvailability()) {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['schedule']->value->GetAvailabilityBegin(),'timezone'=>$_smarty_tpl->tpl_vars['timezone']->value,'key'=>'schedule_daily'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['schedule']->value->GetAvailabilityEnd(),'timezone'=>$_smarty_tpl->tpl_vars['timezone']->value,'key'=>'schedule_daily'),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AvailableAllYear'),$_smarty_tpl);?>

<?php }?>
</span><?php }
}
