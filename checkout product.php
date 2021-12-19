<?php





$servername ="localhost";
$username ="root";
$password ="";
$db ="my project";



$conn = mysqli_connect($servername,$username,$password,$db);



if($conn)
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


$pname = $_POST['pname'];
$pprice = $_POST['pprice'];
$pqty = $_POST['pqty'];
$total =$_POST['total'];
$gtotal = $_POST['gtotal'];

$sql = " INSERT INTO `order product`(`pname`, `pprice`, `pqty`, `total`,`gtotal`) VALUES ('$pname',$pprice,$pqty,$total,$gtotal)";


$total = mysqli_query($conn,$sql);


if($total)

{
    echo '<script>
    alert("Record Insert");
    </script>';
    


}
else
{

    echo '<script>
    alert("Record Not Insert");
    </script>';
    


}


header("location:checkout bill.php");

?>



   

















