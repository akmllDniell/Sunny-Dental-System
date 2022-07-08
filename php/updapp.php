<html lang="en"><head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">


  <title>CodePen - Minimal form style</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800);
@import url(https://fonts.googleapis.com/css?family=Droid+Sans:400,700);
@import "//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css";
*, *:before, *:after {
  box-sizing: border-box;
}

body {
  font-size: 100%;
  font-family: 'Open Sans', sans-serif;
  background: #BDBDBD;
}

.wrapper {
  max-width: 500px;
  height: 700px;
  margin: 3rem auto;
  background: #eceff1;
  padding: 0 0 1rem;
  position: relative;
}

.form-header {
  background: #fff;
  text-align: center;
  font-size: 1.25rem;
  font-weight: 600;
  color: #212121;
  padding: 1rem;
  margin: 0 0 1rem;
  position: relative;
}
.form-header .close {
  position: absolute;
  right: 1rem;
  top: 1.25rem;
  color: #cfd6db;
  cursor: pointer;
  transition: color .2s ease;
}
.form-header .close:hover {
  color: #212121;
}

.form-grp {
  margin: 0 2rem 1rem;
}
.form-grp label {
  display: block;
  margin: 0 0 .5rem;
  font-weight: 700;
  letter-spacing: .2px;
  font-size: .875rem;
  color: #212121;
}
.form-grp label.inline {
  display: inline-block;
  width: 100px;
}
.form-grp label.inline.right {
  text-align: right;
  padding-right: .5rem;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  padding: 0.75rem 0.875rem;
  border-radius: 4px;
  outline: 0;
  color: #212121;
  font-size: .875rem;
  width: 100%;
  border: 0.063rem solid #b0bec5;
}

input[type="submit"] {
  padding: 0.75rem 1.5rem;
  margin: .5rem 0 0;
  outline: 0;
  border: 0;
  background: #2196f3;
  border-radius: 4px;
  color: #FFF;
  font-weight: 700;
  font-size: .875rem;
  letter-spacing: .25px;
  transition: background .3s ease;
}
input[type="submit"]:hover {
  background: #39a1f4;
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

<body translate="no">
<form class="well form-horizontal" action="updateappsql.php" method="post"  id="addform">
  <div class="wrapper">
  <div class="form-header">Update Appointment <a href="applist.php" class="fa fa-times close"> </a></div>
  <div class="form-grp">

  <?php
	// database connection 
	include("dbconn.php");
	
	// display your profile immediately after login
	$sql = "SELECT * FROM appointment WHERE appID = ".$_GET['updapp'];
	$query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error($dbconn));
	$row = mysqli_num_rows($query);
	if($row != 0)
	{
		$r = mysqli_fetch_assoc($query); ?>

    <label>Appointment ID</label>
    <input name="appID" type="text" value="<?php echo $r['appID']?>" placeholder="" readonly>
  </div>
  <div class="form-grp">
    <label>Appointment Date</label>
    <input name="appDate" type="date"  value="<?php echo $r['appDate']?> "placeholder="">
  </div>
  <div class="form-grp">
    <label>Appointment Time</label>
    <input name="appTime" type="text"  value="<?php echo $r['appTime']?>" placeholder="" >
  </div>
  <div class="form-grp">
    <label>Patient IC</label>
    <input name="patientIC" type="text"  value="<?php echo $r['patientIC']?>" placeholder="" readonly>
  </div>
  <div class="form-grp">
    <label>Employee ID</label>
    <input name="empID" type="text"  value="<?php echo $r['empID']?>" placeholder="" readonly>
  </div>
  <div class="form-grp">
    <label>Status Appointment</label>
    <input name="statusapp" type="text"  value="<?php echo $r['statusapp']?>"placeholder="">
  </div>
  <div class="form-grp">
    <input type="submit" value="Update Appointment">
  </div>
</div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script id="rendered-js">
(function() {


}).call(this);

<?php }?>