<?php
/* Smarty version 3.1.33, created on 2019-07-26 18:41:01
  from '/home/b65oe25eh20f/public_html/mimbreperu.com/admin643b2aotk/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3b8f8d355380_39104830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db8555b3fd6eda4e67c75a9b156d09373ecc7de4' => 
    array (
      0 => '/home/b65oe25eh20f/public_html/mimbreperu.com/admin643b2aotk/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1562908099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3b8f8d355380_39104830 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
