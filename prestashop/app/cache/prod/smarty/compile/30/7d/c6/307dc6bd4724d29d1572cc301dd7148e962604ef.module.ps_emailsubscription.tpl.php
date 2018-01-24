<?php /* Smarty version Smarty-3.1.19, created on 2018-01-23 08:41:28
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8283256215a673b88c464b2-18120765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1516669391,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '8283256215a673b88c464b2-18120765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a673b88ccf611_28907080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a673b88ccf611_28907080')) {function content_5a673b88ccf611_28907080($_smarty_tpl) {?><div class="ft_newsletter">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12 box-form">
			<h2><?php echo smartyTranslate(array('s'=>'Sign up to our newsletter to keep up to date'),$_smarty_tpl);?>
</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
					<div class="box-name">
						<label>Name</label>
						<div class="input-wrapper">
						  <input
							name="email"
							class="input_txt"
							type="text"
							value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
							placeholder="<?php echo smartyTranslate(array('s'=>'Enter your name','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
"
						  >
						</div>
					</div>
					<div class="box-name box-email">
						<label>Email</label>
						<div class="input-wrapper">
						  <input
							name="email"
							class="input_txt"
							type="text"
							value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
							placeholder="<?php echo smartyTranslate(array('s'=>'Enter your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
"
						  >
						</div>
					</div>
					<button
					  class="btn btn-primary"
					  name="submitNewsletter"
					  type="submit"
					><span><?php echo smartyTranslate(array('s'=>'Submit','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span></button>
					<input type="hidden" name="action" value="0">
				</form>
			</div>
		</div>
	</div>
</div><?php }} ?>
