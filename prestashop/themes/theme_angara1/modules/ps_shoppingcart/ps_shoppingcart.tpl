<div class="blockcart cart-preview dropdown js-dropdown" data-refresh-url="{$refresh_url}">
    <a href="#" class="quick-view" data-link-action="quickview" title="{l s='Add to wishlist' d='Shop.Theme.Actions'}"><i class="fa fa-heart"></i></a>
  <div class="header" data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
    <a rel="nofollow" href="{$cart_url}">
	  <i class="fa fa-shopping-basket"></i>
	  {l s='' d='Shop.Theme.Checkout'}
	  <span class="item_total">{$cart.products_count}</span>
    </a>
  </div>
  <div class="body dropdown-menu">
    <ul>
      {foreach from=$cart.products item=product}
        <li>{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
      {/foreach}
    </ul>
	<div class="price_content">
		<div class="cart-subtotals">
		  {foreach from=$cart.subtotals item="subtotal"}
			<div class="{$subtotal.type} price_inline">
			  <span class="label">{$subtotal.label}</span>
			  <span class="value">{$subtotal.value}</span>
			</div>
		  {/foreach}
		</div>
		<div class="cart-total price_inline">
		  <span class="label">{$cart.totals.total.label}</span>
		  <span class="value">{$cart.totals.total.value}</span>
		</div>
    </div>
	<div class="checkout">
		<a href="{$cart_url}" class="btn btn-primary">{l s='checkout' d='Shop.Theme.Actions'}</a>
	</div>
  </div>
</div>
