<?php
/* Smarty version 3.1.33, created on 2019-02-25 05:29:02
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73c36ea0ef41_06914828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3002a6e581a29eb3515cc8081933f327c5b4ed87' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\page.tpl',
      1 => 1548921460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73c36ea0ef41_06914828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3059071025c73c36ea0ef46_11139189', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_20750757335c73c36ea0ef45_24829421 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2835609235c73c36ea0ef49_37657373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13615991995c73c36ea0ef48_44936109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20750757335c73c36ea0ef45_24829421', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2835609235c73c36ea0ef49_37657373', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_1048912275c73c36ea0ef42_85918094 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3059071025c73c36ea0ef46_11139189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3059071025c73c36ea0ef46_11139189',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_13615991995c73c36ea0ef48_44936109',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20750757335c73c36ea0ef45_24829421',
  ),
  'page_content' => 
  array (
    0 => 'Block_2835609235c73c36ea0ef49_37657373',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1048912275c73c36ea0ef42_85918094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
	
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13615991995c73c36ea0ef48_44936109', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1048912275c73c36ea0ef42_85918094', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
