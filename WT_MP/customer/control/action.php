<?php


$validatefname  ="";
$validatelname ="";
$validateuname ="";
$validateemail ="";
$validatepass ="";
$validateradio ="";
$validatecheckbox="";
$v1=$v2=$v3="";
$validateatime="";





if($_SERVER["REQUEST_METHOD"]=="POST") {




if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<2))
    {
        $validatefname="please enter a valid First name";
    }
   
   
    
    if(empty($_POST["lname"]) || (strlen($_POST["lname"])<4))
    {
        $validatelname="please enter a valid Last Name";
    }
 
    
     if(empty($_POST["username"]) || (strlen($_POST["username"])<6))
   {
       $validateuname="please enter a valid User Name";
   }
  
  

   
   if(empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["email"]))
   {
       $validateemail = "Please Enter a valid email";
   }
  
  

    if(empty($_POST["password"]) || (strlen($_POST["password"])<5))
   
    {
        $validatepass="please enter a valid password";
    }
  
    if(isset($_REQUEST["gender"]))
    {
        $validateradio= $_REQUEST["gender"];
    }
    else{
        $validateradio= "please select at least one radio";
    }
    


if(!isset($_POST["electrician"])&&!isset($_POST["cleaner"])&&!isset($_POST["other"]))
{
    $validatecheckbox = "please select at least one service";
    
}
else{
   if(isset($_POST["electrician"]))
   {
       $v1=$_POST["electrician"];
   }
   if(isset($_POST["cleaner"]))
   { 
       $v2=$_POST["cleaner"];
   }
   if(isset($_POST["other"]))
   {
    $v3=$_POST["other"];
   }
}

if(!isset($_POST["atime"]))
{
   $validateatime= "please select available time for service";
}
else{
    
  $validateatime=$_POST["atime"];
}



}
 




?>