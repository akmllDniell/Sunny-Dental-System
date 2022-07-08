<?php
/* include db connection file */
include("dbconn.php");

if(isset($_POST['SIMPAN'])){
	/* capture values from HTML form */
	$ic = $_POST['patientIC'];
	$fname = $_POST['patientName'];
	$age = $_POST['patientAge'];
	$gender = $_POST['patientGender'];
    $no = $_POST['patientPhoneNumber'];
    $add = $_POST['patientAddress'];

	$sql0 = "SELECT patientIC
	FROM patient WHERE patientIC = $ic";
	
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: " . mysqli_error($dbconn));
	
	$row0 = mysqli_num_rows($query0);
	if($row0 != 0){
		echo "Record is existed";
	}
	else{
		/* execute SQL INSERT command */
		$sql2 = "INSERT INTO patient (patientIC, patientName, patientAge, patientGender, patientPhoneNumber, patientAddress)
		VALUES ('".$ic."','" . $fname . "', '" . $age . "','" . $gender . "','". $no ."','" . $add . "')";
		
		mysqli_query($dbconn, $sql2) or die ("Error: " . mysqli_error($dbconn));
		
		/* display a message */
		header("Location: success.html");
	}
}// close if isset()

/* close db connection */
mysqli_close($dbconn);
?>