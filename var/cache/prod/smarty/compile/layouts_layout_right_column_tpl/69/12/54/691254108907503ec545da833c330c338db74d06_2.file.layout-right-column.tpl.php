<?php
/* Smarty version 3.1.33, created on 2019-02-25 05:03:44
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\layouts\layout-right-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73bd800893f5_18184729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '691254108907503ec545da833c330c338db74d06' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\layouts\\layout-right-column.tpl',
      1 => 1546847038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73bd800893f5_18184729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19983873895c73bd800893f0_17127560', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10658712885c73bd800893f4_67164268', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_19983873895c73bd800893f0_17127560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_19983873895c73bd800893f0_17127560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_15541756635c73bd800893f9_34819650 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_10658712885c73bd800893f4_67164268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_10658712885c73bd800893f4_67164268',
  ),
  'content' => 
  array (
    0 => 'Block_15541756635c73bd800893f9_34819650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column col-xs-12 col-sm-12 col-md-9">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15541756635c73bd800893f9_34819650', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
