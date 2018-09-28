<?php
/* Smarty version 3.1.30, created on 2018-09-28 19:24:00
  from "/var/www/html/booked/tpl/Admin/Import/import.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bae7fd0569180_87469455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4acbeccef86c66df9f569b40c916fb60189b2e4' => 
    array (
      0 => '/var/www/html/booked/tpl/Admin/Import/import.tpl',
      1 => 1533986604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_5bae7fd0569180_87469455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="page-import" class="admin-page">

    <div class="default-box col-xs-12 col-sm-8 col-sm-offset-2">
        <h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Import'),$_smarty_tpl);?>
</h1>
        <a href="ics_import.php" class="btn btn-default"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ImportICS'),$_smarty_tpl);?>
</a>
        <a href="quartzy_import.php" class="btn btn-default"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ImportQuartzy'),$_smarty_tpl);?>
</a>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
