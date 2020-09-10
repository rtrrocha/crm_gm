<?php

$server = "localhost";
$db = "crm_gm";
$user = "root";
$pass = "mysqlroot";
// Create connection
// $conn = mysqli_connect($server, $user, $pass, $db);
$conn = new mysqli($server, $user, $pass, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

?>