<?php /* Smarty version Smarty-3.1.19, created on 2018-01-23 08:41:26
         compiled from "module:ps_customersignin/ps_customersignin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8279888555a673b86ee37e8-41291352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersignin/ps_customersignin.tpl',
      1 => 1516669389,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '8279888555a673b86ee37e8-41291352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_account_url' => 0,
    'link' => 0,
    'logged' => 0,
    'logout_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a673b870008a5_32525480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a673b870008a5_32525480')) {function content_5a673b870008a5_32525480($_smarty_tpl) {?><div id="user_info_top" class="localiz_block dropdown js-dropdown">
	<span class="expand-more" data-toggle="dropdown">
		<?php echo smartyTranslate(array('s'=>'My account','d'=>'Shop.Navigation'),$_smarty_tpl);?>

		<i class="fa-angle-down"></i>
	 </span>
      <ul class="dropdown-menu">
	 	<li>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="dropdown-item"><?php echo smartyTranslate(array('s'=>'My account','d'=>'Shop.Navigation'),$_smarty_tpl);?>
</a>
		</li>
		<li>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink("cart",true),"html","UTF-8"), ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
		</li>
		<li>
			<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
			  <a
				class="logout hidden-sm-down dropdown-item"
				href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
				rel="nofollow"
			  >
				<?php echo smartyTranslate(array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

			  </a>
			<?php } else { ?>
			  <a
				href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
				title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
"
				rel="nofollow" class="dropdown-item"
			  >
				<?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

			  </a>
			<?php }?>
		</li>
	
	</ul>
</div><?php }} ?>
