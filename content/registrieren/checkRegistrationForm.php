<?php
	require_once '../../common.php';
	
	$registrationForm = new System\Form();
	$formCheck = $registrationForm->checkRegistrationFormData();
	
	if ($formCheck == true) {
		$_SESSION['success'] = SUC_USER_CREATION;
	} else {
		$_SESSION['redirected'] = 'checkRegistrationForm.php';
	}

	header('location:'.PROJECT_HTTP_ROOT.'/registrieren');

?>