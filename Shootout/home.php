<html>
<style>
body{
background-image: url('basketball.jpg');
}

#playgame {
  background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #696569);
  background-image: -moz-linear-gradient(top, #000000, #696569);
  background-image: -ms-linear-gradient(top, #000000, #696569);
  background-image: -o-linear-gradient(top, #000000, #696569);
  background-image: linear-gradient(to bottom, #000000, #696569);
  -webkit-border-radius: 2;
  -moz-border-radius: 2;
  border-radius: 2px;
  -webkit-box-shadow: 0px 1px 3px #404040;
  -moz-box-shadow: 0px 1px 3px #404040;
  box-shadow: 0px 1px 3px #404040;
  font-family: Georgia;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #000000 0px;
  text-decoration: none;
  position:absolute;
  top:200px;
  left:780px;
  width:200px;
}

#playgame:hover {
  background: #e60514;
  background-image: -webkit-linear-gradient(top, #e60514, #fc4f05);
  background-image: -moz-linear-gradient(top, #e60514, #fc4f05);
  background-image: -ms-linear-gradient(top, #e60514, #fc4f05);
  background-image: -o-linear-gradient(top, #e60514, #fc4f05);
  background-image: linear-gradient(to bottom, #e60514, #fc4f05);
  text-decoration: none;
}

#howto {
  background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #696569);
  background-image: -moz-linear-gradient(top, #000000, #696569);
  background-image: -ms-linear-gradient(top, #000000, #696569);
  background-image: -o-linear-gradient(top, #000000, #696569);
  background-image: linear-gradient(to bottom, #000000, #696569);
  -webkit-border-radius: 2;
  -moz-border-radius: 2;
  border-radius: 2px;
  -webkit-box-shadow: 0px 1px 3px #404040;
  -moz-box-shadow: 0px 1px 3px #404040;
  box-shadow: 0px 1px 3px #404040;
  font-family: Georgia;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #000000 0px;
  text-decoration: none;
  position:absolute;
  top:400px;
  left:780px;
  width:200px;
}

#howto:hover {
  background: #e60514;
  background-image: -webkit-linear-gradient(top, #e60514, #fc4f05);
  background-image: -moz-linear-gradient(top, #e60514, #fc4f05);
  background-image: -ms-linear-gradient(top, #e60514, #fc4f05);
  background-image: -o-linear-gradient(top, #e60514, #fc4f05);
  background-image: linear-gradient(to bottom, #e60514, #fc4f05);
  text-decoration: none;
}

#highscores {
  background: #000000;
  background-image: -webkit-linear-gradient(top, #000000, #696569);
  background-image: -moz-linear-gradient(top, #000000, #696569);
  background-image: -ms-linear-gradient(top, #000000, #696569);
  background-image: -o-linear-gradient(top, #000000, #696569);
  background-image: linear-gradient(to bottom, #000000, #696569);
  -webkit-border-radius: 2;
  -moz-border-radius: 2;
  border-radius: 2px;
  -webkit-box-shadow: 0px 1px 3px #404040;
  -moz-box-shadow: 0px 1px 3px #404040;
  box-shadow: 0px 1px 3px #404040;
  font-family: Georgia;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #000000 0px;
  text-decoration: none;
  position:absolute;
  top:600px;
  left:780px;
  width:200px;
}

#highscores:hover {
  background: #e60514;
  background-image: -webkit-linear-gradient(top, #e60514, #fc4f05);
  background-image: -moz-linear-gradient(top, #e60514, #fc4f05);
  background-image: -ms-linear-gradient(top, #e60514, #fc4f05);
  background-image: -o-linear-gradient(top, #e60514, #fc4f05);
  background-image: linear-gradient(to bottom, #e60514, #fc4f05);
  text-decoration: none;
}
</style>
<body>

<input type = "button" id = "playgame" value = "PLAY GAME" onclick="window.open('shootout.php','resizable=yes')">

<input type = "button" id = "howto" value = "HOW TO" onclick="window.open('howto.php','resizable=yes')">

<input type = "button" id = "highscores" value = "HIGH SCORES" onclick="window.open('getscores.php','resizable=yes')">

</body>
</html>