<?php

require_once "../../common.php";

System\HTML::printHead(NAV_PROFILE);

System\HTML::printBody('', false);
System\HTML::printHeader();

if (isset($_GET['uid']))
	$uid = $_GET['uid'];
else
	$uid = null;

System\HTML::printProfile($uid);

System\HTML::printFoot();

?>