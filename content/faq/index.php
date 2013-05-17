<?php

require_once "../../common.php";

System\HTML::printHead(NAV_FAQ);

System\HTML::printBody('', false);
System\HTML::printHeader();

System\HTML::printFaq();

System\HTML::printFoot();

?>