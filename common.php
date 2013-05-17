<?php
session_start();

if (!isset($_SESSION['lang']))
	$lang = 'de';
else
	$lang = $_SESSION['lang'];

// Projektpfade (Web und lokaler Pfad) 
include(__DIR__.'/paths.php');

// Alle Basis-Klassen einbinden
require_once PROJECT_DOCUMENT_ROOT."/inc/includeAllClasses.php";

// Datenbanksettings und weiter systemweite Einstellungen
require_once PROJECT_DOCUMENT_ROOT.'/settings.php';

// Sprachdatei einbinden
require_once PROJECT_DOCUMENT_ROOT."/lang/phrases_$lang.php";

// Datenbankobjekt erstellen (wenn nicht bereits erstellt)
if(!isset($GLOBALS['DB']))
	$DB = new System\Database\MySQL(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME,DB_PORT);

// global verfügbares Session-Objekt.
//new System\SessionHandler();

?>