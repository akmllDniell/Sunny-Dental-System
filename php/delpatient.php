<?php
//Delete data
include('dbconn.php');

//query
$sql="DELETE FROM patient
	WHERE patientIC=".$_GET['sno'];
mysqli_query($dbconn, $sql);

echo "<script> window.location='patientlist.php'; </script>";

?>