<?php
//Delete data
include('dbconn.php');

//query
$sql="DELETE FROM treatment
	WHERE treatmentID=".$_GET['snodtreat'];
mysqli_query($dbconn, $sql);

echo "<script> window.location='treatment.php'; </script>";

?>