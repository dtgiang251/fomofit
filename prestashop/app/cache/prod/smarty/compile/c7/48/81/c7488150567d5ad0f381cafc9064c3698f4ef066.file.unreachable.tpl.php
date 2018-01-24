<?php /* Smarty version Smarty-3.1.19, created on 2018-01-22 20:06:37
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/checkout/_partials/steps/unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7329854945a668a9d528fc6-45977471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7488150567d5ad0f381cafc9064c3698f4ef066' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1516669384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7329854945a668a9d528fc6-45977471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a668a9d53d023_44763991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a668a9d53d023_44763991')) {function content_5a668a9d53d023_44763991($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
