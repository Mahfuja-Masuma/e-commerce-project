<?php
$servername = "localhost";
$username = "root";
$password = "";

// $conn = mysqli_connect($servername, $username, $password);

$conn = new mysqli($servername, $username, $password,'blood_bank');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";

?>

