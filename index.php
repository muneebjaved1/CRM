<!DOCTYPE html>
<html lang="en">

 <?php include 'assets/Layouts/head.php'; ?> 
  <body>
    <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">ITEM 1</a>
            <a href="#">ITEM 2</a>
            <a href="#">ITEM 3</a>
            <a href="#">ITEM 4</a>
        </div>
    <div class="container-scroller">
      
      <?php include 'assets/Layouts/navigation-user.php'; ?>
      <!-- partial -->
      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
         
             <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Project Group Name</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </th>
                            <th colspan="4"> Task Lists </th>
                            <th> Subitem </th>
                            <th> Owner</th>
                            <th> People </th>
                            <th> Priority </th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td colspan="4">Henry Klein <span style="float:right;"><a class="toggle-side">
                              <span onclick="openNav()" style="cursor: pointer; padding: 5px;"><i class="mdi mdi-email"></i></span>

                            </a></span>
                            </td>
                            <td> no </td>
                            <td> <img src="assets/images/faces/face1.jpg" alt="image" /> </td>
                            <td> <img src="assets/images/faces/face1.jpg" alt="image" /><img src="assets/images/faces/face1.jpg" alt="image" /></td>
                            <td > <div class="badge badge-outline-success">Urgent</div> </td>
                            <td> Working Started</td>
                            <td>
                              
                            </td>
                          </tr>
                         
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            

            <div class="side-menu">
      <div class="header">
        <i class="fas fa-chevron-left close-side"></i>
        <img src="http://www.personalbrandingblog.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" />
        <h1>Chloe</h1>
      </div>
      <div class="footer">
        <a><i class="fas fa-cogs"></i>Settings</a>
      </div>
    </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © amazon-consultant.co.uk 2022</span>
             
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script>
        // function logout() {
        //   var logout = "logout"
        //   $.ajax({
        //         type: "POST",
        //         url: "assets/auth/logout.php",
        //         data: {
        //             'logout' : logout
                    
        //         },
                
        //         success: function(msg){
        //           if(msg === 'success'){
        //             window.location.href='assets/auth/login.php';
        //           }
        //           else
        //           {
        //             alert('error');
        //           }
        //             }
                
        //     });

        document.getElementById("hidebtn").onclick = function(){
          alert('hi');
        //  var description = document.getElementById('desc'); 
        //  description.style.display = " none";

        }
       
</script>
<script type="text/javascript">
  function openNav() {
            document.getElementById("mySidenav").style.width = "500px";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
</script>
        <?php 
        include 'assets/Layouts/scripts.php';
        ?>
    <!-- End custom js for this page -->
  </body>

  <div class="row"> <div class="col-12 grid-margin"> <div class="card"> <div class="card-body"> <div class="row"> <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right"> <div class="wrapper text-center"> <h4 class="card-title">Alerts Popups</h4> <p class="card-description">A basic message</p> <button class="btn btn-outline-primary" onclick="showSwal('basic')">Click here!</button> </div> </div> <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right"> <div class="wrapper text-center"> <h4 class="card-title">Alerts Popups</h4> <p class="card-description">A title with a text under</p> <button class="btn btn-outline-primary" onclick="showSwal('title-and-text')">Click here!</button> </div> </div> <div class="col-md-4 col-sm-6 d-flex justify-content-center"> <div class="wrapper text-center"> <h4 class="card-title">Alerts Popups</h4> <p class="card-description">A success message!</p> <button class="btn btn-outline-primary" onclick="showSwal('success-message')">Click here!</button> </div> </div> </div> </div> </div> </div>
</html>