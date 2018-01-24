<?php /* Smarty version Smarty-3.1.19, created on 2018-01-23 08:41:27
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/modules/posvegamenu/posvegamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1132305175a673b87868c75-74824399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c57a0a515bd1fbeb4ee7b18504c3b9a2dcc0eb24' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/modules/posvegamenu/posvegamenu.tpl',
      1 => 1516669386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1132305175a673b87868c75-74824399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'megamenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a673b878794e7_38480158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a673b878794e7_38480158')) {function content_5a673b878794e7_38480158($_smarty_tpl) {?><div class="navleft-container hidden-md-down ">
	<div class="pt_vegamenu">
		<div class="pt_vmegamenu_title">
			<h2><i class="ion-navicon"></i><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'posvegamenu'),$_smarty_tpl);?>
</h2>
		</div>
		<div id="pt_vmegamenu" class="pt_vmegamenu pt_vegamenu_cate">
			<?php echo $_smarty_tpl->tpl_vars['megamenu']->value;?>

		</div>
		<div class="clearfix"></div>
	</div>	
</div><?php }} ?>
