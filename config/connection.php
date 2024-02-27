<?php

$dbhost = "15.152.30.107";
$dbuser = "ming";
$dbpass = "Xiong1903@123";
$dbname = "project1";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
	