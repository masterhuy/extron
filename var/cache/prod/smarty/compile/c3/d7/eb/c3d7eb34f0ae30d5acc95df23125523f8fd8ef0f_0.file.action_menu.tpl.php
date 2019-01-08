<?php
/* Smarty version 3.1.33, created on 2019-01-07 21:51:20
  from 'D:\xamppp\htdocs\jms_extron\modules\ps_mbo\views\templates\admin\include\action_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c34102852f817_89446023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3d7eb34f0ae30d5acc95df23125523f8fd8ef0f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\modules\\ps_mbo\\views\\templates\\admin\\include\\action_menu.tpl',
      1 => 1546846074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c34102852f817_89446023 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<div v-if="module.attributes.url_active == 'buy'" class="form-action-button-container">
    <a class="btn btn-primary btn-primary-reverse btn-block btn-outline-primary light-button module_action_menu_go_to_addons" v-bind:href="module.attributes.url" target="_blank">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discover','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

    </a>
 </div>
<div v-else class="btn-group form-action-button-container">
	<form class="btn-group form-action-button" method="post" v-bind:action="module.attributes.urls.install">
		<button type="submit" class="btn btn-primary-reverse btn-outline-primary light-button module_action_menu_install" >
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

		</button>
	</form>
</div><?php }
}
