<?php include ('../control/insertmanager.php'); ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/Mreg.css">
<title>Registration Page</title>
</head>
<body>
<div class="sticky">
<div class="topnav">
  <h1>Manager Registration Page</h1>


</div>
</div>

<div class="middlecolumn ">


<form action="" method="post" enctype="multipart/form-data">
<div class="registrationBox">

<h1>Form Fill Up</h1>
<hr>

<form action="" method="post" enctype="multipart/form-data">

<table>
<tr>
<td>Manager Name:</td>
<td><input type="text" id="mname" name="mname"> <br>
</td>
</tr>

<tr>
<td>E-mail:</td>
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
<td>Birthdate:</td>
<td><input type="date" id="dob" name="dob"></td>
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