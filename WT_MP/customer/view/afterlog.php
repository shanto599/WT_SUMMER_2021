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
<h2>WELCOME!</h2>
 <h3> <?php echo $_SESSION["username"];?></h3>
<br/><h5>Welcome to home page.</h5>
 <h5>Do you want to <a href="../control
 /logout.php">logout</a></h5>

</body>
</html>










