<?php

require_once "../../common.php";

System\HTML::printHead(NAV_HELP);

System\HTML::printBody('', false);
System\HTML::printHeader();

System\HTML::printHelp();

System\HTML::printFoot();

?>