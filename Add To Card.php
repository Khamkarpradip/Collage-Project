<?php

session_start();

//session_destroy();


if(isset($_POST['addCart'])){

    //STORAGE DATA 

     $Pname = $_POST['Pname'];
     $sprice = $_POST['sprice'];
     $mprice = $_POST['mprice'];
     $qty = $_POST['qty'];

$_SESSION['cart'][] = array('productname'=> $Pname,'productprice'=> $sprice,'productqty'=>$qty,'mprice'=> $mprice);

header("location: View Cart.php");


}


//Remove Card 

if(isset($_POST['remove'])){

foreach($_SESSION['cart'] as $key => $value){

if($value['productname']===$_POST['item']){

    unset($_SESSION['cart'][$key]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    header('location:View Cart.php');
}

}

}



?>