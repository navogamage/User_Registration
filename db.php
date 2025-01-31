<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "user_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// error reporting 
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
