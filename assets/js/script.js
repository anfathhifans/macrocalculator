(function ( $ ) {
   
'use strict';

	$('input[name="form[height]"]').on('change', function(){
		$('#height_value1').attr('placeholder', ($(this).val() == 'feet') ? 'Feet' : 'Meters');
		$('#height_value2').attr('placeholder', ($(this).val() == 'feet') ? 'Inches' : 'Centrimeters');
	});
	$('#height_value1').attr('placeholder', ($('input[name="form[height]"]').val() == 'feet') ? 'Feet' : 'Meters');
	$('#height_value2').attr('placeholder', ($('input[name="form[height]"]').val() == 'feet') ? 'Inches' : 'Centrimeters');

	$('.height-group').on('focus', function(){
		$(this).siblings('.height-group').val('');
	});

	$('.linked').find('li > a').on('click', function(){
		if($(this).is('[href]')){
			document.location.href = $(this).attr('href');
		}
	});

	$('input[name="form[weight]"]').on('change', function(){
		$('#weight_value').attr('placeholder', ($(this).val() == 'kilograms') ? 'Kilograms' : 'Pounds');
	});
	$('#weight_value').attr('placeholder', ($('input[name="form[weight]"]').val() == 'kilograms') ? 'Kilograms' : 'Pounds');

	$.validator.addMethod('regex', function(value, element, regexp){
        if (regexp.constructor != RegExp)
            regexp = new RegExp(regexp);
        else if (regexp.global)
            regexp.lastIndex = 0;
        return this.optional(element) || regexp.test(value);
    }, "Please enter valid input" );
	
	var calculatorForm = $('#calculatorForm');
	var validator1 = calculatorForm.validate({
		ignore: ':hidden',
    	errorClass : 'uk-text-small uk-text-lowercase uk-text-danger uk-form-danger',
    	validClass : 'uk-form-success',
    	errorElement : 'span',
    	errorPlacement: function(error, element) {
			error.appendTo( $(element).closest('.uk-margin') );
		},
		rules: {
			'form[age]': {
				required: true,
				regex: /^[0-9]+$/,
			},
			'calc[sex]': {
				required: true,
			},
			'calc[height]': {
				required: true,
			},
			'form[height_value1]': {
				require_from_group: [1, '.height-group'],
				regex: /^[0-9\.]+$/,
			},
			'form[height_value2]': {
				require_from_group: [1, '.height-group'],
				regex: /^[0-9\.]+$/,
			},
			'form[weight]': {
				required: true,
			},
			'form[weight_value]': {
				required: true,
				regex: /^[0-9\.]+$/,
			},
			'calc[goal]': {
				required: true,
			},
			'calc[activity_level]': {
				required: true,
			},
		},
		messages: {
			'form[age]': {
				required : "Age is Required!",
				regex: "Numeric char only allowed"
			},
			'calc[sex]': {
				required : "Sex is Required!",
			},
			'calc[height]': {
				required : "Height is Required!",
			},
			'form[height_value1]': {
				require_from_group : "Fill at least 1 of these fields",
				regex: "Numeric char only allowed",
			},
			'form[height_value2]': {
				require_from_group : "",
				regex: "Numeric char only allowed",
			},
			'calc[weight]': {
				required : "Height is Required!",
			},
			'form[weight_value]': {
				required : "Weight Value is Required!",
				regex: "Numeric char only allowed",
			},
			'calc[goal]': {
				required : "Goal is Required!",
			},
			'calc[activity_level]': {
				required : "Activity Level is Required!",
			},
        },
		submitHandler: function(form) {
			if(calculatorForm.valid()){
				form.submit();
			}
	  	}
	});

	var mealsForm = $('#mealsForm');
	var validator2 = mealsForm.validate({
		ignore: ':hidden',
    	errorClass : 'uk-text-small uk-text-lowercase uk-text-danger uk-form-danger',
    	validClass : 'uk-form-success',
    	errorElement : 'span',
    	errorPlacement: function(error, element) {
			error.appendTo( $(element).closest('.uk-margin') );
		},
		rules: {
			'form[meals][]': {
				required: true,
			},
			'form[sides][]': {
				required: true,
			},
			'form[snacks][]': {
				required: true,
			},
			'form[shakes][]': {
				required: true,
			},
		},
		messages: {
			'form[meals][]': {
				required : "Fill at least 1 of these fields",
			},
			'form[sides][]': {
				required : "Fill at least 1 of these fields",
			},
			'form[snacks][]': {
				required : "Fill at least 1 of these fields",
			},
			'form[shakes][]': {
				required : "Fill at least 1 of these fields",
			},
        },
		submitHandler: function(form) {
			if(mealsForm.valid()){
				form.submit();
			}
	  	}
	});

	var subscribeForm = $('#subscribeForm');
	var validator3 = subscribeForm.validate({
		ignore: ':hidden',
    	errorClass : 'uk-text-small uk-text-lowercase uk-text-danger uk-form-danger',
    	validClass : 'uk-form-success',
    	errorElement : 'span',
    	errorPlacement: function(error, element) {
			error.appendTo( $(element).closest('.uk-margin') );
		},
		rules: {
			'form[subscription_days]': {
				required: true,
			},
			'form[delivery_days]': {
				required: true,
			},
		},
		messages: {
			'form[subscription_days]': {
				required : "Subscription Days is Required!",
			},
			'form[delivery_days]': {
				required : "Delivery Days is Required!",
			},
        },
        submitHandler: function(form) {
			if(mealsForm.valid()){
				form.submit();
			}
	  	}
	});

	$('#card_number').mask('0000-0000-0000-0000', { selectOnFocus: true });
	$('#card_expiry').mask('00/00', { selectOnFocus: true });

	var checkoutForm = $('#checkoutForm');
	var validator4 = checkoutForm.validate({
		ignore: ':hidden',
    	errorClass : 'uk-text-small uk-text-lowercase uk-text-danger uk-form-danger',
    	validClass : 'uk-form-success',
    	errorElement : 'span',
    	errorPlacement: function(error, element) {
			error.appendTo( $(element).closest('div'));
		},
		rules: {
			'form[contact_name]': {
				required: true,
			},
			'form[contact_email]': {
				required: true,
				email: true,
			},
			'form[contact_number]': {
				required: true,
				regex: /^[0-9]+$/,
				minlength: 10,
				maxlength: 10,
			},
			'form[contact_address]': {
				required: true,
			},
			'form[card_name]' : {
    			required: true,
				regex: /^[A-Za-z\s]+$/,
    		},
    		'form[card_number]' : {
    			required: true,
				regex: /^[0-9]+$/,
				regex: /^[0-9]{4}\-[0-9]{4}\-[0-9]{4}\-[0-9]{4}$/,
    		},
    		'form[card_expiry]' : {
    			required: true,
				regex: /^[0-9]{2}\/[0-9]{2}$/,
    		},
    		'form[card_security_code]' : {
    			required: true,
				regex: /^[0-9]{3}$/,
    		},
		},
		messages: {
			'form[contact_name]': {
				required : "Contact Name is Required!",
			},
			'form[contact_email]': {
				required : "Email address is Required!",
			},
			'form[contact_number]': {
				required : "Contact Number is Required!",
				regex: "Numeric char only allowed",
				minlength: $.validator.format("Length of the phone number should be {0} digit"),
				maxlength: $.validator.format("Length of the phone number should be {0} digit"),
			},
			'form[contact_address]': {
				required : "Delivery Address is Required!",
			},
			'form[card_name]': {
				required : "Card Name is Required!",
				regex: "Alpha char only allowed"
			},
			'form[card_number]': {
				required : "Card Number is Required!",
				regex: "Card Number format is invalid",
			},
			'form[card_expiry]': {
				required : "Card Expiry Date is Required!",
				regex: "Card Expiry format is invalid"
			},
			'form[card_security_code]': {
				required : "Card Security Code is Required!",
				regex: "Numeric char only allowed",
			},
        },
        submitHandler: function(form) {
			if(checkoutForm.valid()){
				form.submit();
			}
	  	}
	});

}(jQuery));