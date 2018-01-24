{if count($products) > 0 && $products != null}
<div class="pos_new_product product_block_container">
	<div class="pos_title">
		<h2>{l s='New Products' mod='posnewsproducts'}</h2>
	</div>
	<div class="pos_content">
		{$rows= $config['POS_HOME_NEW_ROWS']}
		<div class="newSlide owl-carousel">
			{foreach from=$products item=product name=myLoop}
				{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
				<div class="item-product">
				{/if}			
				<article class="js-product-miniature item_in" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
					<div class="img_block">
						{block name='product_thumbnail'}
						  <a href="{$product.url}" class="thumbnail product-thumbnail">
							<img
							  src = "{$product.cover.bySize.small_default.url}"
							  alt = "{$product.cover.legend}"
							  data-full-size-image-url = "{$product.cover.large.url}"
							>
						  </a>
						{/block}				
					</div>
					<div class="product_desc">
				
						{block name='product_name'}
						   <h4><a href="{$product.url}" title="{$product.name}" itemprop="name" class="product_name">{$product.name}</a></h4>
						{/block}
						{block name='product_reviews'}
						<div class="hook-reviews">
							{hook h='displayProductListReviews' product=$product}
						</div>
						{/block}
						{block name='product_price_and_shipping'}
						{if $product.show_price}
						  <div class="product-price-and-shipping">						  
							<span itemprop="price" class="price {if $product.has_discount} price_sale {/if}">{$product.price}</span>
							{if $product.has_discount}
							  {hook h='displayProductPriceBlock' product=$product type="old_price"}

							  <span class="regular-price">{$product.regular_price}</span>
							  {if $product.discount_type === 'percentage'}
								<span class="discount-percentage">{$product.discount_percentage}</span>
							  {/if}
							{/if}

							{hook h='displayProductPriceBlock' product=$product type="before_price"}

							{hook h='displayProductPriceBlock' product=$product type='unit_price'}

							{hook h='displayProductPriceBlock' product=$product type='weight'}
						  </div>
						{/if}
					  {/block}
					
					</div>
				</article>
				{if $smarty.foreach.myLoop.iteration % $rows == 0 || $smarty.foreach.myLoop.last  }
				</div>
				{/if}
			{/foreach}
		</div>
	</div>
</div>
{/if}