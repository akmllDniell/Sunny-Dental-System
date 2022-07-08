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
      <title>SUNNY DENTAL dashboard</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'>
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
  
<style>
   .user-settings {
    display: flex;
    align-items: center;
    padding-left: 20px;
    flex-shrink: 0;
    margin-left: auto;
}
* {
    outline: none;
    box-sizing: border-box;
}
.user-name {
    color: #fff;
    font-size: 14px;
    margin: 0 6px 0 12px;
}
.user-img {
    width: 30px;
    height: 30px;
    flex-shrink: 0;
    -o-object-fit: cover;
    object-fit: cover;
    border-radius: 50%;
}
img {
    max-width: 100%;
}
img {
    border-style: none;
}
.user-name {
    color: #fff;
    font-size: 14px;
    margin: 0 6px 0 12px;
}
@import 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet';

:root {
	--dk-gray-100: #F3F4F6;
	--dk-gray-200: #E5E7EB;
	--dk-gray-300: #D1D5DB;
	--dk-gray-400: #9CA3AF;
	--dk-gray-500: #6B7280;
	--dk-gray-600: #4B5563;
	--dk-gray-700: #374151;
	--dk-gray-800: #1F2937;
	--dk-gray-900: #111827;
	--dk-dark-bg: #313348;
	--dk-darker-bg: #2a2b3d;
	--navbar-bg-color: #6f6486;
	--sidebar-bg-color: #252636;
	--sidebar-width: 250px;
}

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	font-family: 'Inter', sans-serif;
	background-color: var(--dk-darker-bg);
	font-size: .925rem;
}

#wrapper {
	margin-left: var(--sidebar-width);
	transition: all .3s ease-in-out;
}

#wrapper.fullwidth {
	margin-left: 0;
}



/** --------------------------------
 -- Sidebar
-------------------------------- */
.sidebar {
	background-color: var(--sidebar-bg-color);
	width: var(--sidebar-width);
	transition: all .3s ease-in-out;
	transform: translateX(0);
	z-index: 9999999
}

.sidebar .close-aside {
	position: absolute;
	top: 7px;
	right: 7px;
	cursor: pointer;
	color: #EEE;
}

.sidebar .sidebar-header {
	border-bottom: 1px solid #2a2b3c
}

.sidebar .sidebar-header h5 a {
	color: var(--dk-gray-300)
}

.sidebar .sidebar-header p {
	color: var(--dk-gray-400);
	font-size: .825rem;
}

.sidebar .search .form-control ~ i {
	color: #2b2f3a;
	right: 40px;
	top: 22px;
}

.sidebar > ul > li {
	padding: .7rem 1.75rem;
}

.sidebar ul > li > a {
	color: var(--dk-gray-400);
	text-decoration: none;
}

/* Start numbers */
.sidebar ul > li > a > .num {
	line-height: 0;
	border-radius: 3px;
	font-size: 14px;
	padding: 0px 5px
}

.sidebar ul > li > i {
	font-size: 18px;
	margin-right: .7rem;
	color: var(--dk-gray-500);
}

.sidebar ul > li.has-dropdown > a:after {
	content: '\eb3a';
	font-family: unicons-line;
	font-size: 1rem;
	line-height: 1.8;
	float: right;
	color: var(--dk-gray-500);
	transition: all .3s ease-in-out;
}

.sidebar ul .opened > a:after {
	transform: rotate(-90deg);
}

/* Start dropdown menu */
.sidebar ul .sidebar-dropdown {
	padding-top: 10px;
	padding-left: 30px;
	display: none;
}
.sidebar ul .sidebar-dropdown.active {
	display: block;
}

.sidebar ul .sidebar-dropdown > li > a {
  font-size: .85rem;
	padding: .5rem 0;
	display: block;
}
/* End dropdown menu */

.show-sidebar {
	transform: translateX(-270px);
}

@media (max-width: 767px) {
	.sidebar ul > li {
		padding-top: 12px;
		padding-bottom: 12px;
	}

	.sidebar .search {
		padding: 10px 0 10px 30px
	}
}




/** --------------------------------
 -- welcome
-------------------------------- */
.welcome {
	color: var(--dk-gray-300);
}

.welcome .content {
	background-color: var(--dk-dark-bg);
}

.welcome p {
	color: var(--dk-gray-400);
}




/** --------------------------------
 -- Statistics
-------------------------------- */
.statistics {
	color: var(--dk-gray-200);
}

.statistics .box {
	background-color: var(--dk-dark-bg);
}

.statistics .box i {
	width: 60px;
	height: 60px;
	line-height: 60px;
}

.statistics .box p {
	color: var(--dk-gray-400);
}




/** --------------------------------
 -- Charts
-------------------------------- */
.charts .chart-container {
	background-color: var(--dk-dark-bg);
}

.charts .chart-container h3 {
	color: var(--dk-gray-400)
}




/** --------------------------------
 -- users
-------------------------------- */
.admins .box .admin {
	background-color: var(--dk-dark-bg);
}

.admins .box h3 {
	color: var(--dk-gray-300);
}

.admins .box p {
	color: var(--dk-gray-400)
}




/** --------------------------------
 -- statis
-------------------------------- */
.statis {
	color: var(--dk-gray-100);
}

.statis .box {
	position: relative;
	overflow: hidden;
	border-radius: 3px;
}

.statis .box h3:after {
	content: "";
	height: 2px;
	width: 70%;
	margin: auto;
	background-color: rgba(255, 255, 255, 0.12);
	display: block;
	margin-top: 10px;
}

.statis .box i {
	position: absolute;
	height: 70px;
	width: 70px;
	font-size: 22px;
	padding: 15px;
	top: -25px;
	left: -25px;
	background-color: rgba(255, 255, 255, 0.15);
	line-height: 60px;
	text-align: right;
	border-radius: 50%;
}





.main-color {
	color: #ffc107
}

/** --------------------------------
 -- Please don't do that in real-world projects!
 -- overwrite Bootstrap variables instead.
-------------------------------- */

.navbar {
	background-color: var(--navbar-bg-color) !important;
	border: none !important;
}
.navbar .dropdown-menu {
	right: auto !important;
	left: 0 !important;
}
.navbar .navbar-nav>li>a {
	color: #EEE !important;
	line-height: 55px !important;
	padding: 0 10px !important;
}
.navbar .navbar-brand {color:#FFF !important}
.navbar .navbar-nav>li>a:focus,
.navbar .navbar-nav>li>a:hover {color: #EEE !important}

.navbar .navbar-nav>.open>a,
.navbar .navbar-nav>.open>a:focus,
.navbar .navbar-nav>.open>a:hover {background-color: transparent !important; color: #FFF !important}

.navbar .navbar-brand {line-height: 55px !important; padding: 0 !important}
.navbar .navbar-brand:focus,
.navbar .navbar-brand:hover {color: #FFF !important}
.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {margin: 0 !important}
@media (max-width: 767px) {
	.navbar>.container-fluid .navbar-brand {
		margin-left: 15px !important;
	}
	.navbar .navbar-nav>li>a {
		padding-left: 0 !important;
	}
	.navbar-nav {
		margin: 0 !important;
	}
	.navbar .navbar-collapse,
	.navbar .navbar-form {
		border: none !important;
	}
}

.navbar .navbar-nav>li>a {
	float: left !important;
}
.navbar .navbar-nav>li>a>span:not(.caret) {
	background-color: #e74c3c !important;
	border-radius: 50% !important;
	height: 25px !important;
	width: 25px !important;
	padding: 2px !important;
	font-size: 11px !important;
	position: relative !important;
	top: -10px !important;
	right: 5px !important
}
.dropdown-menu>li>a {
	padding-top: 5px !important;
	padding-right: 5px !important;
}
.navbar .navbar-nav>li>a>i {
	font-size: 18px !important;
}




/* Start media query */

@media (max-width: 767px) {
	#wrapper {
		margin: 0 !important
	}
	.statistics .box {
		margin-bottom: 25px !important;
	}
	.navbar .navbar-nav .open .dropdown-menu>li>a {
		color: #CCC !important
	}
	.navbar .navbar-nav .open .dropdown-menu>li>a:hover {
		color: #FFF !important
	}
	.navbar .navbar-toggle{
		border:none !important;
		color: #EEE !important;
		font-size: 18px !important;
	}
	.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {background-color: transparent !important}
}


::-webkit-scrollbar {
	background: transparent;
	width: 5px;
	height: 5px;
}

::-webkit-scrollbar-thumb {
	background-color: #3c3f58;
}

::-webkit-scrollbar-thumb:hover {
	background-color: rgba(0, 0, 0, 0.3);
}
</style>
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
      </style>
      <script>
         window.console = window.console || function(t) {};
      </script>
      <script>
         if (document.location.search.match(/type=embed/gi)) {
           window.parent.postMessage("resize", "*");
         }
      </script>
   </head>
   <body translate="no" >
   <?php
  include("dbconn.php");
  $sql = "SELECT * FROM patient pat INNER JOIN appointment AS a ON a.patientIC = pat.patientIC INNER JOIN treatment t ON t.treatmentID = a.treatmentID INNER JOIN employee e on e.empID = a.empID INNER JOIN payment p ON p.appID = a.appID";
$query = mysqli_query($dbconn, $sql) or 
	die ("Error: " . mysqli_error($dbconn));
$row = mysqli_num_rows($query);

$sqlpat = "SELECT * FROM patient ";
$querypat = mysqli_query($dbconn, $sqlpat) or 
	die ("Error: " . mysqli_error($dbconn));
$rowpat = mysqli_num_rows($querypat);

$sqltreat = "SELECT * FROM treatment ";
$querytreat = mysqli_query($dbconn, $sqltreat) or 
	die ("Error: " . mysqli_error($dbconn));
$rowtreat = mysqli_num_rows($querytreat);

$sqlpay = "SELECT * FROM payment ";
$querypay = mysqli_query($dbconn, $sqlpay) or 
	die ("Error: " . mysqli_error($dbconn));
$rowpay = mysqli_num_rows($querypay);

$sqltotalpay="SELECT SUM(total_issued) AS issued_sum FROM payment";
$querytotalpay = mysqli_query($dbconn, $sqltotalpay) or 
	die ("Error: " . mysqli_error($dbconn));
$rowtotalpay = mysqli_num_rows($querytotalpay);



    if($row != 0)
	{
		$r = mysqli_fetch_assoc($query);
      $rtotalpay = mysqli_fetch_assoc($querytotalpay); 
   }?>
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
                        <h1>Welcome <b><?php echo $_SESSION['empName'];?> </b></h1>
                     </div>
                     <div class='card-body'>
                        
                        <center><p>Your account type is:  </p></center>
                        <section class="statis mt-4 text-center">
      <div class="row">
      
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="box bg-primary p-3">
            <i class="uil-eye"></i>
            <h3><?php echo $row?></h3>
            <p class="lead">Patient Appointment</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="box bg-danger p-3">
            <i class="uil-user"></i>
            <h3><?php echo $rowpat?></h3>
            <p class="lead">Patient registered</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
          <div class="box bg-warning p-3">
            <i class="uil-shopping-cart"></i>
            <h3><?php echo $sum = $rtotalpay['issued_sum'];?></h3>
            <p class="lead">Treatment sales</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box bg-success p-3">
            <i class="uil-feedback"></i>
            <h3><?php echo $rowtreat?></h3>
            <p class="lead">Treatment</p>
          </div>
        </div>
      </div>
   
                     </div>
                  </div>
               </div>
        </div>
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
   </body>
</html>
<?php
   }
   else{
     header("location: login.html");
   }
   
   ?>