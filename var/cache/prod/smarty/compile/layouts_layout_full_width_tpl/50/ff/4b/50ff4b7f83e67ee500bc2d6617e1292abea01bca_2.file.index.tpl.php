<?php
/* Smarty version 3.1.33, created on 2019-02-25 05:29:02
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73c36e9e7e49_70620962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50ff4b7f83e67ee500bc2d6617e1292abea01bca' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\index.tpl',
      1 => 1546847038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73c36e9e7e49_70620962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4982234545c73c36e9e7e43_04221773', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17290310145c73c36e9e7e43_51218283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_14289710695c73c36e9e7e45_90245743 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4982234545c73c36e9e7e43_04221773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_4982234545c73c36e9e7e43_04221773',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17290310145c73c36e9e7e43_51218283',
  ),
  'page_content' => 
  array (
    0 => 'Block_14289710695c73c36e9e7e45_90245743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17290310145c73c36e9e7e43_51218283', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14289710695c73c36e9e7e45_90245743', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
