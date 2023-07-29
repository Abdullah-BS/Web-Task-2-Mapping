<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$command = $_POST['command'];

$sql = "INSERT INTO commands (command) VALUES ('$command')";

if ($conn->query($sql) === TRUE) {
    echo "New command inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>