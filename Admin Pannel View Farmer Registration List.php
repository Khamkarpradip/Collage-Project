<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Farmer Registration List</title>
    <link rel="stylesheet" href="Admin Pannel View Farmer Registration List.css">


</head>
<body>
    <h1>Farmer Registration List</h1>
<table>
        <thead>
                <th>ID</th>
                <th>Frist Name</th>
                <th>Last Name</th>
                <th>Mobile Number</th>
                <th>Distric</th>
                <th>Call Time</th>
                <th>Agri Product</th>
                <th>Address</th>
                <th>Pin Code</th>
                <th>Gender</th>




  
          </thead>



<?php


$servername = "localhost";
$username ="root";
$pass = "";
$db = "my project";



$conn = mysqli_connect($servername,$username,$pass,$db);


$sql = " SELECT * FROM `farmerregistration`";

$query = mysqli_query($conn,$sql);

$rows = mysqli_fetch_assoc($query);




while($rows = mysqli_fetch_assoc($query))


{

$id = $rows['id'];
$lname = $rows['fname'];
$fname = $rows['lname'];
$mnumber = $rows['mnumber'];
$distric = $rows['distric'];
$ctime = $rows['ctime'];
$producttype = $rows['producttype'];
$address = $rows['address'];
$pcode = $rows['pcode'];
$gender = $rows['gender'];

?>



<tbody> 
          <tr>
                    <td><?php   echo $id;     ?></td>
                    <td><?php   echo $fname;     ?></td>
                    <td><?php   echo $lname;     ?></td>
                    <td><?php   echo $mnumber;     ?></td>
                    <td><?php   echo $distric;     ?></td>
                    <td><?php   echo $ctime;     ?></td>
                    <td><?php   echo $producttype;     ?></td>
                    <td><?php   echo $address;     ?></td>
                    <td><?php   echo $pcode;     ?></td>
                    <td><?php   echo $gender;     ?></td>

          </tr>


     
</tbody>

<?php     }   ?>


</table>











</body>
</html>