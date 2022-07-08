<?php
/* include db connection file */
include("dbconn.php");

if(isset($_POST['addnewapp'])){
	/* capture values from HTML form */
	//$id = $_POST['appID'];
	$date = $_POST['appDate'];
	$time = $_POST['appointmentTime'];
	$ic = $_POST['patientIC'];
    $emp = $_POST['empID'];

	$sql0 = "SELECT appID
  FROM appointment where appDate=$date and appTime=$time" ;
	
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: " . mysqli_error($dbconn));
	
	$row0 = mysqli_num_rows($query0);
	if($row0 != 0){
		echo "Record is existed";
	}
	else{
		/* execute SQL INSERT command */
		$sql2 = "INSERT INTO appointment (appDate, appTime, patientIC, empID, treatmentID, statusapp)
		VALUES ('" . $date . "', '" . $time . "','" . $ic . "','". $emp ."','0','pending')";
		
		mysqli_query($dbconn, $sql2) or die ("Error: " . mysqli_error($dbconn));
		
		//$sqlpay = "INSERT INTO payment ( total_issued, appID) SELECT t.treatmentCost , a.appID FROM treatment t INNER JOIN appointment a ON t.treatmentID = a.treatmentID where appID = $id";

		//mysqli_query($dbconn, $sqlpay) or die ("Error: " . mysqli_error($dbconn));
		/* display a message */
		header("Location: applist.php");
		
	}

	
}// close if isset()

/* close db connection */
mysqli_close($dbconn);
?>