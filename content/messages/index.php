<?php

require_once "../../common.php";

System\HTML::printHead(NAV_MESSAGES);

System\HTML::printBody('', false);
System\HTML::printHeader();

System\HTML::printMessages();

System\HTML::printFoot();

?>