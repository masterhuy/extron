<?php
/* Smarty version 3.1.33, created on 2019-02-28 04:42:53
  from 'D:\xamppp\htdocs\jms_extron\themes\jms_extron\modules\jmspagebuilder\views\templates\hook\addonalert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c77ad1debe0f6_29583520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '506da29534e74d30675600e501216bc9213ee5a7' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\themes\\jms_extron\\modules\\jmspagebuilder\\views\\templates\\hook\\addonalert.tpl',
      1 => 1548238911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c77ad1debe0f6_29583520 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alert_type']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['box_class']->value, ENT_QUOTES, 'UTF-8');
}?>">
  <?php if ($_smarty_tpl->tpl_vars['show_close_btn']->value) {?><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php }?>
  <?php echo $_smarty_tpl->tpl_vars['alert_message']->value;?>

</div>



<?php }
}
