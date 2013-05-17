<?php
	use System\User;

	require_once '../../../common.php';
	//TODO: ANPASSEN!!!
	$poiForm = new System\Form();
	$formCheck = $poiForm->checkNewPoiFormBData();

	if ($formCheck) {
		unset($_SESSION['success']);
		unset($_SESSION['newpoi']);
		header('location:'.PROJECT_HTTP_ROOT.'/map.html');
	} else {
		$_SESSION['redirected'] = 'checkNewPoiFormB.php';
		header('location:'.PROJECT_HTTP_ROOT.'/join-in/new-poi.html');
	}
?>