<?php

require_once "../../../common.php";

System\HTML::printHead(NAV_JOIN_IN . ' &#187; ' . NAV_JOIN_IN_NEW_POI);

System\HTML::printBody('', false);
System\HTML::printHeader();

$newPoiForm = new System\Form();

if (isset($_SESSION['success']) && $_SESSION['success'] == 'stepA')
	$newPoiForm->printNewPoiFormB(PROJECT_HTTP_ROOT.'/content/join-in/new-poi/checkNewPoiFormB.php');
else
	$newPoiForm->printNewPoiFormA(PROJECT_HTTP_ROOT.'/content/join-in/new-poi/checkNewPoiFormA.php');

System\HTML::printFoot();

?>