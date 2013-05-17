<?php
	require_once '../../common.php';
	
	$editProfileForm = new System\Form();
	$formCheck = $editProfileForm->checkEditProfileFormData();
	
	if ($formCheck == true) {
		header('location:'.PROJECT_HTTP_ROOT.'/profile.html');
	} else {
		$_SESSION['redirected'] = 'checkEditProfileForm.php';
		header('location:'.PROJECT_HTTP_ROOT.'/edit-profile.html');
	}
?>