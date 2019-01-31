<?php
/* Smarty version 3.1.33, created on 2019-01-31 03:36:47
  from 'D:\xamppp\htdocs\jms_extron\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c52b39fabc315_42740143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e0e8f894f1f115d65fcf09dc9e781c8c7ee6d9b' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\pdf\\invoice.shipping-tab.tpl',
      1 => 1545054348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c52b39fabc315_42740143 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
