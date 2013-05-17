<?php

/**
 * Die Basisklassen werden eingefügt!
 *
 */
 
////Fehlerbehandlungsklasse
//require_once PROJECT_DOCUMENT_ROOT."/inc/classes/ErrorHandling/class.ErrorHandling.php";
//
////"Debug-Logging"-Klasse
//require_once PROJECT_DOCUMENT_ROOT."/inc/classes/Debugging/class.Logging.php";

//Datenbankklasse
require_once PROJECT_DOCUMENT_ROOT."/inc/classes/DB/class.MySQL.php";

//HTML-Klasse
require_once PROJECT_DOCUMENT_ROOT."/inc/classes/HTML/class.HTML.php";
//Form-Klasse
require_once PROJECT_DOCUMENT_ROOT."/inc/classes/HTML/class.Form.php";
//Allgemeine Website
require_once PROJECT_DOCUMENT_ROOT."/inc/classes/HTML/class.Page.php";
//
require_once PROJECT_DOCUMENT_ROOT."/inc/classes/HTML/class.Utile.php";
//
require_once PROJECT_DOCUMENT_ROOT."/inc/classes/Mail/class.phpmailer.php";
//
//POI-Klasse
require_once PROJECT_DOCUMENT_ROOT."/inc/classes/POI/class.Poi.php";
////Kommentar-Klasse
//require_once PROJECT_DOCUMENT_ROOT."/inc/classes/Blog/class.Comment.php";

//Sicherheitsklasse
require_once PROJECT_DOCUMENT_ROOT."/inc/classes/Security/class.Security.php";
//Bcrypt Verschlüsselung
require_once PROJECT_DOCUMENT_ROOT."/inc/classes/Security/class.Bcrypt.php";
//Abfragen
require_once PROJECT_DOCUMENT_ROOT."/inc/classes/Security/class.Check.php";
require_once PROJECT_DOCUMENT_ROOT."/inc/classes/Security/config.Check.php";

require_once PROJECT_DOCUMENT_ROOT."/inc/classes/Security/class.Hint.php";
////Sitzungsklasse
//require_once PROJECT_DOCUMENT_ROOT."/inc/classes/Session/class.SessionHandler.php";
//
////Login
//require_once PROJECT_DOCUMENT_ROOT."/inc/classes/User/class.Login.php";
// Registrierung
// require_once PROJECT_DOCUMENT_ROOT."/inc/classes/User/class.Register.php";
//Benutzer-Klasse
require_once PROJECT_DOCUMENT_ROOT."/inc/classes/User/class.User.php";
////Friendslist
//require_once PROJECT_DOCUMENT_ROOT."/inc/classes/User/class.Friend.php";
//
////DebugConsole (nach HTML)!!!
//require_once PROJECT_DOCUMENT_ROOT."/inc/classes/Debugging/class.DebugConsole.php";

?>