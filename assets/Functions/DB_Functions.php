<?php
   class DB_Functions {
   
        private $db_con;
       // constructor
       function __construct() {
          require_once 'DB_Connect.php';
           $db = new DB_Connect;
           $this->db_con = $db->connect();
       }
   
       // destructor
       function __destruct() {
           
       }
   
   
   
   public function login( $username , $password) {
      $Error = "not found";
      //$username = mysqli_real_escape_string($this->db_con , $username);
      //$password = mysqli_real_escape_string($this->db_con , $password);
      $hashedpassword = MD5($password);
      $result = $this->db_con->query("select * from users Where username ='$username' and pass='$hashedpassword'");
      if($result){
      if(mysqli_num_rows($result)>0){
     
        $userdata = mysqli_fetch_array($result);
          return $userdata;
        }
      else{
        $result2 = $this->db_con->query("select * from users Where email ='$username' and pass ='$hashedpassword'");
        if($result2)
        {
          if(mysqli_num_rows($result2)>0)
          {
         
            $userdata = mysqli_fetch_array($result2);
            return $userdata; 
            }
            else {
             return $Error;
            }
        }
      else {
        return $Error;
            }
           
      }
    }
    else{
      return $Error;
        }
  }
   
  public function startsession(){
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }
  }
  public function Setcookies($cookie_name, $cookie_value){
     
    setcookie($cookie_name, $cookie_value, time() + (86400 * 14), "/");
  
    
  }
  
  public function userlogged($userid){
   $_SESSION["userid"] = $userid;
   $_SESSION["logged"] = true;

  }

  public function checkLogin(){
    $comp  = "notlogin";
    if(isset($_SESSION["userid"])){
      return true;
    } 
    elseif(isset($_COOKIE["amzuserid"])){
      $_SESSION["userid"] = $_COOKIE["amzuserid"];
      return true;
    }
    else {
      return false;
    }
  }


  public function getuserdata($userid){
   $result = $this->db_con->query("select * from users Where id ='$userid'");
      if($result)
      {
          $userdata = mysqli_fetch_array($result);
          return $userdata;
       }

   
   }

 }
   
   
   
   ?>