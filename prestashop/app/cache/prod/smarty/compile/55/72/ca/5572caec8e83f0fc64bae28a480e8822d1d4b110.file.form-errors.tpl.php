<?php /* Smarty version Smarty-3.1.19, created on 2018-01-22 20:25:28
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/form-errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9010646935a668f0876a9a6-25072441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5572caec8e83f0fc64bae28a480e8822d1d4b110' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/form-errors.tpl',
      1 => 1516669384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9010646935a668f0876a9a6-25072441',
  'function' => 
  array (
  ),
  'unifunc' => 'content_5a668f0877ec45_55758179',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a668f0877ec45_55758179')) {function content_5a668f0877ec45_55758179($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
