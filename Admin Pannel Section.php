<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    <link rel="stylesheet" href="Admin Pannel Section.css">
    <script src="https://kit.fontawesome.com/f6f90a05c4.js" crossorigin="anonymous"></script>
</head>
<body>
  <br>
      <div class="header">
      <div class="shadows">  
      <div class="img">
      
      <img src="Website Images/Admin logoo.png" alt="">


      <div class="site" style="margin-top:-2.6rem; ">
      </div>
      <div class="search">
      <h1>FOOD BASKET ADMIN</h1>

      <div class="icon">
                         <i class="fas fa-shipping-fast fa-lg"></i>
                         <i class="fas fa-envelope-open-text fa-lg"></i><span>2</span>
                         <i class="far fa-bell fa-lg"></i><span>5</span>
      </div>
      </div>
      </div>
   

<?php



$servername ="localhost";
$username = "root";
$password = "";
$db = "my project";



$conn = mysqli_connect($servername,$username,$password,$db);



$sql = "SELECT * FROM `uploadproduct`";


$rows = mysqli_query($conn,$sql);


$result = mysqli_fetch_assoc($rows);




$count = mysqli_num_rows($rows);




// Count Number Of Row In To Fruits Table

$sql = "SELECT * FROM `uploadfruits`";



$rows = mysqli_query($conn,$sql);

$fetch = mysqli_fetch_assoc($rows);


$countfruits = mysqli_num_rows($rows);



// Count Upload Product Into Dairy Products Table


$sql= "SELECT * FROM `uploaddairyproduct`";



$rows = mysqli_query($conn, $sql);



$product = mysqli_fetch_assoc($rows);


$countdairy =mysqli_num_rows($rows);


// Count Dairy Product Upload In Table

$sql = "SELECT * FROM `order product`";


$rows = mysqli_query($conn,$sql);

$result = mysqli_fetch_assoc($rows);


$countorder = mysqli_num_rows($rows);


?>





<div class="countproduct">
    <div class="vegetablecount" style="margin-left:2rem;">
      <h1  style="margin-left:-37rem; COLOR:BLUE; ">Dashboard</h1>
      <p>
      <span style="margin-left:-0.2rem;" >Total Vegetable</span><br>
      <span style="margin-left:2rem; font-weight:bolder;font-size:1.5rem; color:red"><?php  print_r($count); ?></span>
      <span><i class="fas fa-file-import" style="color:orange;" ></i></span><br>
      <span style="margin-left:1.3rem;">Upload</span>

</div>


<div class="fruitscount" style="margin-left:17rem;">
      
      <p>
      <span style="margin-left:.7rem;">Total Fruits</span><br>
      <span style="margin-left:2rem; font-weight:bolder;font-size:1.5rem; color:red"><?php  print_r($countfruits); ?></span>
      <span><i class="fas fa-file-import"  style="color:orange;" ></i></span><br>
      <span style="margin-left:1.3rem;">Upload</span>

</div>



<div class="dairycount" style="margin-left:34rem;">
      
      <p>
      <span style="margin-left: -1rem;" >Total Dairy Products</span><br>
      <span style="margin-left:2rem; font-weight:bolder; font-size:1.5rem; color:red;"><?php  print_r($countdairy); ?></span>
      <span><i class="fas fa-file-import"  style="color:orange;" ></i></span><br>
      <span style="margin-left:1.3rem;">Upload</span>

</div>


<div class="dairycount" style="margin-left:50rem;">

<div class="color">    
      <p>
      <span style="margin-left: .8rem;" >Total Order</span><br>
      <span style="margin-left:2rem; font-weight:bolder; font-size:1.5rem; color:red"><?php print_r($countorder); ?> </span>
      <span><i class="fas fa-file-import"  style="color:orange;" ></i></span><br>
      <span style="margin-left:1.8rem;">Place</span>
      </div>  
</div>
</div>
</p>



<!-- WEBSITE SECTION START -->

<div class="sitesection">
<div class="shadows1">
         <h1 style="margin-left:-31rem; COLOR:BLUE; margin-top:2rem; ">Website Section<h1>

<div class="upload"style="margin-left:-33.4rem;margin-top: 4.5rem; font-size:1rem; "> 


         <i class="fas fa-images"  style="color:red" ></i>
         <a href="Main Section upolad banner.php" style="margin-left:.5rem;">Update Main Banner</a><br><br>

         <i class="fas fa-exchange-alt" style="margin-left: 3.5rem; color:red;"  ></i>
         <a href="Footer Upload.php" style="margin-left:.5rem;">Update Footer Section</a><br><br>

         <i class="fas fa-store" style="margin-left:5.5rem; color:red"></i>
         <a href="Footer Upload Working City.php" style="margin-left:.6rem;">Update Footer City Section</a><br><br>

         <i class="fas fa-address-card" style="margin-left:5.5rem; color:red"></i>
         <a href="" style="margin-left:.6rem;">Update About Page Section</a><br><br>

         <i class="fas fa-truck" style="margin-left:6.2rem; color:red"></i>
         <a href="" style="margin-left:.6rem;">Update Delivery Role Section</a><br><br>

         <i class="fab fa-whatsapp fa-lg"style="margin-left:5rem; color:green;    "   ></i>
         <a href="" style="margin-left:.6rem;">Update Quick Chat Number</a><br><br>



     </div> 
     </div>
     </div>

</div>

<!-- FARMER SECTION START -->

<div class="sitesection" style="margin-left:50rem; margin-top:16rem;">
<div class="shadows1">
         <h1 style="margin-left:-36.5rem; COLOR:BLUE; margin-top:2rem; ">Famer Section<h1>
<div class="upload"style="margin-left:-33.4rem;margin-top: 4.5rem; font-size:1rem; ">    
         <i class="fas fa-list-ol" style="color:red" ></i>
         <a href="Admin Pannel View Farmer Registration List.php" style="margin-left:.5rem;">View Farmer Registration List</a><br><br>
         <i class="fas fa-money-bill" style="margin-left: 1.5rem; color:red;"  ></i>
         <a href="" style="margin-left:1rem;"> View Farmer Product Price</a><br><br>

         <i class="fas fa-sort-amount-up-alt" style="margin-left:2rem; color:red"></i>
         <a href="" style="margin-left:.6rem;">Update Framer Product Price</a><br><br>

         <i class="fas fa-rupee-sign" style="margin-left:-1rem; color:red"></i>
         <a href="" style="margin-left:.6rem;">View Market Price List</a><br><br>
         <i class="fas fa-poll" style="margin-left:-1.9rem; color:red"></i>
         <a href="" style="margin-left:.6rem;">Update Market Price</a><br>
      
         
         <br>
         
      









         
     </div> 
     </div>
     </div>
     
</div>





<div class="navbar" style="margin-top:-33.1rem;">
 <div class="bg">
     <br>
     <p>MENU</p>
     <br>
     <i class="fas fa-chart-line"></i>
     <a href="">Dashboard </a>
     <br>
     <div class="upload">
      <p>UPLOAD</p><br>

      <i class="fas fa-pepper-hot" ></i>  
      <a href="Upload Vegetable.php" > Upload Vegetable</a>
<br>

        <div class="upload1">
       <i class="fas fa-apple-alt"></i>
       <a href="Upload Fruits.php"> Upload Fruits</a>
       </div>
<br>
      <i class="fas fa-cookie-bite"></i>
      <a href="Upload Diary Product.php"> Upload Dairy</a>


     </div>



     <div class="upload">
      <p>VIEW & DELETE</p><br>

      <i class="fas fa-pepper-hot" ></i>  
      <a href="Admin Show Vegetable.php" >View Vegetable Products</a>
<br>

        <div class="upload1">
       <i class="fas fa-apple-alt"></i>
       <a href="Admin Show Fruits.php"> View Fruits Products</a>
       </div>
<br>
      <i class="fas fa-cookie-bite"></i>
      <a href="Admin Show Dairy.php"> View Dairy Products</a>




      <div class="upload">
      <p>Order Detils</p><br>

      <i class="fas fa-sort-amount-up-alt" ></i>  
      <a href="" >View Order List</a>
<br>

     </div>






</div>



    

      </div>
      </div>


