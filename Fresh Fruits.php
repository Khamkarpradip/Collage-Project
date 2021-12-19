`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Fruits</title>
    <link rel="stylesheet" href="Fresh Fruits.css">
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


<br><br>
<div class="header-1" style="">
             <div class="links">


                     
                     <a href="" class="shop">How To Shop</a>
                     <a href="" class="shop">Offline Store</a>
                     <a href="" class="shop">Quick Chat</a>
                     
                     
                     <div class="add" style="margin-top: -1.5rem; ">
                     <a  style="margin-left:27.7rem;" href="View Cart.php">
                     
                    <img style=" cursor: pointer;   width:3rem; margin-top:-1rem; margin-bottom:-1.4rem; margin-left:1rem;" class="img" src="Website Images/Add To Basket.png" alt=""><span class="count" style= "padding:.3rem ;border-radius: .5rem; color:red; padding-right:.2rem;  text-align: center;margin-left:.1rem;   font-weight: bold; " > <?php echo $count ?> </span>
                      </a>
                      </div>
             </div>
             
<br><br>

<div>

<div class="heading">
        
        <h1 style="margin-right: 9rem; width:103%;margin-left: -3rem; " > FRESH FRUITS </h1>  
        </div>
        
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "my project";

$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "SELECT * FROM `uploadfruits`";

$result = mysqli_query($conn,$sql);

//$row = mysqli_fetch_assoc($result);


while($row = mysqli_fetch_assoc($result))
{
   
    $imgname = $row['pimage'];
    $pname = $row['pname'];
    $sprice = $row['sprice'];
    $mprice = $row['mprice'];

    ?>

<section class="continer" style="margin-top:-13rem; margin-right: 15rem; ">


<form action="Add To Card.php" method="POST">

<div class="main" style="margin-left:-5rem;">
<div class="product" style="display:flex; margin: 7rem; margin-left:4rem;">
<div class="card" style=" width:16rem; margin: -20rem;  margin-top: 10rem; height:360px; margin-left: 12rem;  ">
<div class="img">
                  <?php  echo "<img src= images/$imgname style='margin-top:2rem; width:11rem; height:10rem;' class='pimage' name='pimage'>"; ?>
                  </div>
                  <div class="new" style="main" >
                  <?php  echo "<h1 class='title' name='name'>$pname</h1>"; ?>

                  <br>

<div class= "sprice" name='sellingprice'> <?php echo "Rs $sprice "  ?> <span class="price"><?php echo "Rs $mprice"; ?></span></div>
         
                  <div class="quantity">
                  <span>Quantity</span> <input type="number" class="qty" id="qty"  name="qty" required value=1 min="1" max="100" ><span> Kg</span>
                  </div>
        
        <input type="hidden" name="mprice" value=<?php echo " $mprice"; ?> >
        <input type="hidden" name="Pname" value= <?php echo "$pname"  ?>>
        <input type="hidden" name="sprice" value= <?php echo "$sprice"  ?>>
        


<button class="btn" style="margin-top:1.2rem;" name="addCart">Add To Card</button>
                            
         </div>
        </div>

    </div>

    </div>
</form>
   
</section>


<?php } ?>

<section>




</body>
</html>
