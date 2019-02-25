<?php
/* Smarty version 3.1.33, created on 2019-02-25 05:08:15
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73be8f6c6f34_61269949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c5729191a75519e0ea0a61d9c90b69ad3f142ea' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\layouts\\layout-left-column.tpl',
      1 => 1546847038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73be8f6c6f34_61269949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7398974425c73be8f6c30b5_10615439', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8254442285c73be8f6c30b9_25575610', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_7398974425c73be8f6c30b5_10615439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_7398974425c73be8f6c30b5_10615439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_19837341775c73be8f6c30b5_60490149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_8254442285c73be8f6c30b9_25575610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_8254442285c73be8f6c30b9_25575610',
  ),
  'content' => 
  array (
    0 => 'Block_19837341775c73be8f6c30b5_60490149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="left-column col-sm-12 col-md-9 col-lg-9 col-xs-12">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19837341775c73be8f6c30b5_60490149', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
