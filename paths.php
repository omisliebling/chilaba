<?php
//vor PHP 5.3: 
//define('PROJECT_DOCUMENT_ROOT',dirname(__FILE__));
//seit PHP 5.3
define('PROJECT_DOCUMENT_ROOT',__DIR__);
//Projektname
$project = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace("\\", "/",__DIR__));

//Protokoll der Verbindung (HTTP oder HTTPS)
(!isset($_SERVER['HTTPS']) OR $_SERVER['HTTPS']=='off') ? $protocol = 'http://' : $protocol = 'https://';

//PROJECT Pfad (für die Verwendung im Web)
//define('PROJECT_HTTP_ROOT',$protocol.$_SERVER['HTTP_HOST']);
define('PROJECT_HTTP_ROOT',$protocol.$_SERVER['HTTP_HOST'].$project);
?>