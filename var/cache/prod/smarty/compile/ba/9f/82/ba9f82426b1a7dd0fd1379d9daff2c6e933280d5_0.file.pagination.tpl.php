<?php
/* Smarty version 3.1.33, created on 2019-01-29 22:33:27
  from 'D:\xamppp\htdocs\jms_extron\modules\jmsblog\views\templates\admin\jmsblog_comment\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c511b07640a82_53504446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba9f82426b1a7dd0fd1379d9daff2c6e933280d5' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_extron\\modules\\jmsblog\\views\\templates\\admin\\jmsblog_comment\\pagination.tpl',
      1 => 1542078179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c511b07640a82_53504446 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jms-blog-pagination">	
	<?php if ($_smarty_tpl->tpl_vars['ctotal']->value > $_smarty_tpl->tpl_vars['climit']->value) {?>
	<div class="pagination">
		<ul>
		<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['cpages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['cpages']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
			<li class="<?php if (($_smarty_tpl->tpl_vars['foo']->value-1)*$_smarty_tpl->tpl_vars['climit']->value == $_smarty_tpl->tpl_vars['cstart']->value) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogComment');?>
&configure=jmsblog&cstart=<?php echo ($_smarty_tpl->tpl_vars['foo']->value-1)*$_smarty_tpl->tpl_vars['climit']->value;?>
&climit=<?php echo $_smarty_tpl->tpl_vars['climit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
		<?php }
}
?>
		</ul>
	</div>
	<?php }?>
	<div class="counter-div">
		<span>Total : <?php echo $_smarty_tpl->tpl_vars['ctotal']->value;?>
 items</span>
	</div>
</div><?php }
}
