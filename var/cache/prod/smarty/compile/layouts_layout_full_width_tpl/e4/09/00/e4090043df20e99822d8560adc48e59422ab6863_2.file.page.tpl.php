<?php
/* Smarty version 3.1.33, created on 2019-02-26 04:57:43
  from 'D:\xamppp\htdocs\jms_extron\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c750d970752c8_61134441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4090043df20e99822d8560adc48e59422ab6863' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\classic\\templates\\page.tpl',
      1 => 1545054348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c750d970752c8_61134441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18475821945c750d9704e1c3_75435028', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2652133035c750d9704e1c2_03887651 extends Smarty_Internal_Block
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
class Block_21026789635c750d9704e1c6_42119349 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2652133035c750d9704e1c2_03887651', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_11909705765c750d9704e1c7_82858925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7496120695c750d970752c1_73709965 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9662797945c750d9704e1c0_47928072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11909705765c750d9704e1c7_82858925', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7496120695c750d970752c1_73709965', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_9114050085c750d970752c6_00728876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7137150015c750d970752c7_38471262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9114050085c750d970752c6_00728876', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_18475821945c750d9704e1c3_75435028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18475821945c750d9704e1c3_75435028',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_21026789635c750d9704e1c6_42119349',
  ),
  'page_title' => 
  array (
    0 => 'Block_2652133035c750d9704e1c2_03887651',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_9662797945c750d9704e1c0_47928072',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11909705765c750d9704e1c7_82858925',
  ),
  'page_content' => 
  array (
    0 => 'Block_7496120695c750d970752c1_73709965',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7137150015c750d970752c7_38471262',
  ),
  'page_footer' => 
  array (
    0 => 'Block_9114050085c750d970752c6_00728876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21026789635c750d9704e1c6_42119349', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9662797945c750d9704e1c0_47928072', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7137150015c750d970752c7_38471262', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
