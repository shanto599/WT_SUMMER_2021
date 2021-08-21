<?php include ('../control/insertcustomer.php'); ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/reg.css">
<script src="../js/formvalidation.js"></script>
<title>Customer Registration Page</title>
</head>
<body>


<div class="sticky">
<div class="topnav">
  <h1>Customer Registration Page</h1>


</div>
</div>

<div class="middlecolumn ">


<form action="" method="post" enctype="multipart/form-data">
<div class="registrationBox">
<table>
<tr>
<td>First Name:</td>
<td><input type="text" id="fname" name="fname"> <br>
</td>
</tr>

<tr>
<td>Last Name:</td>
<td><input type="text" id="lame" name="lname"> <br>
</td>
</tr>

<tr>
<td>Enter your email:</td>
<td><input type="text" id="email" name="email"></td>
</tr>

<tr>
<td>Phone:</td>
<td><input type="text" id="pho" name="pho"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" id="password" name="password"></td>
</tr>

<tr>
<td>Address</td>
<td><input type="text" id="add" name="add"></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" id="male" name="gender" value="male">Male
<input type="radio" id="female" name="gender" value="female">Female
<br>
</td>
</tr>

<tr>
<td>Available Time:</td>
<td><input type="time" id="time" name="atime"></td>
</tr>

</div>
 <tr>
 <td>
  <input type="submit" name="submit">
  <?php echo $error; ?>
 </td>
 </tr>
</table>
<a href="login.php">login</a>
</form>
</div>
</body>
</html>