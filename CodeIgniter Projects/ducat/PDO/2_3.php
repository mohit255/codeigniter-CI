<?php
$con=new PDO("mysql:host=localhost;dbname=pdo","root","");
//$con->query("create database if not exists pdo");
$con->query("use pdo");
$statement=$con->prepare("insert into student2 values(?,?)");
$statement->execute(array(2,"Shyam"));
echo "Completed";
?>