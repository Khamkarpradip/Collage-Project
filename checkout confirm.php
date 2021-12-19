<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Order</title>
    <link rel="stylesheet" href="checkout confirm.css">
</head>
<body>

<div class="shadow" style="margin-left:-6rem;">
<table>
          <thead>
                     <td style="margin:5rem; padding-left:1rem;padding-right:1rem;">Product Name</td>
                     <td style="margin:5rem; padding-left:1rem;padding-right:1rem;">Product Price</td>
                     <td style="margin:5rem; padding-left:1rem;padding-right:1rem;">Product Quantity</td>
                     <td style="margin:5rem; padding-left:1rem;padding-right:1rem;">Total</td>








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

<form action='checkout product.php' method='POST'>


            <tbody>

                         <tr>

                                <td>$value[productname]</td>
                                <td>$value[productprice]</td>
                                <td>$value[productqty]</td>
                                <td>$ptotal</td>
                                
                       



                         <tr>
                         </tbody>

                         <input type='hidden' name='pname' value= '$value[productname]'>
                         <input type='hidden' name='pprice' value= '$value[productprice]'>
                         <input type='hidden' name='pqty' value= '$value[productqty]'>
                         <input type='hidden' name='total' value= '$total'>
                         <input type='hidden' name='gtotal' value= '$gtotal'>";                       

           
           ?>




           <?php } } ?>

           
           
<div class="btn" style="margin-top:-4rem; margin-left: 2.7rem;">


      <a href="Online And Offline  Payment Mode.php">
       <button  name= 'remove'  class='btn' style=" border: none;  border-radius: .5rem; margin-left:40rem;
       border: none; padding: .5rem; background-color:orange;cursor:pointer;"> Confirm Order </button>
                
                </a>

<h2 class="totalprice" style="margin-left:36.5rem; margin-bottom:-3rem;">Total Price -  <?php echo number_format($total,2) ?></h2>

</form>





</div> </tbody>
</table>




   
    </div>
  
   
    



    
