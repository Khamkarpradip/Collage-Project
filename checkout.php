<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="Checkout.css">
</head>
<body>
    <br><br><br>
<form action="Checkoutorder.php" method="POST">
<div class="shadows" style="width:75rem; margin-left:2.1rem;">

    <input type="hidden">
    <br><br>
<table style="margin-left:-3.7rem">
    

         <thead style=" padding:3rem; color:white; background-color: red; margin:3rem;">
                 
                 <th style="margin:5rem; padding-left:1rem;padding-right:1rem;">Product Name</th>
                 <th>Orignal Price</th>
                 <th>Product Price</th>
                 <th>Product Quantity</th>
                 <th style="margin:5rem; padding-left:1rem;padding-right:1rem;">Total Price</th>



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
       
        



        
       

echo "

<tr>

  <td style='background-color:green; color:white;'>$value[productname]</td>
  <td style='background-color:green; color:white;'>$value[mprice]</td>
  <td style='background-color:green; color:white;'>$value[productprice]</td>
  <td style='background-color:green; color:white;'>$value[productqty]</td>
  <td style='background-color:green; color:white;'>$ptotal</td>
  

  <tr> ";



?>

<?php } } ?>

</table>

<br>
<p style="margin-left:15.5rem; margin-top:-3rem; background-color:red;color:white; width:12rem; text-align:center; padding:.5rem; border-radius:1rem;"> Total Amound :- <?php    echo "$total";     ?> Rs</p>




 
 </div>





</div>



<div class="checkout" style="margin-left:46rem;">
   
 <h1 style="margin-left:4rem;">Fill Order Detalis</h1>


 <form action="Checkoutorder.php">

<label for="">Customer Name <span>*</span> </label><br>
<input type="text" name="cname" required >



<br>
<div class="mnumber" style="margin-left:15rem; margin-top:-3rem;">
<label for="" >Mobile Number <span>*</span></label><br>
<input type="number" name="mnumber" reuired > </div>
<br>
<label for="" class="pincode">Pincode<span>*</span></label><br>
<input type="number" name="pincode">
<br>
<div class="mnumber" style="margin-left:15rem; margin-top:-3rem;">
<label for=""  class="city" name="">City <span>*</span></label><br>
<input type="text" name="city"></div>.
<br>


<label for="" class="state">State <span>*</span></label><br>
<input type="text" name="state"   >
<br>

<div class="mnumber" style="margin-left:15rem; margin-top:-3rem;">
<label for="" >Landmark <span>*</span></label><br>
<input type="text" name="landmark" reuired > </div>
<br>



<label for="">Correct Address <span>*</span></label><br>
<textarea name="address" id="" ></textarea>
<br><br>



<div class="time" style="margin-left:15rem;">
<label for="">Delivery Solt</label>

<select name="timesolt" id="">

<option value="Morning 1">6AM - 9AM</option>
<option value="Morning 2">9AM - 12PM</option>
<option value="Afternoon">1PM - 3PM</option>
<option value="Evening 1">3PM - 5PM</option>
<option value="Evening 2">5PM - 8PM</option>


</select>
 
</div>


<div class="dt" style="margin-left:13rem;margin-top:-6rem;">
<label  style="margin-left:5.7rem;"for="">Delivery Type</label>
<span>*</span><br>

<input type="radio" name="deliverytype" value="Store Pickup">
<label for="" >Store Pickup</label>



<input style="" type="radio" name="deliverytype" value="Home Delivery"  required >
<label for="">Home Delivery</label>

</div>




<a href="">
<button name="submit" style="margin-left:1.4rem; padding:.1rem; background-color:green;,border-style:none;  color:white ; border-radius:.5rem;  width:8rem; padding:.7rem; margin-top: 1.2rem; border:none; cursor:pointer;" >Go TO Next</button>
</a>





</form>
</div>
</body>
</html>