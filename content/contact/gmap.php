<?php

require_once "../../common.php";

System\HTML::printHead(NAV_GMAPS . " - " . NAV_CONTACT);

System\HTML::printBody('', false);
System\HTML::printHeader(true);

System\HTML::printGMapsForm();

System\HTML::printFoot();

?>