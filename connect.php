<?php 

$mysqli= new mysqli('localhost','root','','robot');

if($mysqli->connect_error){
    die('Error'.('.$mysqli->connect_errno.').$mysqli->connect_error);
}


if (isset($_POST['backward'])){
	echo '<p style="color:white;text-align:center;">B</p>';
	mysqli_query($mysqli,"INSERT INTO`control` SET `Backward` = 'B'");
}

if (isset($_POST['forward'])){
	echo '<p style="color:white;text-align:center;">F</p>';
	mysqli_query($mysqli,"INSERT INTO`control` SET `Farward` = 'F'");
}

if (isset($_POST['right'])){
	echo  '<p style="color:white;text-align:center;">R</p>';
	mysqli_query($mysqli,"INSERT INTO`control` SET `Right` = 'R'");
}

if (isset($_POST['left'])){
	echo  '<p style="color:white;text-align:center;">L</p>';
	mysqli_query($mysqli,"INSERT INTO`control` SET `Lefty` = 'L'");
}
if (isset($_POST['stop'])){
	echo  '<p style="color:white;text-align:center;">S</p>';
	mysqli_query($mysqli,"INSERT INTO`control` SET `Stopit` = 'S'");
}



?>
<!DOCTYPE HTML>

<html>
<head></head>
<style>
        body {
            background-color: #92a8d1;
            width: 50%;
            margin: 0 auto;
            font: 10pt/1.5em "Georgia", Arial, sans-serif;
        }
        
        #button {
            border: none;
            color: white;
            padding: 10px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
            background-color: white;
            color: black;
            border: 2px solid grey;
        }
        
        #button:hover {
            background-color: red;
            color: white;
        }
    </style>
<body>
<form>
<p style="text-align:center;">
  <input type="button" value="Control Panel" id="button" onclick="history.back()">
</p>
</form>
</body>



</html>