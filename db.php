<?php
$servername = "localhost";
$username = "root"; // or your MySQL username
$password = ""; // or your MySQL password
$dbname = "ems"; // replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
