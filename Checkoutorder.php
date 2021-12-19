
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


$cname = $_POST['cname'];
$mnumber = $_POST['mnumber'];
$pincode = $_POST['pincode'];
$city = $_POST['city'];
$state = $_POST['state'];
$landmark = $_POST['landmark'];
$address = $_POST['address'];
$deliverytype = $_POST['deliverytype'];
$timesolt = $_POST['timesolt'];



$sql = "INSERT INTO `customerorder`( `cname`, `mnumber`, `pincode`, `city`, `state`, `landmark`, `address`, `deliverytype` , `timesolt`) VALUES ('$cname',$mnumber,$pincode,'$city','$state','$landmark','$address','$deliverytype','$timesolt')";





$result = mysqli_query($conn,$sql);


header("location: Online And Offline  Payment Mode.php");


if($result)
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






















?>



   


