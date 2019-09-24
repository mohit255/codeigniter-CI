<?php
$con=new PDO("mysql:host=localhost;dbname=pdo","root","");
$con->query("create database if not exists pdo");
$con->query("use pdo");
$con->query("create table if not exists student2(id int(11) 
		NOT NULL,
		name varchar(255) NOT NULL)");
$statement=$con->prepare("insert into student2 values(:id,:abc)");
$statement->execute(array("id"=>1,"abc"=>"Mohan"));
$statement->execute(array("id"=>2,"abc"=>"Latest"));
echo "Completed";
?>
