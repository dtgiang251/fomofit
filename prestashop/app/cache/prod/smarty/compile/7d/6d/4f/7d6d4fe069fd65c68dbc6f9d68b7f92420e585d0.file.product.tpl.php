<?php /* Smarty version Smarty-3.1.19, created on 2018-01-22 20:27:25
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/catalog/_partials/miniatures/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7441044435a668f7d0ca171-96819292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d6d4fe069fd65c68dbc6f9d68b7f92420e585d0' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1516669383,
      2 => 'file',
    ),
    'cb0d61eef2460b5ced4cb67db39d2dd3441f9fa6' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/catalog/_partials/variant-links.tpl',
      1 => 1516669382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7441044435a668f7d0ca171-96819292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'flag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a668f7d2438e3_16950279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a668f7d2438e3_16950279')) {function content_5a668f7d2438e3_16950279($_smarty_tpl) {?><article class="js-product-miniature item_in" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
	<div class="img_block">
		
		  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			<img
			  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
			  alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
			  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
			>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
		
		  </a>
		
		
		  <ul class="product-flag">
			<?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['flag']->value['type']=="discount") {?>
					<?php continue 1?>
				<?php }?>
				<li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
			<?php } ?>
		  </ul>
		
		
	</div>
    <div class="product_desc">
		
			<h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" itemprop="name" class="product_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
		
		
			<div class="hook-reviews">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

			</div>
		
		
			<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
			  <div class="product-price-and-shipping">
				<span itemprop="price" class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?> price_sale <?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
				  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>


				  <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
				  <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
					<span class="discount-percentage"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span></span>
				  <?php }?>
				<?php }?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>


				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>


				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

			  </div>
			<?php }?>
		
		<ul class="add-to-links">
			<li class="cart">
				<?php echo $_smarty_tpl->getSubTemplate ('catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

			</li>
			<li>
				<a href="#" class="quick-view" data-link-action="quickview" title="<?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"><i class="fa fa-heart"></i></a>
			</li>
		</ul>
		
			<div class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
		
		
				<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
				  <?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '7441044435a668f7d0ca171-96819292');
content_5a668f7d1ea1e4_22767661($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
				<?php }?>
		
    </div>
</article>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-22 20:27:25
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/catalog/_partials/variant-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a668f7d1ea1e4_22767661')) {function content_5a668f7d1ea1e4_22767661($_smarty_tpl) {?><div class="variant-links">
  <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
       class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
       
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
    ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
  <?php } ?>
  <span class="js-count count"></span>
</div>
<?php }} ?>
