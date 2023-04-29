<?php
// create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "allegra";

$conn = new mysqli($servername, $username, $password, $dbname);

// check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
