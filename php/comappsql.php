<?php
{
    $ic = $_POST['patientName'];
	$pname = $_POST['patienIC'];
    $pid = $_POST['appID'];
	$tid = $_POST['treatment'];	
	
	// database connection 
	include("dbconn.php");
	$sql = "UPDATE appointment SET treatmentID = $tid, statusapp = 'completed' WHERE appID = $pid";
    
    
/*    UPDATE appointment SET appointmentID = $pid ,
    treatmentID = $tid, 
    statusapp = 'completed'
    WHERE appointmentID = $pid";*/

	$query = mysqli_query($dbconn,$sql);

    		$sqlpay = "INSERT INTO payment ( total_issued, appID) SELECT t.treatmentCost , a.appID FROM treatment t INNER JOIN appointment a ON t.treatmentID = a.treatmentID where appID = $pid";

		mysqli_query($dbconn, $sqlpay) or die ("Error: " . mysqli_error($dbconn));
	header("Location: viewapp_doctor.php");
}
?>