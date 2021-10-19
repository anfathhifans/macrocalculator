<div class="uk-section uk-section-muted uk-flex uk-animation-fade" uk-height-viewport>
	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>

				<div class="uk-width-1-1@m">

					<h3 class="uk-heading-bullet uk-text-uppercase"><span>Your Personalised Meal Plan</span></h3>
					<ul uk-tab class="linked">
						<li class=""><a href="<?= $this->base_url; ?>step1">STEP 1</a></li>
						<li class=""><a href="<?= $this->base_url; ?>step2">STEP 2</a></li>
						<li class=""><a href="<?= $this->base_url; ?>step3">STEP 3</a></li>
					    <li class="uk-active uk-text-bolder"><a class="uk-text-primary">STEP 4</a></li>
					</ul>
						
					<form action="<?= $this->base_url; ?>validation" class="uk-form-horizontal uk-margin-small" method="post" id="checkoutForm" data-form-validate="true">

						<div class="uk-child-width-1-2@s" uk-grid>
							<div>
								<h4 class="uk-heading-line uk-text-center uk-text-uppercase"><span>Meal Plan Subscription Summary</span></h4>
								<div class="uk-card uk-card-default\ uk-card-small uk-card-body">
									 <div class="uk-margin-small">
										<div class="uk-grid-small" uk-grid>
										    <div class="uk-width-expand" uk-leader><span class="">Days of Subscription</span></div>
										    <div class="uk-text-bolder"><?= App\App::getData('subscription_days'); ?> days</div>
										</div>
										<div class="uk-grid-small" uk-grid>
										    <div class="uk-width-expand" uk-leader><span class="">How often would you like your meals?</span></div>
										    <div class="uk-text-bolder"><?= App\App::$delivery_days[App\App::getData('delivery_days')]; ?></div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<h4 class="uk-heading-line uk-text-center uk-text-uppercase"><span>Payment Summary</span></h4>
								<div class="uk-card uk-card-primary uk-card-small uk-card-body">
								 	<div class="uk-margin-small">
										<div class="uk-grid-small" uk-grid>
										    <div class="uk-width-expand" uk-leader><span class="">Subtotal</span></div>
										    <div class="">AED 500.00</div>
										</div>
										<div class="uk-grid-small" uk-grid>
										    <div class="uk-width-expand" uk-leader><span class="">Shipping</span></div>
										    <div class="">Free</div>
										</div>
										<hr/>
										<div class="uk-grid-small" uk-grid>
										    <div class="uk-width-expand" uk-leader><span class="">Total</span></div>
										    <div class="uk-text-bolder">AED 500.00</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="uk-child-width-1-2@s" uk-grid>
							
							<div>
					           	<h4 class="uk-heading-line uk-text-left uk-text-uppercase"><span>Contact Details</span></h4>
					            
					            <div class="uk-margin-small">
							        <label class="uk-form-label uk-text-bold" for="contact_name">Contact Name</label>
							        <div class="uk-form-controls">
							            <input class="uk-input uk-form-width-large" id="contact_name" name="form[contact_name]" type="text" placeholder="" value="<?= App\App::getData('contact_name'); ?>" />
							        </div>
							    </div>
							    <div class="uk-margin-small">
							        <label class="uk-form-label uk-text-bold" for="contact_email">Email Address</label>
							        <div class="uk-form-controls">
							            <input class="uk-input uk-form-width-large" id="contact_email" name="form[contact_email]" type="text" placeholder="name@example.com" value="<?= App\App::getData('contact_email'); ?>" />
							        </div>
							    </div>
							    <div class="uk-margin-small">
							        <label class="uk-form-label uk-text-bold" for="contact_number">Phone Number</label>
							        <div class="uk-form-controls">
							            <input class="uk-input uk-form-width-large" id="contact_number" name="form[contact_number]" type="text" placeholder="05xxxxxxxx" value="<?= App\App::getData('contact_number'); ?>" />
							        </div>
							    </div>
						     	<div class="uk-margin-small">
							        <label class="uk-form-label uk-text-bold" for="contact_address">Delivery Address</label>
							        <div class="uk-form-controls">
							        	<textarea class="uk-textarea" id="contact_address" name="form[contact_address]"><?= App\App::getData('contact_address'); ?></textarea>
							        </div>
							    </div>
						    </div>
						    <div >
						    	<h4 class="uk-heading-line uk-text-left uk-text-uppercase"><span>Payment Details</span></h4>

								<div class="uk-card uk-card-default uk-card-small uk-card-body">
					            	<div class="uk-margin-small">
								        <label class="uk-form-label uk-text-bold" for="card_name">Name on Card</label>
								        <div class="uk-form-controls">
								            <input class="uk-input uk-form-small" id="card_name" name="form[card_name]" type="text" placeholder="Card Holder's Name" value="<?= App\App::getData('card_name'); ?>"/>
								        </div>
								    </div>
								    <div class="uk-margin-small">
								        <label class="uk-form-label uk-text-bold" for="card_number">Number on Card</label>
								        <div class="uk-form-controls">
								            <input class="uk-input uk-form-small" id="card_number" name="form[card_number]" type="text" placeholder="XXXX-XXXX-XXXX-XXXX" value="<?= App\App::getData('card_number'); ?>" />
								        </div>
								    </div>
								    <div class="uk-margin-small">
								        <label class="uk-form-label uk-text-bold" for="card_expiry">Card Expire</label>
								        <div class="uk-form-controls">
								            <input class="uk-input uk-form-small uk-form-width-small" id="card_expiry" name="form[card_expiry]" type="text" placeholder="MM/YY" value="<?= App\App::getData('card_expiry'); ?>" />
								        </div>
								    </div>
								    <div class="uk-margin-small">
								        <label class="uk-form-label uk-text-bold" for="card_security_code">CVC/CVV</label>
								        <div class="uk-form-controls">
								            <input class="uk-input uk-form-small uk-form-width-small" id="card_security_code" name="form[card_security_code]" type="password" placeholder="Security Code" maxlength="3" value="<?= App\App::getData('card_security_code'); ?>"/>
								        </div>
								    </div>
						        </div>
						    </div>

						</div>
						
						<div class="uk-margin">
							<input type="hidden" name="step" value="checkout" />
							<button type="submit" class="uk-button uk-button-primary uk-width-1-1">Proceed to Checkout</button>
						</div>

					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>