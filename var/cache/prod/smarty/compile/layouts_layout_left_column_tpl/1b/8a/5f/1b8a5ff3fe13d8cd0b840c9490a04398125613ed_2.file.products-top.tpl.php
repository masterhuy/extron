<?php
/* Smarty version 3.1.33, created on 2019-01-30 05:04:19
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5176a398a986_55410951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b8a5ff3fe13d8cd0b840c9490a04398125613ed' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1546847038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5c5176a398a986_55410951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="filters-panel">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 view-mode left clearfix">
			<label class="sort-by">View mode:</label>
			<div class="button">
				<a class="view-grid <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>active<?php }?>" href="#">
					<i class="fa fa-th"></i>
				</a> 
				<a class="view-list <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 0) {?>active<?php }?>" href="#">
					<i class="fa fa-th-list"></i>
				</a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 right">
			<div class="view-mode ">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19473659095c5176a3986b01_76471055', 'sort_by');
?>

			</div>
		</div>
	</div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_19473659095c5176a3986b01_76471055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_19473659095c5176a3986b01_76471055',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
			<?php
}
}
/* {/block 'sort_by'} */
}
