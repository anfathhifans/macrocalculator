<div class="uk-section uk-section-muted uk-flex uk-animation-fade" uk-height-viewport>
	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>

				<div class="uk-width-1-1@m">

					<h3 class="uk-heading-bullet uk-text-uppercase"><span>Your Personalised Meal Plan</span></h3>
					<ul uk-tab>
						<li class="uk-active uk-text-bolder"><a class="uk-text-primary">STEP 1</a></li>
						<li class="uk-disabled"><a>STEP 2</a></li>
					    <li class="uk-disabled"><a>STEP 3</a></li>
					    <li class="uk-disabled"><a>STEP 4</a></li>
					</ul>

					<h4 class="uk-heading-line uk-text-left uk-text-uppercase"><span>Macro Calculation</span></h4>

					<form action="<?= $this->base_url; ?>validation" class="uk-form-stacked" method="post" id="calculatorForm" >

						<div class="uk-child-width-1-2@s" uk-grid>
					    	<div>  
						    	<div class="uk-margin">
							        <label class="uk-form-label uk-text-bold" for="age">AGE</label>
							        <div class="uk-form-controls">
							            <input class="uk-input uk-form-width-medium" id="age" name="form[age]" type="text" placeholder="Years" value="<?= App\App::getData('age'); ?>"/>
							        </div>
							    </div>
							    <div class="uk-margin">
							        <div class="uk-form-label uk-text-bold">SEX</div>
							        <div class="uk-form-controls uk-grid-small uk-child-width-auto uk-grid">
							            <label><input class="uk-radio" type="radio" name="form[sex]" value="male" checked="checked"> Male</label>
							            <label><input class="uk-radio" type="radio" name="form[sex]" value="female"> Female</label>
							        </div>
								</div>
								<div class="uk-margin">
							        <div class="uk-form-label uk-text-bold">HEIGHT</div>
							        <div class="uk-child-width-1-1@s" uk-grid>
							        	<div>
							        		<div class="uk-form-controls uk-grid-small uk-child-width-auto uk-grid">
									            <label><input class="uk-radio" type="radio" name="form[height]" value="meters" checked="checked"> Meters</label><br>
									            <label><input class="uk-radio" type="radio" name="form[height]" value="feet" > Feet</label>
									        </div>
									        <div class="uk-form-controls uk-grid-small uk-child-width-auto uk-grid">
									            <div>
									            	<input class="uk-input  uk-form-width-medium height-group" id="height_value1" name="form[height_value1]" type="text" placeholder="Feet" value="<?= App\App::getData('height_value1'); ?>" />
									            	<input class="uk-input  uk-form-width-medium height-group" id="height_value2" name="form[height_value2]" type="text" placeholder="Inches" value="<?= App\App::getData('height_value2'); ?>" />
									            </div>
									        </div>
							        	</div>
						        	</div>
								</div>
								<div class="uk-margin">
							        <div class="uk-form-label uk-text-bold">WEIGHT</div>
							        <div class="uk-child-width-1-2@s" uk-grid>
							        	<div>
							        		<div class="uk-form-controls uk-grid-small uk-child-width-auto uk-grid">
									            <label><input class="uk-radio" type="radio" name="form[weight]" value="kilograms" checked="checked"> Kilograms</label><br>
									            <label><input class="uk-radio" type="radio" name="form[weight]" value="pounds" > Pounds</label>
									        </div>
									        <div class="uk-form-controls uk-grid-small uk-child-width-auto uk-grid">
									        	<div>
									        		<input class="uk-input" id="weight_value" name="form[weight_value]" type="text" placeholder="Kilograms" value="<?= App\App::getData('weight_value'); ?>" />
									        	</div>
									        </div>
							        	</div>
						        	</div>
								</div>
						    </div>
						    <div>
								<div class="uk-margin">
							        <div class="uk-form-label uk-text-bold">GOAL</div>
							        <div class="uk-form-controls">
							            <label><input class="uk-radio" type="radio" name="form[goal]" value="maintain" checked="checked"> Maintain Current Weight</label><br>
							            <label><input class="uk-radio" type="radio" name="form[goal]" value="lose"> Lose Weight</label><br>
							            <label><input class="uk-radio" type="radio" name="form[goal]" value="gain"> Gain Weight</label>
							        </div>
								</div>
								<div class="uk-margin">
							        <div class="uk-form-label uk-text-bold">ACTIVITY LEVEL</div>
							        <div class="uk-form-controls">
							            <label><input class="uk-radio" type="radio" name="form[activity_level]" value="sedentary" checked="checked"> Sedentary (Little or no exercise)</label><br>
							            <label><input class="uk-radio" type="radio" name="form[activity_level]" value="lightly_active"> Lightly active (light exercise/sports 1-3 days/week)</label><br>
							            <label><input class="uk-radio" type="radio" name="form[activity_level]" value="moderately_active"> Moderately active (moderate exercise/sports 3-5 days/week)</label><br>
							            <label><input class="uk-radio" type="radio" name="form[activity_level]" value="very_active"> Very active (hard exercise/sports 6-7 days a week)</label><br>
							            <label><input class="uk-radio" type="radio" name="form[activity_level]" value="extra_active"> Extra active (very hard exercise/sports & physical job or 2x training)</label>
							        </div>
								</div>
						    </div>
						</div>
						
						<div class="uk-margin">
							<div class="uk-grid-small" uk-grid>
							    <div class="uk-width-expand" uk-leader>+/- 100 calories difference</div>
							</div>
						</div>

						<div class="uk-margin">
							<input type="hidden" name="step" value="calculation" />
							<button type="submit" class="uk-button uk-button-primary uk-width-1-1">Calculate</button>
						</div>

					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>