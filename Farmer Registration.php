<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Registration</title>
    <link rel="stylesheet" href="farmer.css">


</head>
<body>
 <div class="main">
<div class="shadows">
<h1>Farmer Registration</h1>

<br>

<form action="Admin Pannel View Farmer Registration DB.php" method="POST">   


<div class="contain">
<div class="frist">
<label for="">Frist Name</label><span style="color:red;"> *</span><br>
<input type="text"  name="fname"  required>
</div>


<div class="second">
<label for="">Last Name</label><span style="color:red;"> *</span><br>
<input type="text"  name="lname"  required>
</div>


<br>


<div class="mnumber">
<label for="">Mobile Number</label><span style="color:red;">*</span><br>
<input type="number" name="mnumber" required>
</div>


<div class="dist" style="margin-top:-2.1rem;">
<label for="">Select Distric</label><span style="color:red;"> *</span><br>
<select name="distric" id=""  required>

<option value="Ahmednagar">Ahmednager</option>
<option value="Pune">Pune</option>
<option value="Mumbai">Mumbai</option>
<option value="Nashik">Nashik</option>


</select>
</div>



<br><br>
<div class="ctime">
<label for="">Call Time</label> <span style="color:red;"> *</span><br>

<select name="ctime" id="" required>
<option value="10AM - 12AM">10AM-12AM</option>
<option value="1AM - 3AM">1AM-3AM</option>
<option value="4AM - 6AM">4AM- 6AM</option>

</select>
</div>


<br>
<div class="producttype">
<label for="">Select Product</label> <span style="color:red;"> *</span><br>

<select name="producttype" id="" required>
<option value="Agri">Agriguture</option>
<option value="Dairy">Dairy</option>
<option value="Both">Both</option>

</select>
</div>

<br><br>
<div class="address">
<label for="">Address</label><span style="color:red;"> *</span><br>
<textarea name="address" id=""  required></textarea>
</div>

<br>
<div class="caddress">
<label for="">Confirm Address</label><span style="color:red;"> *</span><br>
<textarea name="caddress" id=""   required></textarea>
</div>

<br>
<div class="pin">
<label for="">Pin Code</label><br>
<input type="number" name="pcode" min="1" required>
</div>



<div class="gender">
<label for="">Gender</label><span style="color:red;"> *</span><br>
<select name="gender" id="" required>

<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Not Prefer">No Prefer To Say</option>

</select>
</div>

<br>


<button>Go To Next</button>


</form>
</div>
</body>
</html>