<?php
session_start(); 

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>


<?php
$cookie_name="user";
$cookie_value ="customer";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])){
    echo"Cookie named'".$cookie_name."' is not set!";
}
else
{
    echo"Cookie'" .$cookie_name. "' is set!<br>";
    echo"Value is:" .$_COOKIE[$cookie_name];

}
?>


<!DOCTYPE html>
<html>
<body>
<h2>WELCOME! <?php echo $_SESSION["username"];?></h2>

 <p>View Information:</p> 
 <a href="Mmyform.php">Registration for Manager</a><br><br>
 <a href="Mprofileup.php">Update Manager profile</a><br><br>

 <a href="Cmyform.php">Registration for Customer</a><br><br>
 <a href="Cprofileup.php">Update Customer profile</a><br><br>
 <a href="CShowdata.php">Show Customer Information</a>



 
 
 
 
 <h5>Do you want to <a href="../control/logout.php">logout</a></h5>

</body>
</html>










