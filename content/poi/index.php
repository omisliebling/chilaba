<?php

require_once "../../common.php";

System\HTML::printHead(NAV_JOIN_IN);

System\HTML::printBody('', false);
System\HTML::printHeader();

System\HTML::printPoiDetails($_GET['pid']);

System\HTML::printFoot();

?>