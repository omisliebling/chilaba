<?php

use System\Poi;

require_once '../../../common.php';

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
$poi = new Poi();

// Opens a connection to a MySQL server

$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
if(!$connection)
{
	die('Not connected : ' . mysql_error());
}

// Set the active MySQL database

$db_selected = mysql_select_db(DB_NAME, $connection);
if(!$db_selected)
{
	die('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table

$query = "SELECT * FROM poi WHERE 1";
$result = mysql_query($query);
if(!$result)
{
	die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while($row = @mysql_fetch_assoc($result))
{
	// Adress-Knoten zusammenbauen und in UTF-8 konvertieren
	$address = utf8_encode($row['street'] . ', '. $row['zip'] . ' ' . $row['city']);

	// ADD TO XML DOCUMENT NODE
	$node = $dom->createElement("marker");
	$newnode = $parnode->appendChild($node);
	$newnode->setAttribute("poiId", $row['poiId']);
	$newnode->setAttribute("name", $row['name']);
	$newnode->setAttribute("address", $address);
	$newnode->setAttribute("lat", $row['lat']);
	$newnode->setAttribute("lng", $row['lng']);
	$newnode->setAttribute("type", $poi->getPoiCategory($row['poiId']));
}

echo $dom->saveXML();

?>