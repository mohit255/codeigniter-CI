<?php
try
{
	$con=new PDO("mysql:host=localhost;dbname=pdo","root","");
	echo "Connected To MySQL Server";
}
catch(PDOException $e)
{
	echo "Database Connection Error ".$e->getError();
}
?>