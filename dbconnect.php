<?php

$host = "localhost";
$dbname = "auth";
$username = "root";
$password = "";

// Create a MySQLi connection
$connection = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
