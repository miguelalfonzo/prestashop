<?php
/* Smarty version 3.1.33, created on 2019-07-28 04:42:50
  from '/home/b65oe25eh20f/public_html/mimbreperu.com/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3d6e1a237b17_24107876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf30a97f1b461d150338e1bee3ccc0cbea35d862' => 
    array (
      0 => '/home/b65oe25eh20f/public_html/mimbreperu.com/themes/classic/templates/page.tpl',
      1 => 1562908111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d3d6e1a237b17_24107876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2290722845d3d6e1a22e810_72599549', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_12773866065d3d6e1a22fe23_71515325 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_8558712745d3d6e1a22f1d9_52989620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12773866065d3d6e1a22fe23_71515325', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_8019930415d3d6e1a233b76_50281314 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_13450590385d3d6e1a234895_80265517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17289031065d3d6e1a233215_22074694 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8019930415d3d6e1a233b76_50281314', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13450590385d3d6e1a234895_80265517', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_15882228865d3d6e1a2365c3_08862608 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2647900475d3d6e1a235cc0_14618391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15882228865d3d6e1a2365c3_08862608', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2290722845d3d6e1a22e810_72599549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2290722845d3d6e1a22e810_72599549',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8558712745d3d6e1a22f1d9_52989620',
  ),
  'page_title' => 
  array (
    0 => 'Block_12773866065d3d6e1a22fe23_71515325',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_17289031065d3d6e1a233215_22074694',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8019930415d3d6e1a233b76_50281314',
  ),
  'page_content' => 
  array (
    0 => 'Block_13450590385d3d6e1a234895_80265517',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2647900475d3d6e1a235cc0_14618391',
  ),
  'page_footer' => 
  array (
    0 => 'Block_15882228865d3d6e1a2365c3_08862608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8558712745d3d6e1a22f1d9_52989620', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17289031065d3d6e1a233215_22074694', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2647900475d3d6e1a235cc0_14618391', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
