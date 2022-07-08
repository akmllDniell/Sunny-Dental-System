<?php
{
    $id = $_POST['appID'];
	$date = $_POST['appDate'];
	$time = $_POST['appTime'];
	$ic = $_POST['patientIC'];
    $eid = $_POST['empID'];
    $sta = $_POST['statusapp'];
	
	// database connection 
	include("dbconn.php");
	
	$sql = "UPDATE appointment SET appID = '$id',
			appDate = '$date',
			appTime = '$time',
            patientIC = '$ic',
            empID = '$eid',
            statusapp = '$sta'
			WHERE appID = '$id'";

	$query = mysqli_query($dbconn,$sql);
	header("Location: applist.php");
}
?>