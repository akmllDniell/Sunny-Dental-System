<?php
{
    $id = $_POST['treatmentID'];
	$cost = $_POST['treatmentCost'];
	$name = $_POST['treatmentName'];

	// database connection 
	include("dbconn.php");
	
	$sql = "UPDATE treatment SET treatmentID = '$id',
			treatmentCost = '$cost',
			treatmentName = '$name'
			WHERE treatmentID = '$id'";

	$query = mysqli_query($dbconn,$sql);
	header("Location: treatment.php");
}
?>