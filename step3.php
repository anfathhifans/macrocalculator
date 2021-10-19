<div class="uk-section uk-section-muted uk-flex uk-animation-fade" uk-height-viewport>
	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>

				<div class="uk-width-1-1@m">

					<h3 class="uk-heading-bullet uk-text-uppercase"><span>Your Personalised Meal Plan</span></h3>
					<ul uk-tab class="linked">
						<li class=""><a href="<?= $this->base_url; ?>step1">STEP 1</a></li>
						<li class=""><a href="<?= $this->base_url; ?>step2">STEP 2</a></li>
					    <li class="uk-active uk-text-bolder"><a class="uk-text-primary">STEP 3</a></li>
					    <li class="uk-disabled"><a>STEP 4</a></li>
					</ul>
						
					<h4 class="uk-heading-line uk-text-left uk-text-uppercase"><span>Choosing Meal Plan Subscription</span></h4>

					<form action="<?= $this->base_url; ?>validation" class="uk-form-stacked uk-margin-small" method="post" id="subscribeForm" data-form-validate="true">

						<div class="uk-child-width-1-1@s" uk-grid>
					    	<div>
						    	<div class="uk-child-width-1-4@s" uk-grid>
						    		<div>
						    			<div class="uk-card uk-card-small uk-card-default uk-card-body">
						    				<div class="uk-card-badge uk-label">100 Calories</div>
											<h3 class="uk-card-title">Breakfast</h3>
											<ul class="uk-list uk-list-striped uk-list-collapse">
												<li>Salmon</li>
												<li>Beef</li>
												<li>Broccoli</li>
												<li>Vanilla Coffee Shake</li>
											</ul>

											<span class="uk-badge uk-label-success">Protein 75</span>
											<span class="uk-badge uk-label-warning">Carbs 20</span>
											<span class="uk-badge uk-label-danger">Fat 5</span>
										</div>
						    		</div>
						    		<div>
						    			<div class="uk-card uk-card-small uk-card-default uk-card-body">
						    				<div class="uk-card-badge uk-label">100 Calories</div>
											<h3 class="uk-card-title">Lunch</h3>
											<ul class="uk-list uk-list-striped uk-list-collapse">
												<li>Chicken</li>
												<li>Chick Peas</li>
												<li>Potatoes</li>
											</ul>

											<span class="uk-badge uk-label-success">Protein 75</span>
											<span class="uk-badge uk-label-warning">Carbs 20</span>
											<span class="uk-badge uk-label-danger">Fat 5</span>
										</div>
						    		</div>
						    		<div>
						    			<div class="uk-card uk-card-small uk-card-default uk-card-body">
						    				<div class="uk-card-badge uk-label">100 Calories</div>
											<h3 class="uk-card-title">Dinner</h3>
											<ul class="uk-list uk-list-striped uk-list-collapse">
												<li>Lamb</li>
												<li>Roasted Carrots</li>
												<li>Dark Chocolate</li>
											</ul>

											<span class="uk-badge uk-label-success">Protein 75</span>
											<span class="uk-badge uk-label-warning">Carbs 20</span>
											<span class="uk-badge uk-label-danger">Fat 5</span>
										</div>
						    		</div>
						    		<div>
						    			<div class="uk-card uk-card-small uk-card-default uk-card-body">
						    				<div class="uk-card-badge uk-label">100 Calories</div>
											<h3 class="uk-card-title">Snacks</h3>
											<ul class="uk-list uk-list-striped uk-list-collapse">
												<li>Soy Almond Shake</li>
												<li>Mixed Nuts</li>
											</ul>

											<span class="uk-badge uk-label-success">Protein 75</span>
											<span class="uk-badge uk-label-warning">Carbs 20</span>
											<span class="uk-badge uk-label-danger">Fat 5</span>
										</div>
						    		</div>
					    		</div>
						    </div>
						    <div>
						    	<div class="uk-child-width-1-2@s" uk-grid>
						    		<div>
						    			<div class="uk-margin">
									        <div class="uk-form-label uk-text-bold">Days of Subscription</div>
									        <div class="uk-form-controls">
									            <label><input class="uk-radio" type="radio" name="form[subscription_days]" value="21" checked="checked"> 21 days</label><br>
									            <label><input class="uk-radio" type="radio" name="form[subscription_days]" value="26"> 26 days</label><br>
									            <label><input class="uk-radio" type="radio" name="form[subscription_days]" value="30"> 30 days</label>
									        </div>
										</div>
						    		</div>
						    		<div>
					    				<div class="uk-margin">
									        <div class="uk-form-label uk-text-bold">How often would you like your meals?</div>
									        <div class="uk-form-controls">
									            <label><input class="uk-radio" type="radio" name="form[delivery_days]" value="1" checked="checked"> Daily</label><br>
									            <label><input class="uk-radio" type="radio" name="form[delivery_days]" value="2"> Every 2 days</label><br>
									            <label><input class="uk-radio" type="radio" name="form[delivery_days]" value="3"> Every 3 days</label>
									        </div>
										</div>
						    		</div>
					    		</div>						    	
						    </div>
						</div>
						
						<div class="uk-margin">
							<input type="hidden" name="step" value="subscribe" />
							<button type="submit" class="uk-button uk-button-primary uk-width-1-1">Subscribe</button>
						</div>

					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>