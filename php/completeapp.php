

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>Insert Treatment For Patient</title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
  
<style>
body{background:#59ABE3;margin:0}
.form{width:340px;height:520px;background:#e6e6e6;border-radius:8px;box-shadow:0 0 40px -10px #000;margin:calc(50vh - 220px) auto;padding:20px 30px;max-width:calc(100vw - 40px);box-sizing:border-box;font-family:'Montserrat',sans-serif;position:relative}
h2{margin:10px 0;padding-bottom:10px;width:180px;color:#78788c;border-bottom:3px solid #78788c}
input{width:100%;padding:10px;box-sizing:border-box;background:none;outline:none;resize:none;border:0;font-family:'Montserrat',sans-serif;transition:all .3s;border-bottom:2px solid #bebed2}
select{width:100%;padding:10px;box-sizing:border-box;background:none;outline:none;resize:none;border:0;font-family:'Montserrat',sans-serif;transition:all .3s;border-bottom:2px solid #bebed2}
input:focus{border-bottom:2px solid #78788c}
select:focus{border-bottom:2px solid #78788c}
p:before{content:attr(type);display:block;margin:28px 0 0;font-size:14px;color:#5a5a5a}
button{float:right;padding:8px 12px;margin:8px 0 0;font-family:'Montserrat',sans-serif;border:2px solid #78788c;background:0;color:#5a5a6e;cursor:pointer;transition:all .3s}
button:hover{background:#78788c;color:#fff}
div {
    content: 'Hi';
    position: absolute;
    bottom: -35px;
    right: -20px;
    background: #50505a;
    color: #fff;
    width: 320px;
    padding: 16px 4px 16px 0;
    border-radius: 6px;
    font-size: 13px;
    box-shadow: 10px 10px 40px -14px #000;
}
span{margin:0 5px 0 15px}
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

  <form id="comappform" class="form" action="comappsql.php" method="POST">
  <?php
	// database connection 
	include("dbconn.php");
	
	// display your profile immediately after login
	$sql = "SELECT * FROM patient pat INNER JOIN appointment AS a ON a.patientIC = pat.patientIC INNER JOIN treatment t ON t.treatmentID = a.treatmentID INNER JOIN employee e on e.empID = a.empID WHERE appID = ".$_GET['snocom'];
	$query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error($dbconn));
	$row = mysqli_num_rows($query);
	if($row != 0)
	{
		$r = mysqli_fetch_assoc($query); ?>

  <h2>INSERT TREATMENT</h2>
  <b><p type="Patient Name:"><input type="text" name="patientName" value="<?php echo $r['patientName']?>"  readonly/></p>
  <p type="Patient IC:"><input type="text" name="patienIC" value="<?php echo $r['patientIC']?>"  readonly/></p>
  <p type="Appointment ID:"><input type="text" name="appID" value="<?php echo $r['appID']?>"  readonly/></p>
  <p type="Insert Treatment:"><label type="text" name="treatment" placeholder="What treatment have you do?"></label>
  <select name="treatment" id="treatment" required>
  <option value="" selected >What treatment have you do?</option>
  <?php
                                 include("dbconn.php");                                 			
                                                                 
                                 $sqlpatient = "SELECT * FROM treatment where treatmentID != 0";
                                 $querypatient = mysqli_query($dbconn, $sqlpatient);
                                 $rowpatient = mysqli_num_rows($querypatient);
                                 if($rowpatient > 0)
                                 {
                                 while($rpatient= mysqli_fetch_assoc($querypatient))
                                 {
                                 	
                                 	if($r['treatmentID'] == $rpatient['treatmentID'])
                                 	{
                                 		echo "<option value='".$rpatient['treatmentID']."' selected>";
                                 		echo $rpatient['treatmentID']."-".$rpatient['treatmentName'];
                                 		echo "</option>";
                                 	}
                                 	else
                                 	{
                                 		echo "<option value='".$rpatient['treatmentID']."'>";
                                 		echo $rpatient['treatmentID']."-".$rpatient['treatmentName'];
                                 		echo "</option>";
                                 	}
                                 }
                                 }?>                              
                                 </select> </p>
  <button>Send Message</button>
  <div>
    <span class="fa fa-phone"></span> Submit by Doctor <b>HAFIZ KAMAL</b>
  
  </div>
</form>
  
  
  
  

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><?php }?></body>

</html>
 
