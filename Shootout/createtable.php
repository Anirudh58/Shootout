<?php
$servername = "localhost";
$username = "root";
$password = "Anip58";
$dbname = "gamescores";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE scores (
ID INT PRIMARY KEY, 
NAME VARCHAR(30) NOT NULL,
SCORE INT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table scores created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>