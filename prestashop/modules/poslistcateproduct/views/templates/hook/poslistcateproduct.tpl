{$count=0}
{foreach from=$productCates item=productCate name=poslistcateproduct}
	<div class="poslistcateproduct poslistcateproduct_{$count} product_container"
		data-items="{$slider_options.number_item}" 
		data-speed="{$slider_options.speed_slide}"
		data-autoplay="{$slider_options.auto_play}"
		data-time="{$slider_options.auto_time}"
		data-arrow="{$slider_options.show_arrow}"
		data-pagination="{$slider_options.show_pagination}"
		data-move="{$slider_options.move}"
		data-pausehover="{$slider_options.pausehover}"
		data-md="{$slider_options.items_md}"
		data-sm="{$slider_options.items_sm}"
		data-xs="{$slider_options.items_xs}"
		data-xxs="{$slider_options.items_xxs}">
		<div class="pos_title">		
			<h2>
				<span>{$productCate.category_name}</span>
			</h2>
			{if $productCate.list_subcategories}
			<ul class="subcategories-list hidden-md-down">
				{foreach from=$productCate.list_subcategories item=subcategories}
				<li><a href="{$link->getCategoryLink($subcategories['id_category'])}" target="_blank">{$subcategories.name}</a></li>
				{/foreach}
			</ul>
			<div class="btn-group hidden-lg-up">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="material-icons">list</i>
				  </button>
				  <ul class="dropdown-menu">
				{foreach from=$productCate.list_subcategories item=subcategories}
					<li><a href="{$link->getCategoryLink($subcategories['id_category'])}" target="_blank">{$subcategories.name}</a><li>
				{/foreach}
				  </ul>
			</div>
			{/if}
			
		</div>
		<div class=" special_products">
			<div class="col col-left">
			
				{if $productCate.image}
					<div class="thumb-category">
						{if $productCate.url}<a href="{$productCate.url}">{/if}<img src="{$link->getMediaLink("`$smarty.const._MODULE_DIR_`poslistcateproduct/images/`$productCate.image|escape:'htmlall':'UTF-8'`")}" alt="" />{if $productCate.url}</a>{/if}
					</div>
				{/if}
			</div>
			<div class="col col-right">
			{if $productCate.special_products}
				<div class="sale_products pos_content owl-carousel">
					{foreach from=$productCate.special_products item=product name=myLoop}
						<article class="js-product-miniature item_in" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
							<div class="img_block">
								{block name='product_thumbnail'}
								    <a class="product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
										<img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}"
										alt="{$product.legend|escape:'html':'UTF-8'}"
										class="img-responsive"/>
									</a>
								{/block}				
							</div>
							<div class="product_desc">
						
								{block name='product_name'}
								   <h4 class="product_name">{$product.name}</h4>
								{/block}
								{block name='product_reviews'}
								<div class="hook-reviews">
									{hook h='displayProductListReviews' product=$product}
								</div>
								{/block}
								{block name='product_price_and_shipping'}
									{if $product.show_price}
									  <div class="product-price-and-shipping">						  
										<span itemprop="price" class="price">{$product.price|string_format:"%.2f"}</span>
										{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
										  {hook h='displayProductPriceBlock' product=$product type="old_price"}
										  <span class="regular-price">{$product.price_without_reduction|string_format:"%.2f"}</span>
										{/if}

										{hook h='displayProductPriceBlock' product=$product type="before_price"}

										{hook h='displayProductPriceBlock' product=$product type='unit_price'}

										{hook h='displayProductPriceBlock' product=$product type='weight'}
									  </div>
									{/if}
								  {/block}
								{block name='product_name'}
								   <div><a href="{$product.link|escape:'html':'UTF-8'}" class="shop_now">{l s='shop now' mod='poslistcateproduct'}</a></div>
								{/block}
							</div>
						</article>
					{/foreach}
				</div>
				{else}
					<p>{l s='There is no special products in this category.' mod='poslistcateproduct'}</p>
				{/if}
			</div>
		</div>
		<div class=" pos_content">
			<div class="listcateSlide owl-carousel">		
				{foreach from=$productCate.product item=product name=myLoop}					
					{if $smarty.foreach.myLoop.index % $slider_options.rows == 0 || $smarty.foreach.myLoop.first }
					<div class="item-product">
					{/if}
						{include file="catalog/_partials/miniatures/product.tpl" product=$product}
					{if $smarty.foreach.myLoop.iteration %  $slider_options.rows == 0 || $smarty.foreach.myLoop.last}
						</div>
					{/if}
				{/foreach}
			</div>
		</div>
		{if $productCate.description}
		<div class="description-list">
			{$productCate.description nofilter}
		</div>
		{/if}
	</div>
	{$count= $count+1}
{/foreach}
<script type="text/javascript">
	var sale_products = $(".sale_products");
		sale_products.owlCarousel({
		autoplay :false,
		autoplayHoverPause: true,
		smartSpeed : 1000,
		nav :true,
		dots : false,
		responsiveClass:true,
		responsive : {
		  0 : {
              items: 1
          },
          480 : {
              items: 1
          },
          768 : {
              items: 1
          },
          992 : {
              items: 1
          },
		  1200 : {
              items: 1
          }
		}
	});
</script>