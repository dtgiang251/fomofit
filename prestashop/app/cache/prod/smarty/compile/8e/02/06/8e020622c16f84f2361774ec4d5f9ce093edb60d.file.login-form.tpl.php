<?php /* Smarty version Smarty-3.1.19, created on 2018-01-18 06:34:38
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/customer/_partials/login-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10511826885a60864ebecf38-33203480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e020622c16f84f2361774ec4d5f9ce093edb60d' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/customer/_partials/login-form.tpl',
      1 => 1513675758,
      2 => 'file',
    ),
    '5572caec8e83f0fc64bae28a480e8822d1d4b110' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/form-errors.tpl',
      1 => 1513675758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10511826885a60864ebecf38-33203480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'action' => 0,
    'formFields' => 0,
    'field' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a60864ecf4447_99555381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a60864ecf4447_99555381')) {function content_5a60864ecf4447_99555381($_smarty_tpl) {?>


  
    <?php /*  Call merged included template "_partials/form-errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, '10511826885a60864ebecf38-33203480');
content_5a60864ec0a547_63413057($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/form-errors.tpl" */?>
  

  <form id="login-form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">

    <section>
      
        <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
          
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

          
        <?php } ?>
      
      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo smartyTranslate(array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

        </a>
      </div>
    </section>

    
      <footer class="form-footer text-sm-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        
          <button class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
            <?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </button>
        
      </footer>
    

  </form>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-18 06:34:38
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/form-errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a60864ec0a547_63413057')) {function content_5a60864ec0a547_63413057($_smarty_tpl) {?>
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
