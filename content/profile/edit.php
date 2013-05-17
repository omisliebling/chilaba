<?php

require_once "../../common.php";

System\HTML::printHead(NAV_PROFILE_EDIT);

System\HTML::printBody('', false);
System\HTML::printHeader();

$EDIT_PROFILE_FORM = new System\Form();
$EDIT_PROFILE_FORM->printEditProfileForm(PROJECT_HTTP_ROOT.'/content/profile/checkEditProfileForm.php');

System\HTML::printFoot();

?>