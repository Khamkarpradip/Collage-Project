<?php


$servername = "localhost";
$username ="root";
$pass = "";
$db = "my project";



$conn = mysqli_connect($servername,$username,$pass,$db);




$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mnumber = $_POST['mnumber'];
$distric = $_POST['distric'];
$ctime = $_POST['ctime'];
$producttype = $_POST['producttype'];
$address = $_POST['address'];
$pcode = $_POST['pcode'];
$gender = $_POST['gender'];




$sql="INSERT INTO `farmerregistration`( `fname`, `lname`, `mnumber`, `distric`, `ctime`, `producttype`, `address`, `pcode`, `gender`) VALUES ('$fname','$lname','$mnumber','$distric','$ctime','$producttype','$address','$pcode','$gender')";



$query = mysqli_query($conn,$sql);


header("location:Famerthankyou.php");


?>