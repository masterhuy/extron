<?php
/* Smarty version 3.1.33, created on 2019-02-26 05:18:26
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\modules\jmspagebuilder\views\templates\hook\addonfeature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c751272417b60_30332471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5906f74c730c67422d3236a6aeec58eb7dede190' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\modules\\jmspagebuilder\\views\\templates\\hook\\addonfeature.tpl',
      1 => 1546847037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c751272417b60_30332471 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="feature-box<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['text_align']->value) {?>style="text-align:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['text_align']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['image_type']->value == 'image' && $_smarty_tpl->tpl_vars['image']->value) {?>	
		<div class="image"><img class="img-responsive" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alt_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />	</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
		<div class="feature-img">
			<i class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['icon_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i>
		</div>
	<?php }?>
	<div class="include_content_s">
		<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>	
			<h4><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['html_content']->value) {?>
			<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>

		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?>
		<a class="btn-effect1 btn-shopnow"  href="<?php if ($_smarty_tpl->tpl_vars['button_link']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button_link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value == 'new window') {?> target="_blank"
		<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
	<?php }?>
</div>	
<?php }
}
