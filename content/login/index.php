<?php
require_once "../../common.php";

System\HTML::printHead(NAV_LOGIN);

System\HTML::printBody('', false);
System\HTML::printHeader();

$loginForm = new System\Form();

$loginForm->printLoginForm(PROJECT_HTTP_ROOT.'/content/login/checkLoginForm.php');

//Ende der Seite
System\HTML::printFoot();
?>