<?php
include('../control/logincheck.php');

if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
    header("location: afterlog.php");
}
?>

<?php include "../control/action.php"; ?>

<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" >
    <input type="password" name="password" placeholder="Enter your password" >
    <input type="submit" name="submit"  >
</form>

<br>


<?php echo $error; ?> <?php echo $error1; ?> <a href="regform.php"> Sign Up</a>

</body>
</html>










