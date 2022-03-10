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
         
         var description = document.getElementById('desc'); 
         description.style.display = " none";

        }
       
</script>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>