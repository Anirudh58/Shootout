<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "styles.css">
</head>
<body>
<canvas onclick = "projectAngle(event)" id = "myCanvas" height = "800" width = "1300" style = "border:1px solid black">
</canvas>
<div id="test" class="popup">
    <p><center><br><br>GAME OVER.<br> YOUR SCORE IS <span id ="msg"> </span></center></p>
	<br><br>
	<center><div class="savescore" onclick = "submitScore()">  SAVE SCORE ?</div></center><br>
	<center><div class="cancel" onclick="location.reload()"> PLAY AGAIN ?</div></center>
	
	</div>
<input type = "button" value = "START GAME" id = "btn">
<input type = "button" value = "MAIN MENU" id = "menu">
<span id = "time">TIME </span><input type = "text" id = "timer" >
<form method = 'post' name = "savedata" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<span id = "scorer">SCORE</span><input type = "text" id = "score" name = "score">
<span id = "namee">NAME</span><input type = "text" id = "name" name = "name">
<span id = "wind">WIND</span><input type = "text" id = "winds" name = "winds">
<input type = "submit" value = "submit" id = "submit">
</form>
</body>
<script src = "shootout.js">
</script>
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
	
	$name = $_POST['name'];
	$score = $_POST['score'];
	$sql = "INSERT INTO scores (NAME, SCORE)
	VALUES ('$name', '$score')";
	
	if ($conn->query($sql) === TRUE) 
	{
		
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}




?>







   
</script>
</html>