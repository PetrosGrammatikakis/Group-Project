<?php
$host = "127.0.0.1"; // Host name
$username = "root"; // MySQL username
$password = ""; // MySQL password
$db_name = "ISTORIKH_EGKYKLOPAIDEIA"; // Database name

// Create connection
$conne = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$conne) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>