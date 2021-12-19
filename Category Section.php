<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Section</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<?php







$count = 0;
if(isset($_SESSION['cart'])){

$count = count($_SESSION['cart']);

}

?>









    <!--Category card section start-->

<section class="Category" id="Category">
    <h2 class="heading">PRODUCT<span> CATEGORY</span></h2>
<br> <br>
<div class="product" >

 <div class="cart">
    <img src="Website Images/category-1.png" alt="">
    <h1>FRESH VEGITABLE</h1>
    
    <p>Upto 20% off </p>
    <br><br>
    <a href="Fresh Vegetable.php">
    <p><button name="addCart" style="width:16.5rem;"> SHOP NOW </button></p>
    </a>
 </div>

  <div class="cart">
      <img src="Website Images/category-2.png" alt="">

      <h1>FRESH DAIRY </h1>
      
      <p>Upto 20% off</p>
      <br><br>
      <a href="Fresh Dairy.php">
      <p><button name="addCart"  style="width:16.5rem;">SHOP NOW </button></p>
      </a>
  </div>



    <div class="cart">
         <img src="Website Images/category-4.png" alt="">
         <h1>FRUITS</h1>
         
         <p>Upto 20% off</p>

         <br><br>
        <a href="Fresh Fruits.php">
         <p><button name="addCart"   style="width:16.5rem;">SHOP NOW</button></p>
        </a>
    </div>

</div>

</section>

<!--Category card section end-->



 <!--Category card section start-->

 <section class="Category" id="Category">
    <h2 class="heading">PRODUCT<span> CATEGORY</span></h2>
<br> <br>
<div class="product" >

 <div class="cart">
    <img src="Website Images/category-1.png" alt="">
    <h1>FRESH VEGITABLE</h1>
    
    <p>Upto 20% off </p>
    <br><br>
    <a href="Fresh Vegetable.php">
    <p><button name="addCart" style="width:16.5rem;"> SHOP NOW </button></p>
    </a>
 </div>

  <div class="cart">
      <img src="Website Images/category-2.png" alt="">

      <h1>FRESH DAIRY </h1>
      
      <p>Upto 20% off</p>
      <br><br>
      <a href="Fresh Dairy.php">
      <p><button name="addCart"  style="width:16.5rem;">SHOP NOW </button></p>
      </a>
  </div>



    <div class="cart">
         <img src="Website Images/category-4.png" alt="">
         <h1>FRUITS</h1>
         
         <p>Upto 20% off</p>

         <br><br>
        <a href="Fresh Fruits.php">
         <p><button name="addCart"   style="width:16.5rem;">SHOP NOW</button></p>
        </a>
    </div>

</div>

</section>

<!-- card section end-->







<br>

 




</body>
</html>