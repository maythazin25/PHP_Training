<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "login_system";

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($conn, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS login_system";
$conn->query($sql);

$sql = "CREATE TABLE `login_system`.`login` (
    `email` varchar(255) DEFAULT NULL,
    `password` varchar(255) DEFAULT NULL,
    `status` int(11) NOT NULL
  );";
$conn->query($sql);
?>