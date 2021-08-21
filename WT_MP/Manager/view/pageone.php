<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>

<?php
$cookie_name="user";
$cookie_value ="ttt";
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
<h2>Manager home page</h2>
<p> Hi </p>
<h3> <?php echo $_SESSION["username"];?></h3><br>
<h5>Welcome</h5>
<p>venor details check: 
<a href="viewvendor.php">Go</a> </p><br>
<p>Customer details check: 
<a href="viewcustomer.php">Go</a> </p><br>
 <h5>Do you want to <a href="../control/logout.php">logout</a></h5>

</body>
</html>

 