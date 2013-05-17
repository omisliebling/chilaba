// Bootstrap Carousel
$(document).ready(function() {
	$('.carousel').carousel({
		interval : 5000
	});
});


// Form-Validation
$(document).ready(function() {
	$('#inputRegisterEmail').keyup(checkEmail);
	//$('#inputRegisterEmail').keyup(setInformation);
	$('#inputRegisterPassword').keyup(checkPassword);
	$('#inputRegisterPasswordRepeat').keyup(checkPasswordRepeat);
	$("input[id^='inputRegister']").focus(setInformation);
	$("input[id^='inputRegister']").blur(resetInformation);
});

function checkEmail() {
	var email = $('#inputRegisterEmail').val();
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	var valid = regex.test(email);

	if(email == '' || email.length < 6){
		$('#inputRegisterEmail').closest('.control-group').removeClass("success").removeClass("error");
	} else if(valid) {
		jQuery.ajax({
			type: 'POST',
			url: 'content/registrieren/checkRegistrationForm.php',
			data: 'email='+ email,
			cache: false,
			success: function(response) {
				if(response == 1) {
					$('#inputRegisterEmail').closest('.control-group').removeClass("success").addClass("error");
				} else {
					$('#inputRegisterEmail').closest('.control-group').removeClass("error").addClass("success");
				}
			}
		});
	}
}

function checkPassword() {
	var password = $('#inputRegisterPassword').val();

	if (password.length < 6) {
		$('#inputRegisterPassword').closest('.control-group').removeClass("success").addClass("error");
	} else {
		$('#inputRegisterPassword').closest('.control-group').removeClass("error").addClass("success");
	}
}

function checkPasswordRepeat() {
	var password = $('#inputRegisterPassword').val();
	var password2 = $('#inputRegisterPasswordRepeat').val();

	if (password != password2) {
		$('#inputRegisterPasswordRepeat').closest('.control-group').removeClass("success").addClass("error");
	} else {
		$('#inputRegisterPasswordRepeat').closest('.control-group').removeClass("error").addClass("success");
	}
}

function setInformation() {
	// Bisherigen Inhalt loeschen
	$('.info-box p').remove();
	$('.info-box ul').remove();
	//$('.info-box').append('<p>'+$(this).val()+'</p>');

	var info = null;

	switch (this.id) {
		case 'inputRegisterEmail': 
			info = '<ul><li>bla</li><li>blub</li></ul>';
			break;
		case 'inputRegisterPassword':
			info = 'Passwort-Infos';
			break;
		case 'inputRegisterPasswordRepeat':
			info = 'PasswortWiederhol-Infos';
			break;
		default: 
			info = 'Nothing to do!';
	}

	$('.info-box').append('<p>'+info+'</p>');
}

/**
 * Setzt die Anzeige in der Info-Box zurueck.
 * 
 * @return {[type]} [description]
 */
function resetInformation() {
	$('.info-box p').remove();
	$('.info-box ul').remove();
	$('.info-box').append('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, odit iure optio blanditiis provident voluptates nemo. Mollitia, facilis odio itaque?</p>');
}