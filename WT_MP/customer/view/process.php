<?php   include "regform.php" ; ?>
<?php include "../control/action.php"; ?>
<?php
   	
       
    //Get form data
    if(isset($_REQUEST["gender"]))
    {
       $gender= $_REQUEST["gender"];
    }
    else{
       $gender= "";
     }

     
if(!isset($_POST["electrician"])&&!isset($_POST["cleaner"])&&!isset($_POST["other"]))
{
    $v1=$v2=$v3= "";
    
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


	   //Get form data
	   $formdata = array(
        'fname'=> $_POST["fname"],
        'lname'=> $_POST["lname"],
        'username'=>$_POST["username"],
        'email'=>$_POST["email"],
        'password'=> $_POST["password"],
        'gender'=>  $gender,
        'electrician'=> $v1,
        'cleaner'=> $v2,
        'other'=> $v3,
        'atime'=> $_POST["atime"],
     );

	   
     $existingdata = file_get_contents('data.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     //Convert updated array to JSON
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
     //write json data into data.json file
     if(file_put_contents("data.json", $jsondata)) {
          echo "Data successfully saved <br>";
      }
     else 
          echo "no data saved";

   $data = file_get_contents("../view/data.json");
   $mydata = json_decode($data);




   

  
   //echo "my value: ".$mydata[1]->lastName;
         //echo "my value: ".$mydata[1]->lastName;
         
/*
foreach($mydata as $myobject) //(for showing data in reg)
   {
   foreach($myobject as $key=>$value)
  {
      echo "your ".$key." is ".$value."<br>";
  } 
  }
*/
  
?>