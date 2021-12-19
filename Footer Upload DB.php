<?php


$servername = "localhost";
$username = "root";
$pass = "";
$db = "my project";


$conn = mysqli_connect($servername,$username,$pass,$db);



$mnumber = $_POST['mnumber'];
$ordertime = $_POST['ordertime'];
$tg = $_POST['tg'];







$sql = " INSERT INTO `footer`(`mnumber`, `ordertime`, `tg`) VALUES ('$mnumber','$ordertime','$tg')";



$rows = mysqli_query($conn,$sql);





header("location:Footer Upload.php");














?>