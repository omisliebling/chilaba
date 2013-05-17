<?php

require_once "../../common.php";

$page = new System\Page('Produktübersicht von Chilaba', 'Produktübersicht von Chilaba', 'Chilaba, Getränk, lecker, Flasche');
$page->setBreadcrumb('Home,Sortiment');

$page->buildPage($page, null, 'printProductLine');

?>