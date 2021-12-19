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


?>



   

















