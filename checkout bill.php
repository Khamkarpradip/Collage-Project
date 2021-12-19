

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You For Order</title>
    <link rel="stylesheet" href="checkout bill.css">
</head>
<body>
    




















<br><br><br>

























<?php


$servername ="localhost";
$username ="root";
$password ="";
$db ="my project";



$conn = mysqli_connect($servername,$username,$password,$db);



/*if($conn)
{
echo '<script>
alert("Connection Sucessfull");
</script>';

}
else{


    echo '<script>
    alert("Connection Failed");
    </script>';

}

*/



$sql = "SELECT * FROM `customerorder` ORDER BY id DESC";




$result = mysqli_query($conn,$sql);



$row = mysqli_fetch_assoc($result);







?>


<br>
<div class="maininvoice">
<div class="shadows">  

<br>
<div class="customerdetails" style="margin-bottom: 4.5rem;margin-left:5rem;" >

                            <br>
                            <h1 style="margin-bottom: 1rem;"> Bill To</h1>
                            <p><?php   print_r ($row['cname']);          ?></p>
                            <p><?php   print_r ($row['address']);          ?></p>
                            <p><?php   print_r ($row['deliverytype']);          ?></p>
                            
                            

                        
                            <h2 style="margin-left:35rem; padding-left:.1rem; color:white; width:2rem; margin-top:-3rem; font-size:2rem; padding-right: -1rem; " > IN<span>VOICE</span></h2>

                            </div>
                            
 <div class="orderid">
                            <div class="id1">
                             <label for="">CUSTOMER CITY</label>
                            <br>
                            <a style="margin-top:.5rem; margin-left:1rem;"><?php   print_r ($row['city']);?><a>
                            </div>

                            <div class="id2" >
                             <label for="">ORDER ID</label>
                            <br>
                            <a style="margin-top:.5rem; margin-left:1rem;"><?php   print_r ($row['id']);?><a>
                            </div>

                            
                            <div class="id3" >
                             <label for="">TIME SLOAT</label>
                            <br>
                            <a style="margin-top:.5rem; margin-left: 1rem;"><?php   print_r ($row['timesolt']);?><a>
                            </div>



                            </div>                           
                            
                         

         <br><br><br>
                            
      <table>

            <thead style="margin:4rem;">

                          <td style="padding-left:6rem; padding-right:6rem; padding-bottom:1rem;padding-top:1rem; background-color:#FFC31E; color:BLACK; font-family: sans-serif;  ">ITEAM DESCRIPTION</td>


                          <td style="padding-left:1rem;  padding-bottom:1rem;padding-top:1rem;padding-right:1rem;  background-color:#080808; ">PRODUCT PRICE</td>


                          <td style="padding-left: 1rem;  padding-top:-1rem; background-color:#080808; padding-right:1rem;">PRODUCT QUANTITY</td>



                          <td style="padding-left:1rem;  padding-bottom:1rem;padding-top:1rem; background-color:#080808;padding-right:1rem; ">TOTAL PRICE</td>

</thead>

 <?php

session_start();



$total = 0;
  if(isset($_SESSION['cart'])){
      foreach($_SESSION['cart'] as $key => $value){

        // Total Price Count 

          $ptotal = $value['productprice'] * $value['productqty'];
          $total += $value['productprice'] * $value['productqty'];
          $discount = $total * 20 / 100;
          $gtotal = $total - $discount;
          


echo "

<tr>

  <td>$value[productname]</td>
  <td>$value[productprice]</td>
  <td>$value[productqty]</td>
  <td>$ptotal</td>

  <tr> ";

?>


<?php } } ?>





</table>    
<div class="payment">
<p style="font-size: 1.2rem; margin-left:10.3rem; font-weight:bolder;" >Terms & Notes </p>
<p style="margin-left:2rem;">  1.ORDER Is Deliver On Next Day On Your Selected Time Solt</p>
<p style="margin-top:1rem; margin-left:2rem;"> IF You Select Store Pick Up Then You Need To Visit Our Store On Next Day</p>




</div>




<div class="pricecount" style="margin-left:31rem; margin-top: -8.3rem;">
<table>
  <tr>
    <th style="padding-left:2rem;padding-right:3rem;">TOTAL PRICE</th>
    <td style="padding-right:2.5rem; padding-left: 3.2rem; font-weight:bolder;"><?php  echo "$total";  ?></td>
  </tr>
  <tr>
    <th>DISCOUNT RS</th>

    <td   style="font-weight:bolder; color:red;"><?php  echo "$discount";  ?></td>
  </tr>
  <tr>
    <th style="background-color:black; color:white;" >GRAND TOTAL</th>
    <td  style="background-color: #ffbf00; font-weight:bolder;"  ><?php  echo "$gtotal";  ?></td>
  </tr>
</table>

</div>


<br>

<br>


<button onclick="window.print();">Download Bill</button>

<br><br>













                           

</div>
</div>  

<br><br><br><br>