<?php /* Smarty version Smarty-3.1.19, created on 2018-01-22 20:06:37
         compiled from "modules/poslogo/logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16905380535a668a9d8743e4-77430310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f4b85e0c4ed59fb012aef07642a9dd1592e7d05' => 
    array (
      0 => 'modules/poslogo/logo.tpl',
      1 => 1513675752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16905380535a668a9d8743e4-77430310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logos' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a668a9d8c48a6_51237242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a668a9d8c48a6_51237242')) {function content_5a668a9d8c48a6_51237242($_smarty_tpl) {?>
<div class="pos_logo product_block_container">
	<div class="row pos_content">
		<div class="logo-slider owl-carousel">
				<?php  $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['logo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['logo']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['logo']->iteration=0;
 $_smarty_tpl->tpl_vars['logo']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->key => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->_loop = true;
 $_smarty_tpl->tpl_vars['logo']->iteration++;
 $_smarty_tpl->tpl_vars['logo']->index++;
 $_smarty_tpl->tpl_vars['logo']->first = $_smarty_tpl->tpl_vars['logo']->index === 0;
 $_smarty_tpl->tpl_vars['logo']->last = $_smarty_tpl->tpl_vars['logo']->iteration === $_smarty_tpl->tpl_vars['logo']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['logo']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['logo']->last;
?>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%1==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>
					<div>
					<?php }?>
						<div class="item-banklogo">
							<a href ="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
								<img class="replace-2x img-responsive" src ="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt ="<?php echo smartyTranslate(array('s'=>'Logo','mod'=>'poslogo'),$_smarty_tpl);?>
" />
							</a>
						</div>
					<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%1==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
					</div>
					<?php }?>
				<?php } ?>
		</div>
	</div>
</div>

<?php }} ?>
