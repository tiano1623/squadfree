<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "henrytest";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
	die("Error on the Connection" . $conn->connect_error);
}
