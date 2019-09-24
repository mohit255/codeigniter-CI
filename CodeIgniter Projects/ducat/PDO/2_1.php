<?php
$con=new PDO("mysql:host=localhost","root","");

$con->query("create database if not exists pdo");
$con->query("use pdo");
$con->query("create table if not exists student(id int(11) 
		NOT NULL AUTO_INCREMENT,
		name varchar(255) NOT NULL,
		student_id varchar(20) NOT NULL,PRIMARY KEY (id) )");
$con->query("insert into student values('','Ram1',11)");
$con->query("insert into student values('','Ram2',12)");
$con->query("insert into student values('','Ram3',13)");
$con->query("insert into student values('','Ram4',14)");
$con->query("insert into student values('','Ram5',15)");
echo "Completed";
?>