$(function(){
		
		var html = '';
		
		html = html + '<div class="row bottom-padding">';
			html = html + '<div class="col-md-3">';
				html = html + '<label>Second First Name *</label>';
				html = html + '<input type="text" name="member2_firstname" value="" />';
			html = html + '</div>';
			html = html + '<div class="col-md-3">';
				html = html + '<label>Second Last Name *</label>';
				html = html + '<input type="text" name="member2_lastname" value="" />';
			html = html + '</div>';
			html = html + '<div class="col-md-3">';
				html = html + '<label>Second Email *</label>';
				html = html + '<input type="text" name="member2_email" value="" />';
			html = html + '</div>';
			html = html + '<div class="col-md-3 phone">';
				html = html + '<label>Second Phone Number*</label>';
				html = html + '(<input type="text"  name="member2_phone_a" maxlength="3" class="phone-box" onFocus="this.select()" onBlur="this.value=chars(this.value,\'1234567890\');" onKeyUp="if(this.value.length==3 && event.keyCode != 9 && event.keyCode != 16)this.form.member2_phone_b.focus();"> )';
				html = html + ' <input type="text" name="member2_phone_b" maxlength="3" class="phone-box" onFocus="this.select()" onBlur="this.value=chars(this.value,\'1234567890\');" onKeyUp="if(this.value.length==3 && event.keyCode != 9 && event.keyCode != 16)this.form.member2_phone_c.focus();">';
				html = html + '-<input type="text"  name="member2_phone_c" maxlength="4" class="phone-box2" onFocus="this.select()" onBlur="this.value=chars(this.value,\'1234567890\');"> ';
			html = html + '</div>';		
		html = html + '</div>';			
		
		
		var gift_html = '';
		gift_html = gift_html + '<div class="row bottom-padding">';
		gift_html = gift_html + '<div class="col-md-3 col-sm-3 pad">';
		gift_html = gift_html + '<label>Sender\'s First Name *</label>';
		gift_html = gift_html + '<input type="text" name="sender_first_name" value="" />';
		gift_html = gift_html + '</div>';
		gift_html = gift_html + '<div class="col-md-3 col-sm-3 pad">';
		gift_html = gift_html + '<label>Sender\'s Last Name *</label>';
		gift_html = gift_html + '<input type="text" name="sender_last_name" value="" />';
		gift_html = gift_html + '</div>';
		gift_html = gift_html + '<div class="col-md-3 col-sm-3 pad">';
		gift_html = gift_html + '<label>Sender\'s Email *</label>';
		gift_html = gift_html + '<input type="text" name="sender_email" value="" />';
		gift_html = gift_html + '</div>';		
		gift_html = gift_html + '<div class="col-md-3 col-sm-3 phone pad">';
		gift_html = gift_html + '<label>Sender\'s Phone Number*</label>';							
		gift_html = gift_html + '(<input type="text" class="phone-box" name="sender_phone_a" maxlength="3" onFocus="this.select()" onBlur="this.value=chars(this.value,\'1234567890\');" onKeyUp="if(this.value.length==3 && event.keyCode != 9 && event.keyCode != 16)this.form.sender_phone_b.focus();"> )';
		gift_html = gift_html + '<input type="text" class="phone-box" name="sender_phone_b" maxlength="3" onFocus="this.select()" onBlur="this.value=chars(this.value,\'1234567890\');" onKeyUp="if(this.value.length==3 && event.keyCode != 9 && event.keyCode != 16)this.form.sender_phone_c.focus();">';
		gift_html = gift_html + '-<input type="text" class="phone-box2" name="sender_phone_c" maxlength="4" onFocus="this.select()" onBlur="this.value=chars(this.value,\'1234567890\');">';
		gift_html = gift_html + '</div>';						
		gift_html = gift_html + '</div>';
		
		

		function detectCardType(number) {
			var re = {
				visa: /^4[0-9]{12}(?:[0-9]{3})?$/,
				mastercard: /^5[1-5][0-9]{14}$/,
				amex: /^3[47][0-9]{13}$/,				
				discover: /^6(?:011|5[0-9]{2})[0-9]{12}$/				
			};
			if (re.visa.test(number)) {
				return 2; // VISA
			} else if (re.mastercard.test(number)) {
				return 3; //MASTERCARD
			} else if (re.amex.test(number)) {
				return 1; //AMEX
			} else if (re.discover.test(number)) {
				return 4; //DISCOVER
			} else {
				return 0;
			}
		}
		
		
		$('#credit_card_no').keyup(function(){
			if(this.value.length > 14){
				var cardType = detectCardType(this.value);
				
				if(cardType > 0) {
					$("#creditcard_type_id").val(cardType);
				}
				
			}
		});
				
		
		// Form Validations
		$("#joinForm").validate({
			rules: {
				first_name: "required",
				last_name: "required",
				mem_phone_a: "required",
				mem_phone_b: "required",
				mem_phone_c: "required",
				member2_firstname: "required",
				member2_lastname: "required",
				member2_phone_a: "required",
				member2_phone_b: "required",
				member2_phone_c: "required",
				
				sender_first_name: "required",
				sender_last_name: "required",
				sender_phone_a: "required",
				sender_phone_b: "required",
				sender_phone_c: "required",
				
				credit_card_no: "required",
				credit_card_cvs: "required",
				
				mem_zipcode: "required",
				contract_accepted: "required",
				username: {
					required: true,
					minlength: 5,
					email: true
				},
				password: {
					required: true,
					minlength: 10
				},
								
				sender_email: {
					required: true,
					email: true
				}			
			},
			messages: {
				first_name: "Enter firstname",
				last_name: "Enter lastname",
				mem_phone_a: "",	
				mem_phone_b: "",					
				mem_phone_c: "",	
				member2_firstname: "Enter second firstname",
				member2_lastname: "Enter second lastname",
				member2_phone_a: "",	
				member2_phone_b: "",					
				member2_phone_c: "",

				sender_first_name: "Enter recipient firstname",
				sender_last_name: "Enter recipient lastname",
				sender_phone_a: "",	
				sender_phone_b: "",					
				sender_phone_c: "",
				
				credit_card_no: "Enter credit card number",					
				credit_card_cvs: "Enter CVV number",
				mem_street_number: "Enter street num",
				mem_street_address: "Enter street address",
				mem_city: "Enter city",
				mem_state: "Enter state",
				mem_zipcode: "Enter zipcode",
				contract_accepted:  "Please confirm that you accept the terms of the contract",
				username: {
					required: "Enter valid email address",
					minlength: "Enter valid email address",
					email: "Enter valid email address"
				},
				password: {
					required: "Enter valid password",
					minlength: "Password must be 10 characters or longer"
				},
				sender_email: "Enter valid email address"				
			}
		});
		
		// Form Validations
		$("#llSignupForm").validate({
			rules: {
				first_name: "required",
				last_name: "required",
				landlord_type_id: "required",
				ll_street_number: "required",
				ll_street_address: "required",
				ll_city: "required",
				ll_zipcode: "required",
				captcha: "required",
				
				llterms: "required",
				nofc: "required",
				username: {
					required: true,
					minlength: 5,
					email: true
				},
				password: {
					required: true,
					minlength: 10
				},
				
				ll_email: {
					required: true,
					email: true
				}			
			},
			messages: {
				first_name: "Enter first name",
				last_name: "Enter last name",
				landlord_type_id: "Select landlord type",
				ll_street_number: "Enter street number",
				ll_street_address: "Enter street address",
				ll_city: "Enter city",
				ll_zipcode: "Enter zipcode",				
				ll_phone_a: "",	
				ll_phone_b: "",					
				ll_phone_c: "",	
				llterms:  "Please confirm that you accept the terms and conditions",
				nofc: "Please confirm that your property is not in foreclosure",
				username: {
					required: "Enter a username, must be an email address",
					minlength: "Enter a username, must be an email address",
					email: "Please enter a valid email"
				},
				password: {
					required: "Please provide a password",
					minlength: "Password must be 10 characters or longer"
				},
				
				ll_email: "Enter valid email address"				
			}
		});
			
		// Rounded Corners
		var settings = {
			tl: {radius:10},
			tr: {radius:10},
			bl: {radius:10},
			br: {radius:10},
			antiAlias: true
		}
		//curvyCorners(settings,"h2");

		// Check username
		$("#username").focus(function(){
			$response = $('#response');
			$response.empty();
		});
		
		
		$(".features-link").click(function(){
			$('html,body').animate({
			   scrollTop: $("#features").offset().top - 70
			});
			return false;
		});
		
		$('input').keyup(function(){
			if(this.value.length==$(this).attr("maxlength")){
				$(this).next().focus();
			}
		});
		
		
		$(".plan-radio").click(function(){ 
			$that = $(this);
			$('div.plan').removeClass('selected');
			$that.closest('div.plan').addClass('selected');
			$("#singup-form").show();
			
			// New Code Added by Nasi
			var inputValue = $that.val();
			
			if(inputValue == 1319 || inputValue == 1317 ){
				$('div.60days').hide();
				$('div.90days').hide();
				$('div.180days').show(); 
				$('#company').hide(); 
			}

			if(inputValue == 1316 || inputValue == 1318){
				$('div.60days').hide();
				$('div.180days').hide(); 
				$('div.90days').show();  
				$('#company').hide(); 
			}

			if(inputValue == 1252 || inputValue == 1253 || inputValue == 1254){				
				$('#company').show(); 
			}

			if(inputValue == 1323 || inputValue == 1320){
				$('div.180days').hide();
				$('div.90days').hide();
				$('div.60days').show(); 
				$('#company').hide(); 
			}
			// End of New Code Added by Nasi

			$('html,body').animate({
			   scrollTop: $("#singup-form").offset().top - 50
			});
			
		});
		
		/*
		$(".tab").click(function(){
			$that = $(this);
			var areaId = $that.attr('aria-controls');
			$('#'+areaId+' .special .radiobutton input').trigger('click');
			$('#'+areaId+' .special').addClass('selected');
			
		});
		*/
		
		$(".btn-primary-cta").click(function() {
			$that = $(this);
			var planId = $that.data('plan-id');
			$('div.plan').removeClass('selected');
			$that.closest('div.plan').addClass('selected');		
			$('#radio-' + planId).trigger('click');
			$("#singup-form").show();
			if(planId == 1252 || planId == 1253 || planId == 1254) {
				$("#fb-login-section").hide();
				$(".gift-info").hide();
			} else {
				$("#fb-login-section").show();
				$(".gift-info").show();
			}
			
			$('html,body').animate({
			   scrollTop: $("#singup-form").offset().top - 50
			});
			
			
			return false;
		});
		
		
		
		
		$("#check-username").click(function(){
			var username = $(this).siblings("input").val();
			if(username.length >= 5){
				$response = $('#response');
				$response.empty();
				$response.append('<img src="images/icons/loading.gif" border="0" width="16" height="16" align="absmiddle" /> Please wait..');
				$.ajax({
				   type: "GET",
				   url: "checkusername.php",
				   data: "username="+username,
				   success: function(msg){
					   $response.empty().html(msg);				   
				   }
				});
			}
			return false;
		});
		
		$(".contract_area").click(function(){
			$this = $(this);
			var info = $this.data("info");
			$('.area-preference').append('<li>' + info + '</li>');
		});
		$(".contract").click(function(){
			$('html,body').animate({
			   scrollTop: $("#agreement").offset().top - 50
			});
			return false;
		});
		$(".contract_structure").click(function(){
			$this = $(this);
			var info = $this.data("info");
			$('.structure-preference').append('<li>' + info + '</li>');
		});
		
		$(".contract_bedrooms").click(function(){
			$this = $(this);
			var info = $this.data("info");
			$('.bedrooms-preference').empty().append('<li>' + info + '</li>');
		});
		
		$(".contract_furnished").click(function(){
			$this = $(this);
			var info = $this.data("info");
			$('.furnished-preference').empty().append('<li>' + info + '</li>');
		});
		
		$(".contract_maxrent").change(function(){
			$this = $(this);
			var info = $this.val();
			$('.maxrent-preference').empty().append('<li>$' + info + '</li>');
		});
		
		if($(".contract_maxrent").length) {
			$this = $(".contract_maxrent");
			var info = $this.val();
			$('.maxrent-preference').empty().append('<li>$' + info + '</li>');
		}
		
		
		//Check promo code
		$("#promo-button").click(function(){
			var promocode = $("input[name=promocode]").attr("value");			
			var initialSingleRateHandle = $("input[name=initial_single_rate]").attr("value");
			var initialDualRateHandle = $("input[name=initial_dual_rate]").attr("value");
			var initialGoldRateHandle = $("input[name=initial_gold_rate]").attr("value");
			
			if(promocode.length >= 3){
				$response = $('.promo-response');
				$response.empty();
				$response.append('<img src="https://www.westsiderentals.com/images/icons/loading.gif" border="0" width="16" height="16" align="absmiddle" /> Please wait..');
				$.ajax({
				   type: "GET",
				   dataType: "json",
				   url: "/secure/checkpromocode.cfm",
				   data: "promocode="+promocode,
				   success: function(data){
						var $singleRateHandle = $(".single-rate");
						var $dualRateHandle = $(".dual-rate");
						var $goldRateHandle = $(".gold-rate");
						
						if(data.isvalid == true) {
							$response.empty().html('<label class="success">'+data.message+'</label>');
							var discount = data.discount;
							var singleRate = initialSingleRateHandle - discount;
							var dualRate = initialDualRateHandle - discount;
							var goldRate = initialGoldRateHandle - discount;
							$singleRateHandle.text(singleRate);
							$dualRateHandle.text(dualRate);
							$goldRateHandle.text(goldRate);												
						} else {							
							$response.empty().html('<label class="error">'+data.message+'</label>');
							$singleRateHandle.text(initialSingleRateHandle);
							$dualRateHandle.text(initialDualRateHandle);
							$goldRateHandle.text(initialGoldRateHandle);		
						}
				   }
				});
			}
			return false;
		});
		
		// Membership Options Effects
		$(".gift_membership").click(function(){
			var isChecked = $(this).is(':checked');
			
			if(isChecked){
				$("#gift_recipient_info").empty().append(gift_html);
				$("#label_fname").empty().text("Recipient's First Name *");
				$("#label_lname").empty().text("Recipient's Last Name *");
				$("#label_email").empty().text("Recipient's Email *");
				$("#label_phone").empty().text("Recipient's Phone Number *");
			} else {
				$("#gift_recipient_info").empty();
				$("#label_fname").empty().text("First Name *");
				$("#label_lname").empty().text("Last Name *");
				$("#label_email").empty().text("Email *");
				$("#label_phone").empty().text("Phone Number *");
			}
		});	
		
		
		$(".tab-pane .plan").click(function(){
			//$(this).find("input:radio").attr("checked","true");
			var inputValue = $(this).find("input:radio").attr("value");
			$dualId = $("#dual-data");
			if(inputValue == 1320 || inputValue == 1317 || inputValue == 1316){
				$dualId.empty().append(html);
			} else {
				$dualId.empty();
			}
			
			if(inputValue == 974){
				$("#gift_recipient_info").empty().append(gift_html);
				$("#label_fname").empty().text("Recipient's First Name *");
				$("#label_lname").empty().text("Recipient's Last Name *");
				$("#label_email").empty().text("Recipient's Email *");
				$("#label_phone").empty().text("Recipient's Phone Number *");
			} else {
				$("#gift_recipient_info").empty();
				$("#label_fname").empty().text("First Name *");
				$("#label_lname").empty().text("Last Name *");
				$("#label_email").empty().text("Email *");
				$("#label_phone").empty().text("Phone Number *");
			}
		});	
		
		$(".extend-membership .btn-primary-cta").click(function() {		
			var inputValue = $(this).data("plan-id");
			$dualId = $("#dual_fields");
			if(inputValue == 26 || inputValue == 27 || inputValue == 28 || inputValue == 40 || inputValue == 39 || inputValue == 38 || inputValue == 42){
				$dualId.show();
			} else {
				$dualId.hide();
			}
		});
		
		$(".securejoin ul li div.plan-wrapper div.plan").mouseover(function(){$(this).addClass("selected");}).mouseout(function(){$(this).removeClass("selected");});	
				
		if($("#giftselected") && $("#giftselected").length) {			
			$("div#giftselected").trigger('click');			
		}
		
		/*
		$('#preferences').accordion({ 
			header: '.preferences-header', 
			active: false, 
			alwaysOpen: false, 
			animated: false, 
			autoheight: false 
		});
		*/
		
	});	
	
	//Initialize Accordions
	ddaccordion.init({
		headerclass: "preferences-header", //Shared CSS class name of headers group
		contentclass: "preferences-content", //Shared CSS class name of contents group
		collapseprev: false, //Collapse previous content (so only one open at any time)? true/false
		defaultexpanded: [], //index of content(s) open by default [index1, index2, etc]. [] denotes no content.
		animatedefault: false, //Should contents open by default be animated into view?
		persiststate: false, //persist state of opened contents within browser session?
		toggleclass: ["closedlanguage", "openlanguage"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
		togglehtml: ["suffix", "<img src='/images/plus.gif' /> ", "<img src='/images/minus.gif' /> "], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
		animatespeed: "fast" //speed of animation: "fast", "normal", or "slow"
	});
	
	ddaccordion.init({
		headerclass: "agreement-header", //Shared CSS class name of headers group
		contentclass: "agreement-content", //Shared CSS class name of contents group
		collapseprev: false, //Collapse previous content (so only one open at any time)? true/false
		defaultexpanded: [], //index of content(s) open by default [index1, index2, etc]. [] denotes no content.
		animatedefault: false, //Should contents open by default be animated into view?
		persiststate: false, //persist state of opened contents within browser session?
		toggleclass: ["closedlanguage", "openlanguage"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
		togglehtml: ["suffix", "<img src='/images/plus.gif' /> ", "<img src='/images/minus.gif' /> "], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
		animatespeed: "fast" //speed of animation: "fast", "normal", or "slow"
	});	