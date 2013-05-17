<?php

require_once "../../common.php";

System\HTML::printHead(NAV_ABOUT);

System\HTML::printBody('', false);
System\HTML::printHeader(true);

System\HTML::printAboutForm();

System\HTML::printFoot();

?>