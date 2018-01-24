{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{block name='header_nav'}
	<nav class="header-nav">
		<div class="container">
			{hook h='displayNav'}
		</div>
	</nav>
{/block}
{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="main-menu col col-lg-4 col-md-12 col-xs-12">
          {hook h='displayMegamenu'}
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
          <a href="{$urls.base_url}">
            <img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
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
				{hook h='displayVegamenu'}
			</div>
			<div class="col col-xs-12 col-lg-10 col-md-12">
				{hook h='displayTop'}
			</div>
		  </div>
		</div>
	  </div>

  {hook h='displayNavFullWidth'}
{/block}
