<?php
	require_once '../../common.php';
	
	$loginForm = new System\Form();
	$formCheck = $loginForm->checkLoginFormData();

	if ($formCheck) {
		$_SESSION['success'] = SUC_USER_LOGIN;
		header('location: '.PROJECT_HTTP_ROOT);
	} else {
		$_SESSION['redirected'] = 'checkLoginForm.php';
		header('location: '.PROJECT_HTTP_ROOT.'/login.html');
	}
?>