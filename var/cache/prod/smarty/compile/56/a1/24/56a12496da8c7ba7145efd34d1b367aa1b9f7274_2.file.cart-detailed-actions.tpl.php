<?php
/* Smarty version 3.1.33, created on 2019-02-21 04:09:55
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\checkout\_partials\cart-detailed-actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6e6ae3d3a2d2_29490343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56a12496da8c7ba7145efd34d1b367aa1b9f7274' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\checkout\\_partials\\cart-detailed-actions.tpl',
      1 => 1548918830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6e6ae3d3a2d2_29490343 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="checkout cart-detailed-actions card-block">
  <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
    <div class="alert alert-warning" role="alert">
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <div class="text-xs-center">
      <button type="button" class="btn-default disabled btn-checkout" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    </div>
  <?php } else { ?>
    <div class="text-xs-center">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
" class="btn-default btn-active btn-checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayExpressCheckout'),$_smarty_tpl ) );?>

    </div>
  <?php }?>
</div>
<?php }
}
