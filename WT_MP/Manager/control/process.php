<?php
$validatename="";
$validateemail="";
$validatepho="";
$validateadd="";
$validateradio="";
$validatepassword="";
$validatedate="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //$validateradio="";
if(empty($_REQUEST["mname"]) || (strlen($_REQUEST["mname"])<6))
{
    $validatename= "you must enter name";

}

if(empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["email"]))
{
    $validateemail = "You must enter email";
}

if(empty($_REQUEST["password"]) ||  (strlen($_REQUEST["password"])<6))
{
    $validatepassword= "please enter vaild password";
}


if(empty($_REQUEST["pho"]))
{
    $validatepho= "please enter phone number";
}

if(empty($_REQUEST["add"]))
{
    $validateadd= "please enter text";
}

if(isset($_REQUEST["gender"]))
{
    $validateradio= $_REQUEST["gender"];
}
else{
    $validateradio= "please select at least one radio";
}
if(empty($_REQUEST["birthdate"]))
{
    $validatedate= "please enter Birthdate";
}

}
?>