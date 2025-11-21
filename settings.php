<?php
$host = "localhost";
$username = "root";
$pwd = "";
$database = "exhibition_db"; // Replace with your actual DB name

$conn = mysqli_connect($host, $username, $pwd, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>