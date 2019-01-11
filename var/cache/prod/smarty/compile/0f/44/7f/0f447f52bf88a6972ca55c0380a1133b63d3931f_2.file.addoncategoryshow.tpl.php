<?php
/* Smarty version 3.1.33, created on 2019-01-10 23:33:48
  from 'D:\xamppp\htdocs\jms_extron\modules\jmspagebuilder\views\templates\hook\addoncategoryshow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c381caced0d37_62829282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f447f52bf88a6972ca55c0380a1133b63d3931f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncategoryshow.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c381caced0d37_62829282 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['id_cat']->value) && $_smarty_tpl->tpl_vars['id_cat']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['show_img']->value == 1) {?>
	<?php $_smarty_tpl->_assignInScope('categoryLink', $_smarty_tpl->tpl_vars['link']->value->getcategoryLink($_smarty_tpl->tpl_vars['id_cat']->value,$_smarty_tpl->tpl_vars['category']->value['link_rewrite']));?>
	<div class="thumb">
		<a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="category_image">
			<img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;
echo $_smarty_tpl->tpl_vars['id_cat']->value;?>
_thumb.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="img-responsive"/>
		</a>
	</div>
	<?php }?>
	<div class="parent-category">
		<a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['num_child']->value != 0) {?>
		<ul class="child-categories">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
				<?php $_smarty_tpl->_assignInScope('categoryLink', $_smarty_tpl->tpl_vars['link']->value->getcategoryLink($_smarty_tpl->tpl_vars['c']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']));?>
				<li>			
					<a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</a>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }
} else { ?>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No categories','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
</p>
<?php }?>

<?php }
}
