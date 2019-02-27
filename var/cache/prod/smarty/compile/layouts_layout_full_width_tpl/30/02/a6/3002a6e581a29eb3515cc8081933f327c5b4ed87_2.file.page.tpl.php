<?php
/* Smarty version 3.1.33, created on 2019-02-27 05:10:04
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7661fc97ef20_04119524',
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
function content_5c7661fc97ef20_04119524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_536147715c7661fc97b090_80592037', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_9421828305c7661fc97b099_51924510 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17555611855c7661fc97b091_51346963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11714980855c7661fc97b097_23698026 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9421828305c7661fc97b099_51924510', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17555611855c7661fc97b091_51346963', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_13783986995c7661fc97ef27_72025359 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_536147715c7661fc97b090_80592037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_536147715c7661fc97b090_80592037',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11714980855c7661fc97b097_23698026',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9421828305c7661fc97b099_51924510',
  ),
  'page_content' => 
  array (
    0 => 'Block_17555611855c7661fc97b091_51346963',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_13783986995c7661fc97ef27_72025359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
	
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11714980855c7661fc97b097_23698026', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13783986995c7661fc97ef27_72025359', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
