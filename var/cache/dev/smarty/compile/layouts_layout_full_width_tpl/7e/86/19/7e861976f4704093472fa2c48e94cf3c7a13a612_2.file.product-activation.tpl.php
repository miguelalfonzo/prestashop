<?php
/* Smarty version 3.1.33, created on 2020-02-24 10:00:22
  from 'C:\laragon\www\prestashop\themes\classic\templates\catalog\_partials\product-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e53e506902815_91332134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e861976f4704093472fa2c48e94cf3c7a13a612' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1562900912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53e506902815_91332134 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['admin_notifications'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>
<?php }
}
}
