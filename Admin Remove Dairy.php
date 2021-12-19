<?php



$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password ="";
$db = "my project";



$conn = mysqli_connect($servername,$username,$password,$db);



$sql = "DELETE FROM `uploaddairyproduct` WHERE id = $id ";

$result = mysqli_query($conn,$sql);

echo '
<script>
alert("Product Delete Sucessfully");
</script>';

header("location:Admin Show Dairy.php");




?>