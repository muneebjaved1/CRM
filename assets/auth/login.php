<?php 
require '../Functions/DB_Functions.php';
$db = new DB_Functions();
$db->startsession();
$islogin = $db->checkLogin();
if($islogin){
   echo "<script>window.location.href = '../../index.php';</script>";
}
else{

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Amazon CRM</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/cropped-amazon.png" />
    
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <center><img src="../images/cropped-amazon.png"></center>
                <h3 class="card-title text-left mb-3">Login</h3>
                <form>
                  <div class="form-group"  >
                      <center><div id="error" style="color:red;" ></div></center>
                    <label>Username or email*</label>
                    <input type="text"  id="usern" class="form-control p_input" required>
                  </div>
                  <div class="form-group ">
                    <label>Password*</label>
                    <div class="d-flex">
                    <input type="password" id="pass" class="form-control p_input" required >
                    <i class="mdi mdi-eye bg-dark p-2" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                    </div>
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" id="remember" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="button" onclick="login()" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- endinject -->
<script>

    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pass');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});








    function login() 
    {
        var usern = document.getElementById('usern').value;
        var pass = document.getElementById('pass').value;
        var rem_user;
        if(usern == "" || pass == ""){
            document.getElementById('error').innerHTML = 'Please fill all the Fields'
        }
        else {
        var remember = document.getElementById('remember');
        if (remember.checked == true){
            rem_user = true;
         }
         else{
             rem_user = false;
         }
        $.ajax({
                type: "POST",
                url: "prlogin.php",
                data: {
                    'usern' : usern,
                    'password' : pass,
                    'remuser' : rem_user
                },
                
                success: function(msg){
                  if(msg === 'Success'){
                    window.location.href='../../index.php';
                  }
                  else
                  {
                    document.getElementById('error').innerHTML = msg;
                  }
                    }
                
            });

    }
    }
 </script> 
</body>
</html>