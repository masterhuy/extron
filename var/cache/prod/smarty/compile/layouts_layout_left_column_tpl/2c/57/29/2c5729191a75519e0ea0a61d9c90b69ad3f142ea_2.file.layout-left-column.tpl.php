<?php
/* Smarty version 3.1.33, created on 2019-02-27 05:08:35
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7661a34524c2_31401630',
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
function content_5c7661a34524c2_31401630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9927494515c7661a344e642_10719417', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16332990815c7661a344e649_38570010', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_9927494515c7661a344e642_10719417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_9927494515c7661a344e642_10719417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_5882223055c7661a344e643_35798042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_16332990815c7661a344e649_38570010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_16332990815c7661a344e649_38570010',
  ),
  'content' => 
  array (
    0 => 'Block_5882223055c7661a344e643_35798042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="left-column col-sm-12 col-md-9 col-lg-9 col-xs-12">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5882223055c7661a344e643_35798042', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
