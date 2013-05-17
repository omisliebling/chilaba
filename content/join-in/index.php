<?php

require_once "../../common.php";

unset($_SESSION['temp']);
unset($_SESSION['success']);

System\HTML::printHead(NAV_JOIN_IN);

System\HTML::printBody('', false);
System\HTML::printHeader();

System\HTML::printJoinIn();

System\HTML::printFoot();

?>