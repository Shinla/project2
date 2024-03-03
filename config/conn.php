<?php

// Default database connection settings for local environment
$dbhost_local = "54.151.210.36";
$dbuser_local = "ming";
$dbpass_local = "Xiong1903@123";
$dbname_local = "project1";

// Database connection settings for staging environment
$dbhost_staging = "127.0.0.1";
$dbuser_staging = "ming";
$dbpass_staging = "Xiong1903@123";
$dbname_staging = "project1";

// Get the value of APPLICATION_ENV environment variable from Nginx
$application_env = $_SERVER['APPLICATION_ENV'] ?? 'local';

// Select database connection settings based on the environment
if ($application_env === 'staging') {
    $dbhost = $dbhost_staging;
    $dbuser = $dbuser_staging;
    $dbpass = $dbpass_staging;
    $dbname = $dbname_staging;
} else {
    $dbhost = $dbhost_local;
    $dbuser = $dbuser_local;
    $dbpass = $dbpass_local;
    $dbname = $dbname_local;
}

// Connect to the database
$con = mysqli_connect($dbhost_staging, $dbuser_staging, $dbpass_staging, $dbname_staging);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
