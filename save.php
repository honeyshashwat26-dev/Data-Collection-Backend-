<?php

$conn = new mysqli("localhost", "root", "", "database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email)
VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data Saved Successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>