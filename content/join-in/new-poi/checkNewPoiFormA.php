<?php
	use System\User;

	require_once '../../../common.php';
	//TODO: ANPASSEN!!!
	$poiForm = new System\Form();
	$formCheck = $poiForm->checkNewPoiFormAData();

	if ($formCheck) {
		$_SESSION['success'] = 'stepA';
	} else {
		$_SESSION['redirected'] = 'checkNewPoiFormA.php';
	}

	header('location:'.PROJECT_HTTP_ROOT.'/join-in/new-poi.html');
?>