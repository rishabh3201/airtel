<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airtel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM query WHERE your_condition";
if ($conn->query($sql) === TRUE) {
    echo "Data deleted successfully";
} else {
    echo "Error deleting data: " . $conn->error;
}

$conn->close();
?>
