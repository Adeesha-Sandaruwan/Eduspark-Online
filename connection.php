<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edusparkonline";

//make connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check if connection is made

if ($conn->connect_error) {
    die("Connecton Failed" . $conn->connect_error);
}

?>