<?php
/* Smarty version 3.1.30, created on 2018-09-28 20:48:10
  from "/var/www/html/booked/tpl/Admin/Resources/manage_resources_capacity.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bae938a189b43_22936794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11d7ee9f34582d1da9a65a0239b413da894aa7ea' => 
    array (
      0 => '/var/www/html/booked/tpl/Admin/Resources/manage_resources_capacity.tpl',
      1 => 1533986604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bae938a189b43_22936794 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="maxParticipants"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxParticipants()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>

	<?php }?>
</div><?php }
}
