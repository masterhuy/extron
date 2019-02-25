<?php
/* Smarty version 3.1.33, created on 2019-02-25 04:44:37
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\templates\customer\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73b905b9e394_08524545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cbf8928924693520b2aa3e4e377a107337c0a88' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\templates\\customer\\registration.tpl',
      1 => 1546847038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73b905b9e394_08524545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14022907105c73b905b9e395_39740555', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19445492125c73b905b9e392_03376477', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_14022907105c73b905b9e395_39740555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_14022907105c73b905b9e395_39740555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'register_form_container'} */
class Block_3329842005c73b905b9e393_25759269 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_top']->value;?>

      <section class="register-form">
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already have an account?','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in instead!','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
</a></p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['register_form']->value),$_smarty_tpl ) );?>

      </section>
    <?php
}
}
/* {/block 'register_form_container'} */
/* {block 'page_content'} */
class Block_19445492125c73b905b9e392_03376477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_19445492125c73b905b9e392_03376477',
  ),
  'register_form_container' => 
  array (
    0 => 'Block_3329842005c73b905b9e393_25759269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3329842005c73b905b9e393_25759269', 'register_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
