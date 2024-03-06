<?php

$dbhost = "54.151.210.36";
$dbuser = "ming";
$dbpass = "Xiong1903@123";
$dbname = "project1";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
	

