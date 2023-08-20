<?php

$servername = "";
$usernamew = "";
$password = "+";
$database = "";
$database2 = "";

// Create connection
$conn = new mysqli($servername, $usernamew, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





// Create connection
$conn2 = new mysqli($servername, $usernamew, $password, $database2);

// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
