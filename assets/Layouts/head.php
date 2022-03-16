<?php 
require 'assets/Functions/DB_Functions.php';
$db = new DB_Functions();
$db->startsession();
$islogin = $db->checkLogin();
 if(!$islogin){
  echo "<script>window.location.href = 'assets/auth/login.php';</script>";
 }
else
{   $userid = $_SESSION["userid"];
    $userdata = $db->getuserdata($userid); 
}
?>
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Amazon CRM</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/cropped-amazon.png" />
    <style type="text/css">
       .side-menu {
    width:300px;
    top:0;
    background-color:black;
    height:100vh;
    position:fixed;
    right:-300px;
    transition: all .5s;
    padding:20px;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    z-index:30;
    .header {
      display: flex;
      flex-direction:column;
      align-items: center;
      i {
          align-self:flex-start;
          cursor:pointer;
          transition: all .5s;
          transform: rotate(180deg) skewX(0deg);
          &:hover{
            color:#E59500;
          }
       }
    </style>
  </head>