<?php

require_once "../../common.php";

$page = new System\Page('Changelog der Chilaba-Website', 'Changelog der Chilaba-Website', 'Chilaba, Getränk, lecker, Flasche');
$page->setBreadcrumb('Home,Changelog');

$page->buildPage($page, null, 'printChangelog');

?>