<?php
{
    $ic = $_POST['patientIC'];
	$pname = $_POST['patientName'];
    $pid = $_POST['paymentID'];
	$tname = $_POST['treatmentName'];
	$amm = $_POST['ammount'];
	
	// database connection 
	include("dbconn.php");
	$sql = "UPDATE payment SET paymentID = $pid ,
    paymentTotal = $amm
    WHERE paymentID = $pid";
    

	$query = mysqli_query($dbconn,$sql);
	header("Location: resit.php");
}
?>