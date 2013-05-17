<?php

require_once "../../common.php";

System\HTML::printHead(NAV_MAP);

System\HTML::printBody('', false);
System\HTML::printHeader();

System\HTML::printMap();

System\HTML::printFoot();

?>