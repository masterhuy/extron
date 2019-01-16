<?php
/* Smarty version 3.1.33, created on 2019-01-15 23:36:44
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3eb4dca63032_13166389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd94e1dc7a89a8f76cdb06fb6ba8a47f0da1f737' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\layouts\\layout-full-width.tpl',
      1 => 1546847038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3eb4dca63032_13166389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10887360835c3eb4dca5f1b7_73171627', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8874544545c3eb4dca5f1b6_78422619', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12738780695c3eb4dca5f1b2_17152787', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_10887360835c3eb4dca5f1b7_73171627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_10887360835c3eb4dca5f1b7_73171627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_8874544545c3eb4dca5f1b6_78422619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_8874544545c3eb4dca5f1b6_78422619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_15131242945c3eb4dca63030_63246087 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_12738780695c3eb4dca5f1b2_17152787 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_12738780695c3eb4dca5f1b2_17152787',
  ),
  'content' => 
  array (
    0 => 'Block_15131242945c3eb4dca63030_63246087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != "index") {?>class="col-lg-12 col-md-12 col-sm-12 col-xs-12"<?php }?>>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15131242945c3eb4dca63030_63246087', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
