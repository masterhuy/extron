<?php
/* Smarty version 3.1.33, created on 2019-01-28 02:01:15
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\errors\page-not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4ea8bb56b2f8_70248482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe22fd2eaf12970332f1ecb624e6b5526561a468' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\errors\\page-not-found.tpl',
      1 => 1548658834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4ea8bb56b2f8_70248482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'404','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h3>
	<p class="text-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Oops! This page Could Not Be Found!','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</p>
	<p class="text-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry bit the page you are looking for does not exist, have been removed or name changed','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</p>
	<a class="btn-effect1" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to homepage','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1753925055c4ea8bb567473_72792102', 'hook_not_found');
?>

	</div>
</section>
<?php }
/* {block 'hook_not_found'} */
class Block_1753925055c4ea8bb567473_72792102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_not_found' => 
  array (
    0 => 'Block_1753925055c4ea8bb567473_72792102',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
}
