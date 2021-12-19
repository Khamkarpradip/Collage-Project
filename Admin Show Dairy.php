<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Dairy</title>
    <link rel="stylesheet" href="Admin Show Vegetable.css">

</head>
<body>
    


<h1 style="padding:1.5rem;">Upload Dairy Products</h1>
<br>
<div class="main">
          <div class="continer">

    <table   style="margin-left:5.3rem;">
            <thead>


                     <td>Id</td>
                     <td>Vegetable Name</td>
                     <td>Images</td>
                     <td>Selling Price</td>
                     <td>Purchase Price</td>
                     <td colspan="2">Action</td>
            </thead>
            <tbody>




<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "my project";

$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "SELECT * FROM `uploaddairyproduct`";


$result = mysqli_query($conn,$sql);




while($row = mysqli_fetch_assoc($result))
{
    $id =  $row['id'];
    $imgname = $row['pimage'];
    $pname = $row['pname'];
    $sprice = $row['sprice'];
    $mprice = $row['mprice'];


    ?>




                    <tr>
                        <td><?php  echo "  $id";        ?> </td>
                        <td><?php  echo "$pname";        ?></td>
                        <td class="images"><?php  echo "<img src= images/$imgname style='width:6rem;'>" ?></td>
                        <td><?php  echo "$sprice";        ?></td>
                        <td><?php  echo "$mprice";        ?></td>
                        
                       
                        <td> <a href="Admin Remove Dairy.php?id=<?php echo $row['id'];?>
                        "colspan = "2" >Delete</a></td>
                      




                    </tr>


<?php  

}

?>

    </tbody>
    </table>
    </div>
    </div>
    <br><br><br>























</body>
</html>