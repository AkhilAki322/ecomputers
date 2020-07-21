<?php
$servername = "localhost";
$username = "u838981601_ecomputers";
$password = "Zak123@&";
$dbname = "u838981601_ecomputers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>