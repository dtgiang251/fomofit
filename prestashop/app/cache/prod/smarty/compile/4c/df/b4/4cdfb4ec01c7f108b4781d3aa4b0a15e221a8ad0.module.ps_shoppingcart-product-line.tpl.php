<?php /* Smarty version Smarty-3.1.19, created on 2018-01-23 08:41:27
         compiled from "module:ps_shoppingcart/ps_shoppingcart-product-line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12361721475a673b879c1974-18174107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cdfb4ec01c7f108b4781d3aa4b0a15e221a8ad0' => 
    array (
      0 => 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl',
      1 => 1516669386,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '12361721475a673b879c1974-18174107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'property' => 0,
    'property_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a673b87a2a2c5_95374765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a673b87a2a2c5_95374765')) {function content_5a673b87a2a2c5_95374765($_smarty_tpl) {?><div class="img_content">
	<img class="product-image img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
">
	<span class="product-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
x</span>
</div>
<div class="right_block">
	<span class="product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
	<span class="product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
	<a  class="remove-from-cart"
		rel="nofollow"
		href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
		data-link-action="remove-from-cart"
		title="<?php echo smartyTranslate(array('s'=>'Remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
	>
		<i class="fa-remove"></i>
	</a>
	<div class="attributes_content">
		<?php  $_smarty_tpl->tpl_vars["property_value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["property_value"]->_loop = false;
 $_smarty_tpl->tpl_vars["property"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["property_value"]->key => $_smarty_tpl->tpl_vars["property_value"]->value) {
$_smarty_tpl->tpl_vars["property_value"]->_loop = true;
 $_smarty_tpl->tpl_vars["property"]->value = $_smarty_tpl->tpl_vars["property_value"]->key;
?>
		  <span><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property']->value, ENT_QUOTES, 'UTF-8');?>
</strong>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['property_value']->value, ENT_QUOTES, 'UTF-8');?>
</span><br>
		<?php } ?>
	</div>
</div><?php }} ?>
