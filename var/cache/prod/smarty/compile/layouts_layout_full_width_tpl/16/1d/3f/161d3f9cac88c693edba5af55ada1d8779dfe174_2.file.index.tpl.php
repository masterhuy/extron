<?php
/* Smarty version 3.1.33, created on 2019-02-26 04:57:43
  from 'D:\xamppp\htdocs\jms_extron\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c750d9704e1c2_71580756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '161d3f9cac88c693edba5af55ada1d8779dfe174' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\classic\\templates\\index.tpl',
      1 => 1545054348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c750d9704e1c2_71580756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11935189915c750d9704e1c4_00705581', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_20579908305c750d9704e1c9_71170077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_13375458495c750d9704e1c7_87544420 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_12468320295c750d9704e1c2_40804093 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13375458495c750d9704e1c7_87544420', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11935189915c750d9704e1c4_00705581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_11935189915c750d9704e1c4_00705581',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20579908305c750d9704e1c9_71170077',
  ),
  'page_content' => 
  array (
    0 => 'Block_12468320295c750d9704e1c2_40804093',
  ),
  'hook_home' => 
  array (
    0 => 'Block_13375458495c750d9704e1c7_87544420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20579908305c750d9704e1c9_71170077', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12468320295c750d9704e1c2_40804093', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
