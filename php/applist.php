<?php
   session_start();
   if(isset($_SESSION['empUN'])){
   	// store session in var
   	$empUN = $_SESSION['empUN'];
   ?>
<!DOCTYPE html>
<html lang="en" >
   <head>
   <meta charset="UTF-8">
      <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
      <meta name="apple-mobile-web-app-title" content="CodePen">
      <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/gVjvdcN/Screenshot-2022-06-12-153524-removebg-preview.png" />
      <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
      <title>SUNNY DENTAL Appointment</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
      <link rel="stylesheet" href="datatables-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="datatables-responsive/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="datatables-buttons/css/buttons.bootstrap4.min.css">
      <link rel="stylesheet" href="adminlte.min.css">
      <style>
         :root {
         --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont,
         "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
         "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
         }
         *, *::before, *::after {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         }
         html {
         font-family: sans-serif;
         line-height: 1.15;
         -webkit-text-size-adjust: 100%;
         -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
         }
         nav {
         display: block;
         }
         body {
         margin: 0;
         font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
         Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
         "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
         font-size: 1rem;
         font-weight: 400;
         line-height: 1.5;
         color: #515151;
         text-align: left;
         background-color: #e9edf4;
         }
         h1, h2, h3, h4, h5, h6 {
         margin-top: 0;
         margin-bottom: 0.5rem;
         }
         p {
         margin-top: 0;
         margin-bottom: 1rem;
         }
         a {
         color: #3f84fc;
         text-decoration: none;
         background-color: transparent;
         }
         a:hover {
         color: #0458eb;
         text-decoration: underline;
         }
         h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
         font-family: "Nunito", sans-serif;
         margin-bottom: 0.5rem;
         font-weight: 500;
         line-height: 1.2;
         }
         h1, .h1 {
         font-size: 2.5rem;
         font-weight: normal;
         }
         .card {
         position: relative;
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
         -webkit-flex-direction: column;
         -ms-flex-direction: column;
         flex-direction: column;
         min-width: 0;
         word-wrap: break-word;
         background-color: #fff;
         background-clip: border-box;
         border: 1px solid rgba(0, 0, 0, 0.125);
         border-radius: 0;
         }
         .card-body {
         -webkit-box-flex: 1;
         -webkit-flex: 1 1 auto;
         -ms-flex: 1 1 auto;
         flex: 1 1 auto;
         padding: 1.25rem;
         }
         .card-header {
         padding: 0.75rem 1.25rem;
         margin-bottom: 0;
         background-color: rgba(0, 0, 0, 0.03);
         border-bottom: 1px solid rgba(0, 0, 0, 0.125);
         text-align: center;
         }
         .dashboard {
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         min-height: 100vh;
         }
         .dashboard-app {
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
         -webkit-flex-direction: column;
         -ms-flex-direction: column;
         flex-direction: column;
         -webkit-box-flex: 2;
         -webkit-flex-grow: 2;
         -ms-flex-positive: 2;
         flex-grow: 2;
         margin-top: 84px;
         }
         .dashboard-content {
         -webkit-box-flex: 2;
         -webkit-flex-grow: 2;
         -ms-flex-positive: 2;
         flex-grow: 2;
         padding: 25px;
         }
         .dashboard-nav {
         min-width: 238px;
         position: fixed;
         left: 0;
         top: 0;
         bottom: 0;
         overflow: auto;
         background-color: #373193;
         }
         .dashboard-compact .dashboard-nav {
         display: none;
         }
         .dashboard-nav header {
         min-height: 84px;
         padding: px 27px;
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         -webkit-box-pack: center;
         -webkit-justify-content: center;
         -ms-flex-pack: center;
         justify-content: center;
         -webkit-box-align: center;
         -webkit-align-items: center;
         -ms-flex-align: center;
         align-items: center;
         }
         .dashboard-nav header .menu-toggle {
         display: none;
         margin-right: auto;
         }
         .dashboard-nav a {
         color: #515151;
         }
         .dashboard-nav a:hover {
         text-decoration: none;
         }
         .dashboard-nav {
         background-color: #443ea2;
         }
         .dashboard-nav a {
         color: #fff;
         }
         .brand-logo {
         font-family: "Nunito", sans-serif;
         font-weight: bold;
         font-size: 20px;
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         color: #515151;
         -webkit-box-align: center;
         -webkit-align-items: center;
         -ms-flex-align: center;
         align-items: center;
         }
         .brand-logo:focus, .brand-logo:active, .brand-logo: {
         color: #dbdbdb;
         text-decoration: none;
         }
         .brand-logo i {
         color: #d2d1d1;
         font-size: 27px;
         margin-right: 10px;
         }
         .dashboard-nav-list {
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
         -webkit-flex-direction: column;
         -ms-flex-direction: column;
         flex-direction: column;
         }
         .dashboard-nav-item {
         min-height: 56px;
         padding: 8px 20px 8px 70px;
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         -webkit-box-align: center;
         -webkit-align-items: center;
         -ms-flex-align: center;
         align-items: center;
         letter-spacing: 0.02em;
         transition: ease-out 0.5s;
         }
         .dashboard-nav-item i {
         width: 36px;
         font-size: 19px;
         margin-left: -40px;
         }
         .dashboard-nav-item:hover {
         background: rgba(255, 255, 255, 0.04);
         }
         .active {
         background: rgba(0, 0, 0, 0.1);
         }
         .dashboard-nav-dropdown {
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
         -webkit-flex-direction: column;
         -ms-flex-direction: column;
         flex-direction: column;
         }
         .dashboard-nav-dropdown.show {
         background: rgba(255, 255, 255, 0.04);
         }
         .dashboard-nav-dropdown.show > .dashboard-nav-dropdown-toggle {
         font-weight: bold;
         }
         .dashboard-nav-dropdown.show > .dashboard-nav-dropdown-toggle:after {
         -webkit-transform: none;
         -o-transform: none;
         transform: none;
         }
         .dashboard-nav-dropdown.show > .dashboard-nav-dropdown-menu {
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         }
         .dashboard-nav-dropdown-toggle:after {
         content: "";
         margin-left: auto;
         display: inline-block;
         width: 0;
         height: 0;
         border-left: 5px solid transparent;
         border-right: 5px solid transparent;
         border-top: 5px solid rgba(81, 81, 81, 0.8);
         -webkit-transform: rotate(90deg);
         -o-transform: rotate(90deg);
         transform: rotate(90deg);
         }
         .dashboard-nav .dashboard-nav-dropdown-toggle:after {
         border-top-color: rgba(255, 255, 255, 0.72);
         }
         .dashboard-nav-dropdown-menu {
         display: none;
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
         -webkit-flex-direction: column;
         -ms-flex-direction: column;
         flex-direction: column;
         }
         .dashboard-nav-dropdown-item {
         min-height: 40px;
         padding: 8px 20px 8px 70px;
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         -webkit-box-align: center;
         -webkit-align-items: center;
         -ms-flex-align: center;
         align-items: center;
         transition: ease-out 0.5s;
         }
         .dashboard-nav-dropdown-item:hover {
         background: rgba(255, 255, 255, 0.04);
         }
         .menu-toggle {
         position: relative;
         width: 42px;
         height: 42px;
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         -webkit-box-align: center;
         -webkit-align-items: center;
         -ms-flex-align: center;
         align-items: center;
         -webkit-box-pack: center;
         -webkit-justify-content: center;
         -ms-flex-pack: center;
         justify-content: center;
         color: #443ea2;
         }
         .menu-toggle:hover, .menu-toggle:active, .menu-toggle:focus {
         text-decoration: none;
         color: #875de5;
         }
         .menu-toggle i {
         font-size: 20px;
         }
         .dashboard-toolbar {
         min-height: 84px;
         background-color: #dfdfdf;
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         -webkit-box-align: center;
         -webkit-align-items: center;
         -ms-flex-align: center;
         align-items: center;
         padding: 8px 27px;
         position: fixed;
         top: 0;
         right: 0;
         left: 0;
         z-index: 1000;
         }
         .nav-item-divider {
         height: 1px;
         margin: 1rem 0;
         overflow: hidden;
         background-color: rgba(236, 238, 239, 0.3);
         }
         @media (min-width: 992px) {
         .dashboard-app {
         margin-left: 238px;
         }
         .dashboard-compact .dashboard-app {
         margin-left: 0;
         }
         }
         @media (max-width: 768px) {
         .dashboard-content {
         padding: 15px 0px;
         }
         }
         @media (max-width: 992px) {
         .dashboard-nav {
         display: none;
         position: fixed;
         top: 0;
         right: 0;
         left: 0;
         bottom: 0;
         z-index: 1070;
         }
         .dashboard-nav.mobile-show {
         display: block;
         }
         }
         @media (max-width: 992px) {
         .dashboard-nav header .menu-toggle {
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         }
         }
         @media (min-width: 992px) {
         .dashboard-toolbar {
         left: 238px;
         }
         .dashboard-compact .dashboard-toolbar {
         left: 0;
         }
         }
         main {
         display: inline-block;
         margin: 0px;
         height: 100%;
         width: 100%; 
         }
         img{height: 60px;
         width: auto;
         display: block;
         position: absolute;
         top: 14px;
         right: 173px;
         display: block;
         z-index: 200;
         transition: all 250ms linear;}
         main {
         display: block;
         }
         .page{display: none;
         width:100%;
         }
         page h1 {
         margin:0px;
         }
         .default {
         display:block;
         }
         :target {
         display:block;
         }
         :target ~ .default {
         display:none;
         }
         table .status {
  border-radius: 0.2rem;
  background-color: red;
  padding: 0.2rem 1rem;
  text-align: center;
}
table .status-pending {
  background-color: #fff0c2;
  color: #a68b00;
}
table .status-completed {
  background-color: #c8e6c9;
  color: #388e3c;
}
table .status-cancel {
   background-color: #ff2929;
    color: #7c0000;
}
      </style>
      
      <script>
         window.console = window.console || function(t) {};
      </script>
      <script>
         if (document.location.search.match(/type=embed/gi)) {
           window.parent.postMessage("resize", "*");
         }
      </script>
       <script>
         if (document.location.search.match(/type=embed/gi)) {
           window.parent.postMessage("resize", "*");
         }
         function upd(updapp){
         var cof=confirm("Are you sure you want to UPDATE?");
         if(cof==true){
         	window.location='updapp.php?updapp='+updapp;
         }
         }
      </script>
       <script type="text/javascript">
         function cancelapp(slocanapp){
         var cof=confirm("Are you sure you want to CANCEL this appointment?");
         if(cof==true){
         	window.location='cancelapp.php?slocanapp='+slocanapp;
         }
         }
      </script>
   </head>
   <body translate="no">
   <div class='dashboard'>
      <div class="dashboard-nav">
         <a class="logo" target="_blank">
         <img src="https://i.ibb.co/gVjvdcN/Screenshot-2022-06-12-153524-removebg-preview.png" alt="">
         </a>
         <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#"
            class="brand-logo"><i
            class=""></i> <span> SUNNY DENTAL</span></a></header>
         <nav class="dashboard-nav-list">
            <a href="index.php" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i> dashboard
            </a>
            <div class='dashboard-nav-dropdown'>
               <a class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                  class="fas fa-users"></i> Patient </a>
               <div class='dashboard-nav-dropdown-menu'><a href="patient.php"
                  class="dashboard-nav-dropdown-item">Add New Patient</a><a
                  href="patientlist.php" class="dashboard-nav-dropdown-item">Patient List</a></div>
            </div>
            <div class='dashboard-nav-dropdown'>
               <a class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                  class="fas fa-photo-video"></i> Appointment </a>
               <div class='dashboard-nav-dropdown-menu'><a href="addapp.php"
                  class="dashboard-nav-dropdown-item">Add Appointment</a><a
                  href="applist.php" class="dashboard-nav-dropdown-item">Appointment List</a></div>
            </div>
            <a
               href="resit.php" class="dashboard-nav-item"><i class="fas fa-money-check-alt"></i> Payment </a>
            <a
               href="treatment.php" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Treatment </a>
                 
            <div class='dashboard-nav-dropdown'>
               <a  class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                  class="fas fa-user"></i> Employee </a>
               <div class='dashboard-nav-dropdown-menu'><a href="doctor.php"
                  class="dashboard-nav-dropdown-item">View Doctor</a><a
                  href="Nurse.php" class="dashboard-nav-dropdown-item">View Nurse</a>
                  <a
                     href="addemp.php" class="dashboard-nav-dropdown-item">Add New Employee</a>
               </div>
            </div>
            <div class="nav-item-divider"></div>
            <a href="logout.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
         </nav>
      </div>
         <div class="dashboard-app">
            <header class="dashboard-toolbar"><a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class="dashboard-content">
               <div class="container">
                  <div class="card">
                     <div class="card-header">
                     <h1><b>APPOINTMENT LIST</b></h1>
                     </div>
                     <div class="card-body">                  
                        <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>                    
                    <th>Appointment ID</th>
                    <th>Patient IC</th>
                    <th>Date</th>                    
                    <th>Time</th>   
                    <th>Patient Name</th>
                    <th>Doctor Name</th>
                    <th>Treatment Name</th>   
                    <th>Status</th>    
                    <th>Action</th>              
                  </tr>
                  </thead>
                  <tbody>                  
                  
                  <?php
                           // database connection 
                           include("dbconn.php");
                           $counter = 1;
                           //$sqltreat="SELECT *   FROM appointment";
						    $sqltreat="SELECT *
							from appointment a 
							join employee e on e.empID=a.empID 
							join treatment t on t.treatmentID=a.treatmentID 
							join patient p on p.patientIC=a.patientIC";
							  
                           $rs = mysqli_query($dbconn, $sqltreat);
                           while($row_rs=mysqli_fetch_assoc($rs))
                           {
                           ?>
                        <tr>                           
                           <td align="center"><?php echo $row_rs['appID']; ?></td>
                           <td><?php echo $row_rs['patientIC']; ?></td>
                           <td><?php echo $row_rs['appDate']; ?></td>
                           <td><?php echo $row_rs['appTime']; ?></td>
						               <td><?php echo $row_rs['patientName']; ?></td>
                           <td><?php echo $row_rs['empName']; ?></td>
                           <td><?php echo $row_rs['treatmentName']; ?></td> 
                           <td><?php if($row_rs['statusapp'] == "pending") { ?>
                                             <p class="status status-pending">pending</p>
	                                        <?php }
                                           else if($row_rs['treatmentID'] != '0'){?>
                                            <p class="status status-completed">Completed</p>
                                           <?php }
                                           else {?>
                                            <p class="status status-cancel">Canceled</p>
                                           <?php }?>
                                          </td>     
                           <td align="center">
                           <?php if($row_rs['statusapp'] == "pending") { ?>
                              <input type="button" value="cancel" onClick="cancelapp(<?php echo $row_rs['appID']; ?>)">                             
                                       <input type="button" value="upd" onClick="upd(<?php echo $row_rs['appID']; ?>)">
	                                        <?php }
                                           else if ($row_rs['statusapp'] == "canceled"){?>
                                         <input type="button" value="upd" onClick="upd(<?php echo $row_rs['appID']; ?>)">
                                           <?php }?>
                                       
                           </td>    
                                            
                        </tr>
                        <?php } ?>                  
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
                        <!-- Control Sidebar -->
                        <aside class="control-sidebar control-sidebar-dark">
                           <!-- Control sidebar content goes here -->
                        </aside>
                        <!-- /.control-sidebar -->
                     </div>
                     <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
      <script id="rendered-js" >
         const mobileScreen = window.matchMedia("(max-width: 990px )");
         $(document).ready(function () {
           $(".dashboard-nav-dropdown-toggle").click(function () {
             $(this).closest(".dashboard-nav-dropdown").
             toggleClass("show").
             find(".dashboard-nav-dropdown").
             removeClass("show");
             $(this).parent().
             siblings().
             removeClass("show");
           });
           $(".menu-toggle").click(function () {
             if (mobileScreen.matches) {
               $(".dashboard-nav").toggleClass("mobile-show");
             } else {
               $(".dashboard").toggleClass("dashboard-compact");
             }
           });
         });
         //# sourceURL=pen.js
             
      </script>
                     <!-- ./wrapper -->
                     <!-- jQuery -->
                     <script src="plugins/jquery/jquery.min.js"></script>
                     <!-- Bootstrap 4 -->
                     <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                     <!-- DataTables  & Plugins -->
                     <script src="plugins/datatables/jquery.dataTables.min.js"></script>
                     <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                     <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                     <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                     <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
                     <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
                     <script src="plugins/jszip/jszip.min.js"></script>
                     <script src="plugins/pdfmake/pdfmake.min.js"></script>
                     <script src="plugins/pdfmake/vfs_fonts.js"></script>
                     <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
                     <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
                     <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
                     <!-- AdminLTE App -->
                     <script src="../../dist/js/adminlte.min.js"></script>
                     <!-- AdminLTE for demo purposes -->
                     <script src="../../dist/js/demo.js"></script>
                     <!-- Page specific script -->
                     <script>
                        $(function () {
                          $("#example1").DataTable({
                            "responsive": true, "lengthChange": false, "autoWidth": false,
                            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                          $('#example2').DataTable({
                            "paging": true,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": true,
                            "autoWidth": false,
                            "responsive": true,
                          });
                        });
                     </script>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>mendeleyWebImporter = {
         downloadPdfs(e,t) { return this._call('downloadPdfs', [e,t]); },
         open() { return this._call('open', []); },
         setLoginToken(e) { return this._call('setLoginToken', [e]); },
         _call(methodName, methodArgs) {
           const id = Math.random();
           window.postMessage({ id, token: '0.4981924117986223', methodName, methodArgs }, 'http://localhost');
           return new Promise(resolve => {
             const listener = window.addEventListener('message', event => {
               const data = event.data;
               if (typeof data !== 'object' || !('result' in data) || data.id !== id) return;
               window.removeEventListener('message', listener);
               resolve(data.result);
             });
           });
         }
         };
      </script>
   </body>
</html>
<?php
   }
   else{
     header("location: login.html");
   }
   
   ?>