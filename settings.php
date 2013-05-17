<?php

//Fehlerreporting
error_reporting(E_ALL);

//DEBUG-MODUS (wenn true, wird die Debug-Konsole angezeigt)
define('DEBUG',true);

//DATENBANKVERBINDUNGS-DATEN
define('DB_SERVER',"localhost");
define('DB_PORT',"3306");
define('DB_NAME',"d00f7e3f");
define('DB_PREFIX',"");

//Datenbankbenutzer
define('DB_USER',"d00f7e3f");
//Benutzerpasswort
define('DB_PASSWORD',"krse8e3ZfT6gAAwC");

//HTML-TITEL
define('HTML_TITLE',"Chilaba");

//Autor der Seite
define('HTML_AUTHOR', "Chilaba Organisation");

//seit PHP 5.3 sollte die Zeitzone gesetzt werden
date_default_timezone_set('Europe/Berlin');

?>