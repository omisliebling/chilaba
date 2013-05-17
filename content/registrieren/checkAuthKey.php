<?php
	require_once '../../common.php';
	
	$user 		= new System\User();
	$username 	= $_GET['u'];
	$key 		= $_GET['key'];
	$userId 	= $user->getUserIdByUsername($username);
	$activated 	= $user->isUserActivated($userId);
	
	if (!$activated) {
		$userCheck = $user->activateUser($username, $key);
	
		if ($userCheck)
			$_SESSION['successKey'] = true;
		else
			$_SESSION['activationFailed'] = true;
	}

	header('location:'.PROJECT_HTTP_ROOT.'/registrieren');

?>