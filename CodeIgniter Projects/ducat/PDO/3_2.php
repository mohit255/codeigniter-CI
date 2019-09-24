<?php
try
{
	$db=new PDO("mysql:host=localhost;dbname=pdo","root","");
	echo "Connected To MySQL Server<br/>";
}
catch(PDOException $e)
{
	echo "Database Commection Error ".$e->getMessage();
}
try 
{
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->beginTransaction();
	$db->exec("insert into student values('T1',31)");
	$db->exec("insert into student values('T2',32)" );
	$db->commit();
	echo "Transaction Completed Succ..";
}
catch (PDOException $error)
{
	$db->rollback();
	echo "Transaction not completed: ".$error->getMessage();
}
?>