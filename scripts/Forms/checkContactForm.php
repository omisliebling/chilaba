<?php
	require_once '../../common.php';
	
	$CONTACT_FORM = new System\Form();
	$formOK = $CONTACT_FORM->checkContactFormData();
	
	if ($formOK == true) {
		$_SESSION['success'] = SUC_EMAIL_TRANSMISSION;
	} else {
		$_SESSION['redirected'] = 'checkContactForm.php';
	}

	header('location:'.PROJECT_HTTP_ROOT.'/contact.html');

?>