<?php
	require_once '../../common.php';

	$email = $_REQUEST["email"];
	if (isset($email)) {
		//echo "ich bin drin";
		$user = new System\User();
		$emailFound = $user->isEmailAlreadyInUse($email);

		// Rueckgabewert
		if ($emailFound) {
			echo "1";
		} else {
			echo "0";
		}
		
		//echo $emailFound;
	} else {
		$registrationForm = new System\Form();
		$formCheck = $registrationForm->checkRegistrationFormData();
		
		if ($formCheck == true) {
			$_SESSION['success'] = SUC_USER_CREATION;
		} else {
			$_SESSION['redirected'] = 'checkRegistrationForm.php';
		}

		header('location:'.PROJECT_HTTP_ROOT.'/registrieren');
	}

?>