<html>
<style>
body{
background-image: url('basketball.jpg');
}
</style>
<body>


</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "Anip58";
$dbname = "gamescores";
$table = "scores";	

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 } 

$sql = "SELECT * FROM scores ORDER BY SCORE DESC LIMIT 10";
$result = mysqli_query($conn,$sql);

echo "<br><br><br><br>";
echo "<h1><center><u> HIGH SCORES </u></center></h1>";

while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<h2><center> " . $rows["NAME"] . "    -     " .  $rows["SCORE"] . "<br></center></h2>";
}
mysqli_free_result($result);



mysqli_close($conn);

?>