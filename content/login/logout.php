<?php
	use System\User;
	
	require_once "../../common.php";
	
	$user = new User();
	$user->logoutUser(true);
	
	header("Location: ". PROJECT_HTTP_ROOT);
?>