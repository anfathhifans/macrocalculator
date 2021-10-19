<div class="uk-section uk-section-muted uk-flex uk-animation-fade" uk-height-viewport>
	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>

				<div class="uk-width-1-1@m">

					<h3 class="uk-heading-bullet uk-text-uppercase"><span>Your Personalised Meal Plan</span></h3>
					<ul uk-tab class="linked">
						<li class=""><a href="<?= $this->base_url; ?>step1">STEP 1</a></li>
						<li class="uk-active uk-text-bolder"><a class="uk-text-primary">STEP 2</a></li>
					    <li class="uk-disabled"><a>STEP 3</a></li>
					    <li class="uk-disabled"><a>STEP 4</a></li>
					</ul>

					<h4 class="uk-heading-line uk-text-left uk-text-uppercase"><span>Generate Meals</span></h4>

					<form action="<?= $this->base_url; ?>validation" class="uk-form-stacked uk-margin-small" method="post" id="mealsForm" data-form-validate="true">

						<div class="uk-child-width-1-1@s" uk-grid>
					    	<div>
							    <div class="uk-margin">
									<div class="uk-grid-small" uk-grid>
									    <div class="uk-width-expand" uk-leader><span class="">PROTEIN</span></div>
									    <div class=""><?= App\App::getData('protein'); ?> g / day (<?= App\App::getData('protein_calories'); ?> calories)</div>
									</div>
									<div class="uk-grid-small" uk-grid>
									    <div class="uk-width-expand" uk-leader><span class="">CARBS</span></div>
									    <div class=""><?= App\App::getData('carbs'); ?> g / day (<?= App\App::getData('carbs_calories'); ?> calories)</div>
									</div>
									<div class="uk-grid-small" uk-grid>
									    <div class="uk-width-expand" uk-leader><span class="">FATS</span></div>
									    <div class=""><?= App\App::getData('fat'); ?> g / day (<?= App\App::getData('fat_calories'); ?> calories)</div>
									</div>
									<div class="uk-grid-small" uk-grid>
									    <div class="uk-width-expand" uk-leader><span class="uk-text-bolder">TOTAL CALORIES (Total daily Energy Expenditure - TDEE)</span></div>
									    <div class="uk-text-bolder"><?= App\App::getData('total_calories'); ?> kcal / day</div>
									</div>
								</div>

							    <div class="uk-margin">
							    	<hr class="uk-divider-icon" />
						    	</div>

						    	<div class="uk-child-width-1-4@s" uk-grid>
						    		<div>
						    			<div class="uk-margin">
									        <div class="uk-form-label uk-text-bold">Meals</div>
									        <div class="uk-form-controls">
									            <label><input class="uk-checkbox" type="checkbox" name="form[meals][]" value="meal1">  Salmon</label><br>
									            <label><input class="uk-checkbox" type="checkbox" name="form[meals][]" value="meal2">  Chicken</label><br>
									            <label><input class="uk-checkbox" type="checkbox" name="form[meals][]" value="meal3">  Beef</label><br>
									            <label><input class="uk-checkbox" type="checkbox" name="form[meals][]" value="meal4">  Lamb</label><br>
									        </div>
										</div>
						    		</div>
						    		<div>
						    			<div class="uk-margin">
									        <div class="uk-form-label uk-text-bold">Sides</div>
									        <div class="uk-form-controls">
									            <label><input class="uk-checkbox" type="checkbox" name="form[sides][]" value="sides1">  
												Chick Peas</label><br>
									            <label><input class="uk-checkbox" type="checkbox" name="form[sides][]" value="sides2">  
												Potatoes</label><br>
									            <label><input class="uk-checkbox" type="checkbox" name="form[sides][]" value="sides3">  
												Broccoli</label><br>
									            <label><input class="uk-checkbox" type="checkbox" name="form[sides][]" value="sides4">  Roasted Carrots</label><br>
									        </div>
										</div>
						    		</div>
						    		<div>
						    			<div class="uk-margin">
									        <div class="uk-form-label uk-text-bold">Snacks</div>
									        <div class="uk-form-controls">
									            <label><input class="uk-checkbox" type="checkbox" name="form[snacks][]" value="snacks1"> Mixed Nuts</label><br>
									            <label><input class="uk-checkbox" type="checkbox" name="form[snacks][]" value="snacks2"> Dark Chocolate</label>
									        </div>
										</div>
						    		</div>
						    		<div>
						    			<div class="uk-margin">
									        <div class="uk-form-label uk-text-bold">Shakes</div>
									        <div class="uk-form-controls">
									            <label><input class="uk-checkbox" type="checkbox" name="form[shakes][]" value="shakes1"> Vanilla Coffee Shake</label><br>
									            <label><input class="uk-checkbox" type="checkbox" name="form[shakes][]" value="shakes2"> Soy Almond Shake</label>
									        </div>
										</div>
						    		</div>
					    		</div>
								
						    </div>
						</div>
						
						<div class="uk-margin">
							<input type="hidden" name="step" value="meals" />
							<button type="submit" class="uk-button uk-button-primary uk-width-1-1">Generate Meals</button>
						</div>

					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>