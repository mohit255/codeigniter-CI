<?php
try
{
	$db=new PDO("mysql:host=localhost;dbname=pdo","root","");
	echo "Connected To MySQL Server<br/>";
}
catch(PDOException $e)
{
	echo "Database Commection Error ".$e->getMessage();
	die();
}
$result=$db->query("select * from student");
while($r=$result->fetch())
{
	echo "{$r['id']}::{$r['name']}::{$r['student_id']}<br/>";
}
$db=null;
?>