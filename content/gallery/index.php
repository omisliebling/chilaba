<?php

require_once "../../common.php";

System\HTML::printHead(NAV_GALLERY);

System\HTML::printBody('', false);
System\HTML::printHeader();

System\HTML::printGallery();

System\HTML::printFoot();

?>