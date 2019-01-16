<?php
/* Smarty version 3.1.33, created on 2019-01-15 23:36:44
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3eb4dca4f7a9_95941938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3002a6e581a29eb3515cc8081933f327c5b4ed87' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\page.tpl',
      1 => 1546847038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3eb4dca4f7a9_95941938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17206398165c3eb4dca47aa0_76579617', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_626078745c3eb4dca4b927_38379899 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18542123875c3eb4dca4b926_72020246 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15147262425c3eb4dca47aa7_54386976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block row">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_626078745c3eb4dca4b927_38379899', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18542123875c3eb4dca4b926_72020246', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_14455264365c3eb4dca4b924_54306404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_17206398165c3eb4dca47aa0_76579617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17206398165c3eb4dca47aa0_76579617',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15147262425c3eb4dca47aa7_54386976',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_626078745c3eb4dca4b927_38379899',
  ),
  'page_content' => 
  array (
    0 => 'Block_18542123875c3eb4dca4b926_72020246',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14455264365c3eb4dca4b924_54306404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
	
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15147262425c3eb4dca47aa7_54386976', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14455264365c3eb4dca4b924_54306404', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
