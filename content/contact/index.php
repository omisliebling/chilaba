<?php

require_once "../../common.php";

System\HTML::printHead(NAV_CONTACT);

System\HTML::printBody('', false);
System\HTML::printHeader(true);

$CONTACT_FORM = new System\Form();
$CONTACT_FORM->printContactForm(PROJECT_HTTP_ROOT.'/scripts/Forms/checkContactForm.php');

System\HTML::printFoot();

?>