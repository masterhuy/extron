<?php
/* Smarty version 3.1.33, created on 2019-02-25 03:46:36
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\checkout\_partials\cart-summary-product-line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73ab6cd60f85_35751337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31d54047284babb7bf47188cef6971db206f75a3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\checkout\\_partials\\cart-summary-product-line.tpl',
      1 => 1548920682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73ab6cd60f85_35751337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1235122665c73ab6cd55406_89191482', 'cart_summary_product_line');
}
/* {block 'cart_summary_product_line'} */
class Block_1235122665c73ab6cd55406_89191482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_product_line' => 
  array (
    0 => 'Block_1235122665c73ab6cd55406_89191482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="media-left">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="media-object" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
        </a>
    </div>
    <div class="media-body">
        <span class="product-link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="product-quantity">x<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="product-price float-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>

    </div>
<?php
}
}
/* {/block 'cart_summary_product_line'} */
}
