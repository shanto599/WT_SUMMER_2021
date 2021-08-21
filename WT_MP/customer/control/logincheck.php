<?php

 

session_start(); 

 

 $error=$error1="";
// store session data
if (isset($_POST['submit']))

 

{

 

if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Please enter your Username and Password. ";
}
else
    {
       
       $data = file_get_contents("data.json");
	 $mydata = json_decode($data);
        
        
       $acc= array();
        

        foreach($mydata as $myobject)
        {
             foreach($myobject as $key=>$value)
            {
                array_push($acc,$value);
            }
        }

        foreach($acc as $value)
        {
            if($value==$_POST['username'])
            {
                $_SESSION["username"] = $_POST['username'];
            }
        }

        foreach($acc as $value)
        {
            if($value==$_POST['password'])
            {
               
                $_SESSION["password"] = $_POST['password'];
            }
        }
        $error = "Username or Password is not correct invalid";

        
       
    }
    
}



?>