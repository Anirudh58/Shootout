<?php
$servername = "localhost";
$username = "root";
$password = "Anip58";
$dbname = "gamescores";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{	
    die("Connection failed: " . $conn->connect_error);     //Check
} 

if(isset($_POST['name']) && isset($_POST['score']))
{
	
	$name = strip_tags(mysql_real_escape_string($_POST['name']));
	$score = strip_tags(mysql_real_escape_string($_POST['score']));
	$sql = "INSERT INTO scores (ID, NAME, SCORE)
	VALUES ('', '$name', '$score')";
	
	if ($conn->query($sql) === TRUE) 
	{
		echo " <center><h1> New score saved successfully! </h1></center>";
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}




?>