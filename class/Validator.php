<?php

namespace App;

class Validator
{
	
    public function __construct(){}

    public function validateCalculation($form){
    	extract($form);

    	// skipped the input variable validation for demo

    	/*
    	age 			: 	$age
    	sex 			: 	$sex
    	height 			: 	$height (feet | meters)
    	height_value1	: 	$height_value1 (feet | meters)
    	height_value2	: 	$height_value2 (inches | centrimeters)
		weight 			: 	$weight (kilograms | pounds)
		weight_value	: 	$weight_value (kilograms | pounds)
		goal 			: 	$goal
		activity_level	: 	$activity_level
	 	*/

		# height in cm
		if($height == 'meters'){
			// meters
			$height_in_cm = round( ($height_value1) ? ($height_value1 * 100) : $height_value2, 2);
		}else{
			// inches
			$height_in_cm = round(($height_value1) ? ($height_value1 * 12 * 2.54) : ($height_value2 * 2.54), 2);
		}

		# weight in kg
		$weight_in_kg = round(($weight == 'kilograms') ? $weight_value : ($weight_value * 0.45359237),2);

		# macro initial value
		$macro = new \stdClass();
		$macro->total_calories = $this->calculate_BMR(compact('sex','weight_in_kg','height_in_cm','age','activity_level'));
		
		// macronutrient ratio works
		switch($goal){
			case 'maintain' :

				$macro->total_calories = $macro->total_calories;

				$macro->protein = round($weight_in_kg * 1.5, 2);				// g of	protein
				$macro->protein_calories = round($macro->protein * 4, 2);		// calories	of protein

				$macro->fat_calories = round($macro->total_calories * .25, 2); 	// calories of fat
				$macro->fat = round($macro->fat_calories / 9, 2); 				// g of fat

				$macro->carbs_calories = round($macro->total_calories - $macro->protein_calories - $macro->fat_calories, 2); // calories of carbs
				$macro->carbs = round($macro->carbs_calories / 4, 2); 			// g of carbs

			break;
			case 'lose' :

				$macro->total_calories -= $macro->total_calories * 0.15; 		// For weight loss, reduce that by 15%

				$macro->protein = round($weight_in_kg * 2.2, 2);				// g of	protein
				$macro->protein_calories = round($macro->protein * 4, 2);		// calories	of protein

				$macro->fat_calories = round($macro->total_calories * .20, 2); 	// calories of fat
				$macro->fat = round($macro->fat_calories / 9, 2); 				// g of fat

				$macro->carbs_calories = round($macro->total_calories - $macro->protein_calories - $macro->fat_calories, 2); // calories of carbs
				$macro->carbs = round($macro->carbs_calories / 4, 2); 			// g of carbs

			break;
			case 'gain' :
				
				$macro->total_calories += $macro->total_calories * 0.15; 		// For weight gain, increase that by 15%

				$macro->protein = round($weight_in_kg * 2, 2);					// g of	protein
				$macro->protein_calories = round($macro->protein * 4, 2);		// calories	of protein

				$macro->fat_calories = round($macro->total_calories * .25, 2); 	// calories of fat
				$macro->fat = round($macro->fat_calories / 9, 2); 				// g of fat

				$macro->carbs_calories = round($macro->total_calories - $macro->protein_calories - $macro->fat_calories, 2); // calories of carbs
				$macro->carbs = round($macro->carbs_calories / 4, 2); 			// g of carbs
				
			break;
		}

		$form = array_merge($form, compact('height_in_cm','weight_in_kg'), (array) $macro);

		return $form;
    }

    public function validateMeals($form){
    	extract($form);

    	return $form;
    }

    public function validateSubscribe($form){
    	extract($form);

    	return $form;
    }

    public function validateCheckout($form){
    	extract($form);

    	return $form;;
    }

    public function calculate_BMR($data){
    	extract($data);

    	// reference 
    	// https://www.omnicalculator.com/health/bmr
    	// https://www.diabetes.co.uk/bmr-calculator.html
    	// https://en.wikipedia.org/wiki/Harris–Benedict_equation
    	// https://www.calorieking.com/us/en/tools/how-many-calories-should-you-eat/
    		
    	// BMR (Basal Metabolic Rate) Formula
    	$bmr = 0;
    	switch($sex){
    		case 'male' :
    			$bmr = 66.5 + ( 13.76 * $weight_in_kg ) + ( 5.003 * $height_in_cm ) - ( 6.755 * $age );
    			//$bmr = (10 * $weight_in_kg) + (6.25 * $height_in_cm) - (5 * $age) + 5;
    		break;
    		case 'female':
    			$bmr = 655 + ( 9.563 * $weight_in_kg ) + ( 1.850 * $height_in_cm ) - ( 4.676 * $age );
    			//$bmr  = (10 * $weight_in_kg) + (6.25 * $height_in_cm) - (5 * $age) - 161;
    		break;
    	}
    	//return round($bmr);
    	
    	// Harris Benedict Formula
    	$activityLevelList = [
			'sedentary' => 1.2,
			'lightly_active' => 1.375,
			'moderately_active' => 1.55,
			'very_active' => 1.725,
			'extra_active' => 1.9,
		];

		// total energy expenditure
    	return round($bmr * $activityLevelList[$activity_level]);
		
    }   
   
}