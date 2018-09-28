<?php
/* Smarty version 3.1.30, created on 2018-09-28 20:34:44
  from "/var/www/html/booked/tpl/Calendar/calendar.subscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bae9064556ef5_29752819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fe6fd8cf0156ce542863ba9f56a6dd4c2f8f711' => 
    array (
      0 => '/var/www/html/booked/tpl/Calendar/calendar.subscription.tpl',
      1 => 1533986606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bae9064556ef5_29752819 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="calendarSubscription" class="calendar-subscription">
    <?php if ($_smarty_tpl->tpl_vars['IsSubscriptionAllowed']->value && $_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
        <a id="subscribeToCalendar"
           href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-share.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SubscribeToCalendar'),$_smarty_tpl);?>
</a>
        <br/>
        URL:
        <span class="note"><?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
</span>
    <?php }?>
</div>

<?php }
}
