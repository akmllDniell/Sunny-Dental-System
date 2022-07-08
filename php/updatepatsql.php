<?php
{
    $ic = $_POST['patientIC'];
	$fname = $_POST['patientName'];
	$age = $_POST['patientAge'];
	$gender = $_POST['patientGender'];
    $no = $_POST['patientPhoneNumber'];
    $add = $_POST['patientAddress'];
	
	// database connection 
	include("dbconn.php");
	
	$sql = "UPDATE patient SET patientIC = '$ic',
			patientName = '$fname',
			patientAge = '$age',
            patientGender = '$gender',
            patientPhoneNumber = '$no',
            patientAddress = '$add'
			WHERE patientIC = '$ic'";

	$query = mysqli_query($dbconn,$sql);
	header("Location: patientlist.php");
}
?>