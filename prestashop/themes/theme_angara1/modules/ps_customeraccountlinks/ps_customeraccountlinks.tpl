<div id="block_myaccount_infos" class=" footer_block col-xs-12 col-sm-12 col-md-4 col-lg-4 links wrapper">
  <h3 class="footer_header">
		{l s='Your account' d='Shop.Theme.Customeraccount'}
  </h3>
  <ul class="account-list footer_list toggle-footer" id="footer_account_list">
    {foreach from=$my_account_urls item=my_account_url}
        <li>
          <a href="{$my_account_url.url}" title="{$my_account_url.title}" rel="nofollow">
            {$my_account_url.title}
          </a>
        </li>
    {/foreach}
    {hook h='displayMyAccountBlock'}
	</ul>
</div>
