<div class="ft_newsletter">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12 box-form">
			<h2>{l s='Sign up to our newsletter to keep up to date'}</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<form action="{$urls.pages.index}#footer" method="post">
					<div class="box-name">
						<label>Name</label>
						<div class="input-wrapper">
						  <input
							name="email"
							class="input_txt"
							type="text"
							value="{$value}"
							placeholder="{l s='Enter your name' d='Shop.Forms.Labels'}"
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
							value="{$value}"
							placeholder="{l s='Enter your email address' d='Shop.Forms.Labels'}"
						  >
						</div>
					</div>
					<button
					  class="btn btn-primary"
					  name="submitNewsletter"
					  type="submit"
					><span>{l s='Submit' d='Shop.Theme.Global'}</span></button>
					<input type="hidden" name="action" value="0">
				</form>
			</div>
		</div>
	</div>
</div>