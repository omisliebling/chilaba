<?php

require_once "../../common.php";

System\HTML::printHead(NAV_PORTFOLIO);

System\HTML::printBody('', false);
System\HTML::printHeader(true);

System\HTML::printPortfolioForm();

System\HTML::printFoot();

?>