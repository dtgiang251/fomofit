<?php /* Smarty version Smarty-3.1.19, created on 2018-01-18 06:34:37
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/customer/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3871979815a60864db3a2c5-97211078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a66b2ed7313541629be467d5aa9f74cf15870ac3' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/customer/authentication.tpl',
      1 => 1513675758,
      2 => 'file',
    ),
    '085a2a86eee88f458162eb9b813cda06b45acf4a' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/page.tpl',
      1 => 1514217484,
      2 => 'file',
    ),
    '50a114118678c38c91ff9e081fb3e4fe740111f2' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/layouts/layout-full-width.tpl',
      1 => 1514215666,
      2 => 'file',
    ),
    'd2354089aa167622fe58fec04d930bad1bd2cd29' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/layouts/layout-both-columns.tpl',
      1 => 1514472636,
      2 => 'file',
    ),
    '7bd53eeea8ab619b92fe45c432280b41997e0fd0' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/stylesheets.tpl',
      1 => 1513675758,
      2 => 'file',
    ),
    'd7aae569c6f66a09f8d799a65a4b8c48ba9fd415' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/javascript.tpl',
      1 => 1513675758,
      2 => 'file',
    ),
    'df72c9edf3b5b9a23757e631308db01b0b66a7dc' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/head.tpl',
      1 => 1513934636,
      2 => 'file',
    ),
    'f914ff516f1acddc91175e87ba204a8e75d3d2f5' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/catalog/_partials/product-activation.tpl',
      1 => 1513675758,
      2 => 'file',
    ),
    '1126e0b5ea93cd90c963633d2b43f52fe7db63b6' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/header.tpl',
      1 => 1514539220,
      2 => 'file',
    ),
    '884ab8f347b0487404ef9f1a1c6593af7d07b5c3' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/breadcrumb.tpl',
      1 => 1513675758,
      2 => 'file',
    ),
    '6a155625416ee92de3e1fc3bb654500148332a3c' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/notifications.tpl',
      1 => 1513675758,
      2 => 'file',
    ),
    '61007aa12ed53e10f11f6b921e6f6b8dcbdd5775' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/footer.tpl',
      1 => 1514539226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3871979815a60864db3a2c5-97211078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a60864e491da6_23160841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a60864e491da6_23160841')) {function content_5a60864e491da6_23160841($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3871979815a60864db3a2c5-97211078');
content_5a60864dc34a31_34148304($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>sub-page<?php }?>">

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3871979815a60864db3a2c5-97211078');
content_5a60864de6cb47_03347814($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
	  <div class="header-container">
		  <header id="header">
			
			  <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3871979815a60864db3a2c5-97211078');
content_5a60864ded3310_14546846($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
			
		  </header>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
			<div class=" pos_bannerslide">
				<div class="container">
					<div class="row">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTopColumn'),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		<?php }?>
		
			<?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3871979815a60864db3a2c5-97211078');
content_5a60864e053135_21337482($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
		
	  </div>

      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3871979815a60864db3a2c5-97211078');
content_5a60864e101ef3_47428371($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
	
      <div id="wrapper">
        <div class="inner-wrapper container">
			<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBlockPosition4'),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBlockPosition3'),$_smarty_tpl);?>

			<?php }?>
			<div class="row">
			  

			  
  <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperTop"),$_smarty_tpl);?>

    

  <div id="main">

    
      
        <header class="page-header">
          <h1>
  <?php echo smartyTranslate(array('s'=>'Log in to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

</h1>
        </header>
      
    

    
      <section id="content" class="page-content card card-block">
        
        
    
      <section class="login-form">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl);?>

      </section>
      <hr/>
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl);?>

      
      <div class="no-account">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
          <?php echo smartyTranslate(array('s'=>'No account? Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

        </a>
      </div>
    

      </section>
    

    
      <footer class="page-footer">
        
          <!-- Footer content -->
        
      </footer>
    

  </div>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperBottom"),$_smarty_tpl);?>

  </div>


			  
			</div>
        </div>
      </div>
      <footer id="footer">

        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3871979815a60864db3a2c5-97211078');
content_5a60864e473b48_21358441($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </main>

    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

	<div class="back-top"><a href= "#" class="back-top-button"></a></div>

  </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-18 06:34:37
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a60864dc34a31_34148304')) {function content_5a60864dc34a31_34148304($_smarty_tpl) {?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">


  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">

  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '3871979815a60864db3a2c5-97211078');
content_5a60864dcf64f4_15346627($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '3871979815a60864db3a2c5-97211078');
content_5a60864dd6bfa3_32428583($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '3871979815a60864db3a2c5-97211078');
content_5a60864dd6bfa3_32428583($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-18 06:34:37
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a60864dcf64f4_15346627')) {function content_5a60864dcf64f4_15346627($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">

<?php } ?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-18 06:34:37
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a60864dd6bfa3_32428583')) {function content_5a60864dd6bfa3_32428583($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-18 06:34:37
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a60864de6cb47_03347814')) {function content_5a60864de6cb47_03347814($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons pull-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-18 06:34:37
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a60864ded3310_14546846')) {function content_5a60864ded3310_14546846($_smarty_tpl) {?>


	<nav class="header-nav">
		<div class="container">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav'),$_smarty_tpl);?>

		</div>
	</nav>


  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="main-menu col col-lg-4 col-md-12 col-xs-12">
          
          <nav class="main-menu">
			<ul>
				<li>
					<a href="#">Goals</a>
					<ul>
						<li ><a href="#">Toned & pumped</a></li>
						<li ><a href="#">Fat loss</a></li>
						<li ><a href="#">Me, myself & I</a></li>
						<li ><a href="#">Buns & guns</a></li>
						<li><a href="#">Lean machine</a></li>
						<li ><a href="#">Back to basics</a></li>
					</ul>
				</li>
				<li>
					<a href="13-FMF_Desktop-website_1.2-tool.html">Tools</a>
					<ul>
						<li>
							<a href="07-FMF_Website_1.2.1_Workouts.html">Workouts</a>
							<ul>
								<li><a href="14-FMF_Desktop-website_1.2.1.1-recipe-post-Not-vali.html">Recipe Post</a></li>											
							</ul>
						</li>
						<li><a href="#">Food & recipes</a></li>
						<li><a href="#">video</a></li> 
						<li><a href="#">Spotify</a></li>
						<li><a href="#">How to...</a></li>
						<li><a href="#">Jargon buster</a></li>									
					</ul>	
				</li>
				<li>
					<a href="#">Community</a>
					<ul>
						<li>
							<a href="#">forum-list</a>
							<ul>
								<li><a href="#">Forum-post</a></li>
							</ul>
						</li>
						<li>
							<a href="#">blog-list</a>
							<ul>
								<li><a href="#">blog-post</a></li>
							</ul>
						</li>
						<li>
							<a href="#">Events list</a>
							<ul>
								<li><a href="#">events-post</a></li>
							</ul>
						</li>									 
					</ul>
				</li>
				<li class="active">
					<a href="#">Store</a>
					<ul>
						<li>
							<a href="#">fitness-clothing</a>
							<ul>
								<li><a href="#">product-page</a></li>
							</ul>
						</li>
						<li><a href="#">Footwear</a></li>
						<li><a href="#">Accessories</a></li>											
						<li><a href="#">Sports equipment</a></li>											
						<li><a href="#">Supplements</a></li>											
						<li><a href="#">Weights</a></li>											
						<li><a href="#">Fitness tec</a></li>											
						<li><a href="#">Home gym</a></li>
					</ul>								
				</li>
			</ul>
		</nav><!--End-main-menu-->
        </div>
        <div class="header_logo col col-lg-4 col-md-12 col-xs-12">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
        <div class="page-box-login col-xs-12 col-lg-4 col-md-12 display_top">
			<div class="page-box-login">                     	
				<div class="box-login">
					<a href="login?create_account=1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Register</a>
					<a href="login"><i class="fa fa-share-square-o" aria-hidden="true"></i> Login</a>
				</div><!--End-box-login-->
				<div class="sub-menu-mobile-none">
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">The Squad</a></li>                            
					</ul>
				</div>
				<div class="clear"></div>
			</div>
        </div>
      </div>
    </div>
  </div>
	<div class="header-bottom">
		<div class="container">
		   <div class="row">
			<div class=" col col-lg-2 col-md-12 col-xs-12">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayVegamenu'),$_smarty_tpl);?>

			</div>
			<div class="col col-xs-12 col-lg-10 col-md-12">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

			</div>
		  </div>
		</div>
	  </div>

  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-18 06:34:38
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a60864e053135_21337482')) {function content_5a60864e053135_21337482($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value['count']!=1) {?>
<div class="breadcrumb_container">
	<div class="container">
		<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
		  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
			<?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
			  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
				  <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
				</a>
				<meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
			  </li>
			<?php } ?>
		  </ol>
		</nav>
	</div>
</div>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-18 06:34:38
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a60864e101ef3_47428371')) {function content_5a60864e101ef3_47428371($_smarty_tpl) {?>

<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <article class="alert alert-danger" role="alert" data-alert="danger">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <article class="alert alert-warning" role="alert" data-alert="warning">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <article class="alert alert-success" role="alert" data-alert="success">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <article class="alert alert-info" role="alert" data-alert="info">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>
  </div>
</aside>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-18 06:34:38
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a60864e473b48_21358441')) {function content_5a60864e473b48_21358441($_smarty_tpl) {?>
<div class=" footer-middle">
	<div class="container">
	  <div class="row">
			<div class="col-sm-12 col-md-12 col-lg-2 col-xs-12 box-address">
				<a href="#"><img alt="" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/themes/theme_angara1/assets/img/fomofit2.png"></a>
				<p>FoMoFit Ltd.<a href="#" style="display: block">hello@fomofit.co.uk</a></p>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
				<div class="row">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 col-xs-12">
				<div class="row">
					<div class="menu-footer">
						<ul class="menu-md-none col-xs-6">
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Terms of use</a></li>
							<li><a href="#">Cookies</a></li>
							<li><a href="#">Site map</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
						<ul class="menu-md-none col-xs-6">
							<li><a href="#">Delivery &amp; refunds </a></li>
							<li><a href="#">Community guidelines</a></li>
						</ul>		 
						<ul class="menu-desktop-md-none col-xs-12">
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Terms of use</a></li>
							<li><a href="#">Cookies</a></li>
							<li><a href="#">Site map</a></li>
							<li><a href="#">Contact us</a></li>
							<li><a href="#">Delivery &amp; refunds </a></li>
							<li><a href="#">Community guidelines</a></li>
						</ul>
					</div>
				</div>
			</div>
	  </div>
	</div>
</div>
<?php }} ?>
