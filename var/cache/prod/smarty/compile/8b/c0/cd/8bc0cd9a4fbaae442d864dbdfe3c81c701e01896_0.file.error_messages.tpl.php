<?php
/* Smarty version 3.1.33, created on 2019-07-26 18:41:01
  from '/home/b65oe25eh20f/public_html/mimbreperu.com/admin643b2aotk/themes/new-theme/template/components/layout/error_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3b8f8d347b76_54355081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bc0cd9a4fbaae442d864dbdfe3c81c701e01896' => 
    array (
      0 => '/home/b65oe25eh20f/public_html/mimbreperu.com/admin643b2aotk/themes/new-theme/template/components/layout/error_messages.tpl',
      1 => 1562908099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3b8f8d347b76_54355081 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['errors']->value) && current($_smarty_tpl->tpl_vars['errors']->value) != '' && (!isset($_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value) || $_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value == false)) {?>
  <div class="bootstrap">
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['errors']->value) == 1) {?>
        <?php echo reset($_smarty_tpl->tpl_vars['errors']->value);?>

      <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d errors','sprintf'=>array(count($_smarty_tpl->tpl_vars['errors']->value))),$_smarty_tpl ) );?>

        <br/>
        <ol>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
      <?php }?>
    </div>
  </div>
<?php }
}
}
