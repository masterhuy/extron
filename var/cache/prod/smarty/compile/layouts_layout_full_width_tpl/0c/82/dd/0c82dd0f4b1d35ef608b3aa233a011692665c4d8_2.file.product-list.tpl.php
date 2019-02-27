<?php
/* Smarty version 3.1.33, created on 2019-02-27 03:33:25
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c764b55b845d3_19657755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c82dd0f4b1d35ef608b3aa233a011692665c4d8' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1551233069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5c764b55b845d3_19657755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3954170715c764b55b70d56_51554837', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_top'} */
class Block_20036932965c764b55b74bd7_08321701 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_3957594045c764b55b7c8d8_94085441 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="" class="hidden-sm-down">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_1485188345c764b55b80750_19724517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_18307411505c764b55b80758_74776682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_3954170715c764b55b70d56_51554837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3954170715c764b55b70d56_51554837',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_20036932965c764b55b74bd7_08321701',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_3957594045c764b55b7c8d8_94085441',
  ),
  'product_list' => 
  array (
    0 => 'Block_1485188345c764b55b80750_19724517',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_18307411505c764b55b80758_74776682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">
    <section id="products">
		
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
        <div id="">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20036932965c764b55b74bd7_08321701', 'product_list_top', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3957594045c764b55b7c8d8_94085441', 'product_list_active_filters', $this->tplIndex);
?>

<div id="product_list" class="product_list item-gutter-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_gutterwidth']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>products-list-in-column<?php } else { ?>products-list-in-row<?php }?>  products-list-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_productperrow']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1485188345c764b55b80750_19724517', 'product_list', $this->tplIndex);
?>

        </div>

        <div id="js-product-list-bottom">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18307411505c764b55b80758_74776682', 'product_list_bottom', $this->tplIndex);
?>

        </div>

      <?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php }?>
    </section>

  </section>
<?php
}
}
/* {/block 'content'} */
}
