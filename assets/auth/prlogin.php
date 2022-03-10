<?php 
require '../Functions/DB_Functions.php';
$db = new DB_Functions();
if(isset($_POST['usern']) && isset($_POST['password']) && isset($_POST['remuser']))
{ 
   $user = $_POST['usern'];
   $password = $_POST['password'];

   
   $remember = $_POST['remuser'];
   
  $userdata = $db->login($user, $password);
  if($userdata == "not found")
  {
    echo 'incorrect information';
  }
  else 
  {
    $db->startsession();
    $userid = $userdata["id"];
    $db->userlogged($userid);
    if(isset($remember))
    {
    $db->Setcookies('amzuserid' , $userid);
    
    }
    echo "Success";
  }
  
}
else 
 {
    echo "false";
  }









?>