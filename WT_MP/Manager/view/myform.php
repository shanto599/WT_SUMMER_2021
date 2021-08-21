<?php include "../control/process.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
</head>
<body>

<h1>Form Fill Up</h1>
<hr>

<form action="mjson.php" method="post" enctype="multipart/form-data">

<table>
<tr>
<td>Manager Name:</td>
<td><input type="text" id="mname" name="mname"> <?php echo $validatename; ?><br>
</td>
</tr>

<tr>
<td>E-mail:</td>
<td><input type="text" id="email" name="email"><?php echo $validateemail; ?><br></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" id="password" name="password"><?php echo $validatepassword; ?><br></td>
</tr>
<tr>
<td>Phone:</td>
<td><input type="text" id="pho" name="pho"><?php echo $validatepho; ?><br></td>
</tr>
<tr>
<td>Birthdate:</td>
<td><input type="date" id="birthdate" name="birthdate"><?php echo $validatedate; ?><br></td>
</tr>
</tr>
<tr>
<tr>
<td>Address</td>
<td><textarea name="add" rows="3" cols="20"></textarea><?php echo $validateadd; ?><br></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" id="male" name="gender" value="male">Male
<input type="radio" id="female" name="gender" value="female">Female
<?php echo $validateradio; ?>
<br>
</td>
</tr>
 <tr>
 <td>
  <input type="Submit">
 </td>
 </tr>
</table>
<a href="login.php">login</a>
</form>
</body>
</html>