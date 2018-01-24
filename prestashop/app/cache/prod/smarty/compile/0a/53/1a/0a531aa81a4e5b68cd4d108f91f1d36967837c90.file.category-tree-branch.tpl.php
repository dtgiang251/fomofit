<?php /* Smarty version Smarty-3.1.19, created on 2018-01-23 08:41:27
         compiled from "modules/possearchproducts/category-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:857595415a673b87ad5893-76152893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a531aa81a4e5b68cd4d108f91f1d36967837c90' => 
    array (
      0 => 'modules/possearchproducts/category-tree-branch.tpl',
      1 => 1513675752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '857595415a673b87ad5893-76152893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'main' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a673b87b43776_50081035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a673b87b43776_50081035')) {function content_5a673b87b43776_50081035($_smarty_tpl) {?>

<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
	<?php if (!$_smarty_tpl->tpl_vars['main']->value) {?><?php echo htmlspecialchars(str_repeat('- ',(2*$_smarty_tpl->tpl_vars['node']->value['currentDepth'])), ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

</option>
<?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0) {?>
		<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
				<?php echo $_smarty_tpl->getSubTemplate ("modules/possearchproducts/category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'main'=>false), 0);?>

		<?php } ?>
<?php }?>
<?php }} ?>
