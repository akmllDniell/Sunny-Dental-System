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
      <title>SUNNY DENTAL Doctor</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'>
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
         [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
}
[type=button], [type=reset], [type=submit], button {
    -webkit-appearance: button;
}
button {
    background-color: #443ea2;
    font-weight: bold;
    left: 30px;
    float: right;
}
button, select {
    text-transform: none;
}
button, input {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
button {
    border-radius: 0;
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
      <script type="text/javascript">
         function delD(snodemp){
         var cof=confirm("Are you sure you want to DELETE this employee?");
         if(cof==true){
         	window.location='delemp.php?snodemp='+snodemp;
         }
         }
         function updD(snouemp){
         var cof=confirm("Are you sure you want to UPDATE this Employee?");
         if(cof==true){
         	window.location='updateemp.php?snouemp='+snouemp;
         }
         }
      </script>
   </head>
   <body translate="no" >
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
         <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class='dashboard-content'>
               <div class='container'>
                  <div class='card'>
                     <div class='card-header'>
                     <h1><b>EMPLOYEE LIST</b></h1>
                     </div>
                     <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <CENTER><B><h3 class="card-title"><B>DOCTOR LIST</B></h3></B></CENTER>
                <form action="allemployee.php">
    <button type="submit" ><font color="white">VIEW ALL EMPLOYEE</font></button>
</form>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>                    
                    <tr bgcolor="#443ea2">
                    <th><font color="white">NO</font></th>
                      <th><font color="white">Employee ID </font></th>
                      <th><font color="white">Employee Role</font></th>
                      <th><font color="white">Employee Username</font></th>
                      <th><font color="white">Employee Full Name</font></th> 
                      <th><font color="white">Employee Password</font></th>                                            
                      <th><font color="white">ACTION</font></th>    
                    </tr>                 
                  </thead>
                  <?php
                           // database connection 
                           include("dbconn.php");
                           $counter = 1;
                           $sqlempD="SELECT *   FROM employee where statusemp = 'active'";
                           $rs = mysqli_query($dbconn, $sqlempD);
                           while($row_rs=mysqli_fetch_assoc($rs))
                           {
                            $empUN=$row_rs['empUN'];
                           if($empUN[0]=='D')
                           {?>
                        <tr>
                           <td align="center"><?php echo $counter++; ?></td>
                           <td align="center"><?php echo $row_rs['empID']; ?></td>
                           <td><?php echo $row_rs['empRole']; ?></td>
                           <td><?php echo $empUN;?></td>
                           <td><?php echo $row_rs['empName']; ?></td>
                           <td><?php echo $row_rs['empPwd']; ?></td>
                           <td> <input type="button" value="updD" onClick="updD(<?php echo $row_rs['empID']; ?>)">                          
                        </tr>
                        <?php }
                           }
                      ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
                  </div>
               </div>
        </div>
        </div>
</body>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.14/js/jquery.tablesorter.min.js'></script>
      <script id="rendered-js" >
$(function () {
  $('#keywords').tablesorter();
});
//# sourceURL=pen.js
    </script>
                                
        
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
   
</html>
<?php }
else{
   header("location:login.html");
}?>