<?php
/* Smarty version 3.1.33, created on 2019-10-22 09:55:34
  from '/home/b65oe25eh20f/public_html/mimbreperu.com/modules/ps_legalcompliance/views/templates/hook/hookDisplayCMSPrintButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daf1866c25852_56341352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ca34b680f39e922832d9064cd8f3326cbc36edf' => 
    array (
      0 => '/home/b65oe25eh20f/public_html/mimbreperu.com/modules/ps_legalcompliance/views/templates/hook/hookDisplayCMSPrintButton.tpl',
      1 => 1563671605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5daf1866c25852_56341352 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['directPrint']->value) {?>
	<input type="submit" name="printCMSPage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print this page','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
" class="btn btn-secondary" onclick="window.print()" />
<?php } else { ?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['print_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-secondary" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print this page','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
</a>
<?php }
}
}
