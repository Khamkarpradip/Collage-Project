<?php


$sname = "localhost";
$uname = "root";
$pass = "";
$db = "my project";

  


$conn = mysqli_connect($sname,$uname,$pass,$db);


$ctyname1 = $_POST['city1'];
$ctyname2 = $_POST['city2'];
$ctyname3 = $_POST['city3'];
$ctyname4 = $_POST['city4'];
$ctyname5 = $_POST['city5'];
$ctyname6 = $_POST['city6'];


$sql = "INSERT INTO `footercity`( `city1`, `city2`, `city3`, `city4`, `city5`, `city6`) VALUES ('$ctyname1','$ctyname2','$ctyname3','$ctyname4','$ctyname5','$ctyname6')";



$rows = mysqli_query($conn,$sql);


header("location:Footer Upload Working City.php");










?>