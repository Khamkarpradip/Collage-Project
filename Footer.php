<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Section</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    


<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "my project";

$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "SELECT * FROM `footer` ORDER BY id DESC   ";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$mnumber = $row['mnumber'];
$ordertime = $row['ordertime'];
$tg = $row['tg'];

    ?>











<section class="footer" id="footer">
    <div class="footer-contact">
    <div class="contact">
        <h1>Contact Us</h1>
        <br>
        <p>Call Us :- <?php  echo $mnumber ;         ?></p>
        <p>Time :- <?php echo $ordertime;  ?> </p>
        <br>
        <span>"<?php echo $tg;  ?>"</span>
</div>


<?php



$servername = "localhost";
$username = "root";
$password = "";
$database = "my project";

$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "SELECT * FROM `footercity` ORDER BY id DESC   ";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$city1 = $row['city1'];
$city2 = $row['city2'];
$city3 = $row['city3'];
$city4 = $row['city4'];
$city5 = $row['city5'];
$city6 = $row['city6'];


    ?>






<div class="Working">
    <h1>Working Area</h1>
    <br>
    <p><?php     echo $row['city1'];             ?></p>
    <p><?php     echo $row['city2'];             ?> </p>
    <p><?php     echo $row['city3'];             ?></p>
    <p><?php     echo $row['city4'];             ?></p>
    <p><?php     echo $row['city5'];             ?></p>
    <p><?php     echo $row['city6'];             ?></p>

</div>

<div class="carrer">
    <h1>Work With Us</h1>
    <br>
    <a href="">
    <p class="boy">Work As Delivery Boy..!</p>
    </a>
    <br>
    <a href="Farmer Registration.php">
    <p class="join">Join Us ONLY 'FARMER'</p>
    </a>
    
</div>
      </div>
      
</section>
<br>
<h1 class="Reserved"> Created By <span>KHAMKAR PARDIP</span> | All Right Reversed </h1>
<img src="" alt="">
<br><br>
</body>
</html>



</body>
</html>