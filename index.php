<?php

require_once "common.php";

$page = new System\Page('Chilaba - Prost!', 'Startseite von Chilaba.de', 'Chilaba, Getränk, lecker, Flasche');
$page->setBreadcrumb('Home,Produkte,Ich weiss nicht,weiter');

$page->buildPage($page);
//$buildPage = new System\HTML($page);

?>