<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header-2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

session_start();

//session_destroy();



$count = 0;
if(isset($_SESSION['cart'])){

$count = count($_SESSION['cart']);

}



?>




<div class="header-2" >
        <div class="links">
         <a href="index.php">Home</a>
         <a href="About/About.html">About</a>
         <a href="Category Section.php">Category</a>
         <a href="https://wa.me/917350403908">Quick Chat</a>
         
          </div>  
         <div class="impbutton">
         <a href="h2 How To Shop.php">How To Shop</a>
          <a href="h2 Track Me.php" id="location-button" >Track Me</a>
          <a href="h2 Delivery Rule.php">Delivery Rule</a>
         
          <a href="View Cart.php">
          <img style=" cursor: pointer;   width:3rem; margin-top:-1rem; margin-bottom:-1.4rem; margin-left:1.3rem;" class="img" src="Website Images/Add To Basket.png" alt=""><span class="count" style= "padding:.3rem ;border-radius: .5rem; color:red; padding-right:.2rem;  text-align: center;margin-left:.1rem;   font-weight: bold; " > <?php echo $count ?> </span>
                      </a>
                      
        </div>
        
    </div>


<!--  
<script>
             $('#location-button').click(function() {
              
                if(navigator.geolocation)
                navigator.geolocation.getCurrentPosition(function(position){
                console.log(position);

                });
else
               console.log("Location Is Not Supported");

             })









</script>  -->









</body>
</html>