<?php
//Delete data
include('dbconn.php');

//query
$sql="DELETE FROM employee
	WHERE empID=".$_GET['snodemp'];
mysqli_query($dbconn, $sql);

echo "<script> window.location='doctor.php'; </script>";

?>