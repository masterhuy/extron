<?php
/* Smarty version 3.1.33, created on 2019-01-15 23:55:36
  from 'D:\xamppp\htdocs\jms_extron\modules\jmsflashsales\views\templates\hook\jmsflashsales-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3eb948380347_07225941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20fdd08a79cf35a0bb63cd7f606f97a36eb6edb4' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\modules\\jmsflashsales\\views\\templates\\hook\\jmsflashsales-tab.tpl',
      1 => 1547613638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3eb948380347_07225941 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
jQuery(function ($) {
    "use strict";
	var productCarousel = $(".flashsales-tab-carousel");
  });
<?php echo '</script'; ?>
>


<div class="jmsflashsales-tab">
	<div class="flashsales-countdown"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['expiretime']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
	<div class="tabpanel">
		<ul class="nav nav-stacked nav-tabs">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>
				<?php $_smarty_tpl->_assignInScope('cat_products', $_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->tpl_vars['k']->value]);?>	
				<?php if (!empty($_smarty_tpl->tpl_vars['cat_products']->value)) {?>
				<li <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>class="active"<?php }?>>
					<a href="#category-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" aria-controls="" data-toggle="tab">
						<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

					</a>
				</li>	
				<?php }?>	
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
	<div class="tab-content">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'cat_products', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['cat_products']->value) {
?>
			<?php if (!empty($_smarty_tpl->tpl_vars['cat_products']->value)) {?>
			<div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>active<?php }?>" id="category-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
">	
				<div class="flashsales-tab-carousel">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>	
						Product Code Here	
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>	
			</div>
			<?php }?>	
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div><?php }
}
