<?php /* Smarty version Smarty-3.1.19, created on 2018-01-22 20:27:25
         compiled from "modules/posrotatorimg/rotator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7852461635a668f7d277ee8-55104910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c282268bbfdf1287eb7a2af3f9494d76ea982c3' => 
    array (
      0 => 'modules/posrotatorimg/rotator.tpl',
      1 => 1513675752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7852461635a668f7d277ee8-55104910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rotator_img' => 0,
    'product' => 0,
    'image' => 0,
    'class_name' => 0,
    'imagesize' => 0,
    'imageIds' => 0,
    'link' => 0,
    'homeSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a668f7d30db74_95091649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a668f7d30db74_95091649')) {function content_5a668f7d30db74_95091649($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['rotator_img']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rotator_img']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
		  <?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
          <img class="img-responsive second-image <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_name']->value, ENT_QUOTES, 'UTF-8');?>
" 
		  <?php if (isset($_smarty_tpl->tpl_vars['imagesize']->value)) {?>
			src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,$_smarty_tpl->tpl_vars['imagesize']->value),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
		  <?php } else { ?>
			src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'home_default'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
		  <?php }?>
		  alt="" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeSize']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeSize']->value['height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> itemprop="image"  />
    <?php } ?>
<?php }?>		<?php }} ?>
