<?php
/* Smarty version 3.1.30, created on 2018-09-28 20:47:40
  from "/var/www/html/booked/tpl/Admin/Resources/manage_resources_groups.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bae936c7705d8_95806400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67f4bba378912f91539c12dd9897fc44cb9de835' => 
    array (
      0 => '/var/www/html/booked/tpl/Admin/Resources/manage_resources_groups.tpl',
      1 => 1533986604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bae936c7705d8_95806400 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (count($_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds()) == 0) {?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>

<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds(), 'resourceGroupId', false, NULL, 'eachGroup', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceGroupId']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['total'];
?>
	<span class="resourceGroupId" data-value="<?php echo $_smarty_tpl->tpl_vars['resourceGroupId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ResourceGroupList']->value[$_smarty_tpl->tpl_vars['resourceGroupId']->value]->name;?>
</span><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_eachGroup']->value['last'] : null)) {?>, <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
