<?php include ('../control/insertcustomer.php'); ?>

<!DOCTYPE html>
<html>
<body>

<h2>Customer Registration form </h2>
<hr>

<form action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td for=" First Name">First Name:</td>
  <td>
  <input type="text" name="fname" placeholder="Enter your First name" ><br>
 </tr>
  
<tr>
<td for="Last name">Last Name:</td>
  <td>
  <input type="text" name="lname" placeholder="Enter your Last name"><br></td>
 </tr>

  <tr>
<td for="user name">User Name:</td>
  <td>
  <input type="text" name="username" placeholder="Enter your username"  ><br></td>
  </tr>

  <tr>
  <td for="Email">Enter Your email:</td>
  <td>
  <input type="text" name="email" placeholder="Enter your email"><br></td>
  </tr> 
  
  

  <tr>
     <td for="pass">password:</td>
  <td>
  <input type="password" id="pass" name="password" placeholder="Enter your password"><br></td>
  </tr>
  <tr>

  
  <tr>
<td>Gender:</td>
<td><input type="radio" id="male" name="gender" value="male" >Male
<input type="radio" id="female" name="gender" value="female" >Female
<input type="radio" id="other" name="gender"  value="other">Other

<br>
</td>
</tr>

<tr>
<td>Select Service:</td>
<td><input type="checkbox" id="electrician"  name="electrician"  value="electrician" >Electrician
 <input type="checkbox" id="cleaner" name="cleaner" value="cleaner" >Cleaner
 <input type="checkbox" id="other" name="other" value="other">Other
 <br>
<?php echo $v1;?>
<?php echo $v2;?>
<?php echo $v3;?>
 </td>
 </tr>
<tr>
 <td><label for="Availabletime">Available Time:</label></td>
 <td>
  <input type="time"  name="atime">
  <?php echo $validateatime; ?></td>
</tr>

 <tr>
<td>
  <input name="submit"   type="submit"  value="SUBMIT">
  <?php echo $error; ?>
  <input name="submit"   type="reset"  value="RESET">
</td>
</tr>


</table>


    
already have an account? then <a href="login.php">click here</a> to login.


</form>

<br>
</body>
</html>





