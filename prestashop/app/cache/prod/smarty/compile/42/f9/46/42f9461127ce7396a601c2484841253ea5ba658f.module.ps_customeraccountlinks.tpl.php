<?php /* Smarty version Smarty-3.1.19, created on 2018-01-22 20:06:37
         compiled from "module:ps_customeraccountlinks/ps_customeraccountlinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4566071595a668a9db92377-40946128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1516669392,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '4566071595a668a9db92377-40946128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a668a9dbb2f29_53868526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a668a9dbb2f29_53868526')) {function content_5a668a9dbb2f29_53868526($_smarty_tpl) {?><div id="block_myaccount_infos" class=" footer_block col-xs-12 col-sm-12 col-md-4 col-lg-4 links wrapper">
  <h3 class="footer_header">
		<?php echo smartyTranslate(array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

  </h3>
  <ul class="account-list footer_list toggle-footer" id="footer_account_list">
    <?php  $_smarty_tpl->tpl_vars['my_account_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['my_account_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['my_account_urls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['my_account_url']->key => $_smarty_tpl->tpl_vars['my_account_url']->value) {
$_smarty_tpl->tpl_vars['my_account_url']->_loop = true;
?>
        <li>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['title'], ENT_QUOTES, 'UTF-8');?>

          </a>
        </li>
    <?php } ?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMyAccountBlock'),$_smarty_tpl);?>

	</ul>
</div>
<?php }} ?>
