<?php
function getDB() {
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="dbtest";
	$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser,
 $dbpass);	
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, 
	PDO::ERRMODE_EXCEPTION);
	return $dbConnection;
}
?>