<?php
/* Smarty version 3.1.33, created on 2019-02-11 23:13:18
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c6247de9a9069_97287378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1548901794,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6247de9a9069_97287378 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block-contact links wrapper">
    <div class="hidden-sm-down">
        <div class="addon-title">
            <h3 class="text-uppercase block-contact-title">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Store','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </h3>
        </div>
        <div class="address section">
            <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['company'];?>
 <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1'];?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
            <div class="phone section">
                <div class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotline:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
                                <p>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                </p>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
            <div class="fax section">
                <div class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
                                <p>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                </p>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
            <div class="career section">
                <div class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Career:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
                                <p>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you’re interested in employment opportunities at','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['company'];?>
, <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'please email us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                    <br>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%email%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                </p>
            </div>
      <?php }?>
  </div>
</div>

<?php }
}
