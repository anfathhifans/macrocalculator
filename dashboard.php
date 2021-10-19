<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="#">Dashboard</a>
    </div>
    <div class="uk-navbar-right">
		<ul class="uk-navbar-nav">
            <li>
                <a href="<?php $this->base_url; ?>signout">
                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: sign-out"></span>
                    Sign Out
                </a>
            </li>
        </ul>
	</div>
</nav>

<div class="uk-section uk-section-xsmall uk-flex uk-animation-fade" uk-height-viewport>
	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
				
				<div class="uk-width-1-1@m">

					<h3 class="uk-heading-bullet uk-text-uppercase"><span>Welcome <b class="uk-text-primary"><?= App\App::getData('contact_name'); ?></b>!</span></h3>

			        <div uk-grid>
			            <div class="uk-width-1-6@s">
			                <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade; active:1">
			                    <li><a href="#">Overview</a></li>
			                    <li><a href="#">Meals Delivery</a></li>
			                </ul>
			            </div>
			            <div class="uk-width-5-6@s">
			                <ul id="component-tab-left" class="uk-switcher">
			                    <li>
			                    		
			                    	<div uk-grid>
			                    		
			                    		<div class="uk-width-1-2@s">
			                    			<div class="uk-margin-small">
			                    				<h4 class="uk-heading-line uk-text-center uk-text-uppercase"><span>Your Meal Plan</span></h4>
				                    			<table class="uk-table uk-table-responsive uk-table-small uk-table-middle uk-table-center uk-table-divider">
												    <thead>
												        <tr>
												            <th class="uk-width-small">Meals</th>
												            <th class="">Items</th>
												            <th class="">Calories</th>
												        </tr>
												    </thead>
												    <tbody>
												        <tr>
												            <td>Breakfast</td>
												            <td>
												            	Salmon / Beef / Broccoli / Vanilla Coffee Shake															
												            </td>
												            <td>
												            	<span class="uk-label">100 Calories</span><br/>
												            	<span class="uk-badge uk-label-success">Protein 75</span>
																<span class="uk-badge uk-label-warning">Carbs 20</span>
																<span class="uk-badge uk-label-danger">Fat 5</span>
												            </td>
												        </tr>
												        <tr>
												            <td>Lunch</td>
												            <td>
												            	Chicken / Chick Peas / Potatoes
												            </td>
												            <td>
												            	<span class="uk-label">100 Calories</span><br/>
												            	<span class="uk-badge uk-label-success">Protein 75</span>
																<span class="uk-badge uk-label-warning">Carbs 20</span>
																<span class="uk-badge uk-label-danger">Fat 5</span>
												            </td>
												        </tr>
												        <tr>
												            <td>Dinner</td>
												            <td>
												            	Lamb / Roasted Carrots / Dark Chocolate
												            </td>
												            <td>
												            	<span class="uk-label">100 Calories</span><br/>
												            	<span class="uk-badge uk-label-success">Protein 75</span>
																<span class="uk-badge uk-label-warning">Carbs 20</span>
																<span class="uk-badge uk-label-danger">Fat 5</span>
												            </td>
												        </tr>
												        <tr>
												            <td>Dinner</td>
												            <td>
												            	Soy Almond Shake / Mixed Nuts
												            </td>
												            <td>
												            	<span class="uk-label">100 Calories</span><br/>
												            	<span class="uk-badge uk-label-success">Protein 75</span>
																<span class="uk-badge uk-label-warning">Carbs 20</span>
																<span class="uk-badge uk-label-danger">Fat 5</span>
												            </td>
												        </tr>
												    </tbody>
												</table>
											</div>
				    					</div>
				    					<div class="uk-width-1-2@s ">
				    						<div class="uk-margin-small">
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
										</div>

		                    		</div>

			                    </li>
			                    <li>
			                    		
		                    		<h4 class="uk-heading-line uk-text-center uk-text-uppercase"><span>Meal Delivery</span></h4>
			                    	<table class="uk-table uk-table-small uk-table-divider">
									    <thead>
									        <tr>
									            <th>Days</th>
									            <th>Date</th>
									            <th>Delivery Status</th>
									            <th>Delivered On</th>
									        </tr>
									    </thead>
									    <tbody>   
								    <?php if($mealsdays){ ?>
								    	<?php $i=1; foreach($mealsdays as $date){ ?>
								    		<tr>
									            <td><?= sprintf('%02d', $i); ?></td>
									            <td><?= $date; ?></td>									            
						            	<?php if($i == 1){ ?>
								            	<td><span class="uk-label uk-label-success">Delivered</span></td>
								            	<td><?= $date; ?></td>
						            	<?php }elseif($i == 2){ ?>
						            			<td><span class="uk-label uk-label-warning">Out for Delivery</span></td>
						            			<td>-</td>
					            		<?php }else{ ?>
					            				<td><span class="uk-label">Pending</span></td>
					            				<td>-</td>
				            			<?php } ?>
									        </tr>
								       <?php $i++; } ?>	
							        <?php } ?>	
									    </tbody>
									</table>

			                    </li>
			                </ul>
			            </div>
			        </div>

				</div>

			</div>
		</div>	
	</div>	
</div>	