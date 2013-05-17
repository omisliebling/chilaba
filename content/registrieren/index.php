<?php

require_once "../../common.php";

$page = new System\Page('Werde ein Teil von Chilaba', 'Werde ein Teil von Chilaba', 'Registrierung, Mitmachen, Teil werden, Chilaba, Getränk, lecker, Flasche');
$page->setBreadcrumb('Home,Registrieren');

$page->buildPage($page, 'System\Form', 'printRegistrationForm', 'PROJECT_HTTP_ROOT.\'/content/registrieren/checkRegistrationForm.php\'');

?>