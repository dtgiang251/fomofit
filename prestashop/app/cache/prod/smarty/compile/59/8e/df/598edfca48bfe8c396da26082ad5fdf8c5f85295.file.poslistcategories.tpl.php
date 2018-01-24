<?php /* Smarty version Smarty-3.1.19, created on 2018-01-23 08:41:27
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/modules/poslistcategories/views/templates/hook/poslistcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9435865605a673b87c7e168-17399301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '598edfca48bfe8c396da26082ad5fdf8c5f85295' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/modules/poslistcategories/views/templates/hook/poslistcategories.tpl',
      1 => 1516669388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9435865605a673b87c7e168-17399301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'link' => 0,
    'count' => 0,
    'slider_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a673b87dd1449_66613836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a673b87dd1449_66613836')) {function content_5a673b87dd1449_66613836($_smarty_tpl) {?>

<div class="poslistcategories">
	<div class="row">
		<div class="block_content owl-carousel">
		<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['category']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['category']->iteration=0;
 $_smarty_tpl->tpl_vars['category']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['category']->iteration++;
 $_smarty_tpl->tpl_vars['category']->index++;
 $_smarty_tpl->tpl_vars['category']->first = $_smarty_tpl->tpl_vars['category']->index === 0;
 $_smarty_tpl->tpl_vars['category']->last = $_smarty_tpl->tpl_vars['category']->iteration === $_smarty_tpl->tpl_vars['category']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['category']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['category']->last;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>
			<div class="item-listcategories">
			<?php }?>	
				<div class="list-categories">
					<?php if ($_smarty_tpl->tpl_vars['category']->value['image']) {?>
					<div class="thumb-store">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."poslistcategories/images/".((string)$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['image'],'htmlall','UTF-8'))), ENT_QUOTES, 'UTF-8');?>
" alt="" /></a>
					</div>
					<?php }?>
					<div class="hover-thumb-h"></div>
					<div class="nd">
						<h3><a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
</a></h3>	
						<a href="#" class="desktop-none"><span>view</span></a>	
					</div>	
							
				</div>	
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%2==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
			</div>
			<?php }?>			
			<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
		<?php } ?>		
		</div>
	</div>	
</div>
<script type="text/javascript">
	$(document).ready(function() {
		var poslistcategories = $(".poslistcategories .block_content");
		poslistcategories.owlCarousel({
			autoplay :  <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['auto_play']) {?><?php if ($_smarty_tpl->tpl_vars['slider_options']->value['delay']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['delay'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>3000<?php }?><?php } else { ?> false<?php }?>,
			smartSpeed : <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['speed_slide']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['speed_slide'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1000<?php }?>,
			nav : <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['show_arrow']) {?> true <?php } else { ?> false <?php }?>,
			dots : <?php if ($_smarty_tpl->tpl_vars['slider_options']->value['show_pagination']) {?> true <?php } else { ?> false <?php }?>,
			responsive:{
				0:{
					items:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_xxs'], ENT_QUOTES, 'UTF-8');?>
,
				},
				480:{
					items:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_xs'], ENT_QUOTES, 'UTF-8');?>
,
				},
				768:{
					items:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_sm'], ENT_QUOTES, 'UTF-8');?>
,
	
				},
				992:{
					items:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_md'], ENT_QUOTES, 'UTF-8');?>
,
				},
				1200:{
					items:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['number_item'], ENT_QUOTES, 'UTF-8');?>
,
				}
			}
		});
	});
</script>
<?php }} ?>
