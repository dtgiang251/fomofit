<?php /* Smarty version Smarty-3.1.19, created on 2018-01-23 08:41:27
         compiled from "/var/www/presta_test/prestashop/themes/theme_angara1/modules/posslideshows/views/templates/hook/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20508793325a673b87b8f473-28058667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2fcc63be1cb2a0f72717854228d68fa44673c7f' => 
    array (
      0 => '/var/www/presta_test/prestashop/themes/theme_angara1/modules/posslideshows/views/templates/hook/slider.tpl',
      1 => 1516669390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20508793325a673b87b8f473-28058667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a673b87bb08a6_21418866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a673b87bb08a6_21418866')) {function content_5a673b87bb08a6_21418866($_smarty_tpl) {?>
<div class="slider-banner-store slider-banner-store-sl"> 
	<div class="container">
		<div class="row">
			<div class="col-xs-12">	
				<div class="inner bxslider row owl-carousel owl-theme">								  
					<div>
						 <a href="#"><img alt="" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/theme_angara1/assets/img/img1-slider-store.jpg" /></a>
						 <div class="text-banner">
							<h3>Step out <br/> in style</h3>
							<a href="#">Shop the look <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
						 </div><!--End-text-banner-->
						 
					</div>	
					<div>
						 <a href="#"><img alt="" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/theme_angara1/assets/img/img1-slider-store.jpg" /></a>
						 <div class="text-banner">
							<h3>Step out <br/> in style</h3>
							<a href="#">Shop the look <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
						 </div><!--End-text-banner-->
						 
					</div>	
					<div>
						 <a href="#"><img alt="" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/theme_angara1/assets/img/img1-slider-store.jpg" /></a>
						 <div class="text-banner">
							<h3>Step out <br/> in style</h3>
							<a href="#">Shop the look <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
						 </div><!--End-text-banner-->
						 
					</div>	
				</div>   
			</div>	
		</div>	
	</div>
</div><!--End-slider--> 

<script type="text/javascript">
	$('.slider-banner-store .bxslider').owlCarousel({
		loop:true,
		nav:true,
		dots: true,
		responsiveClass:true,
		nav:false,
		responsive:{
			0:{
				items:1,
				
			},
		}
	});
</script><?php }} ?>
