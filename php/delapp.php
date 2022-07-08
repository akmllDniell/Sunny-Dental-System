<?php
//Delete data
include('dbconn.php');

//query
$sql="DELETE FROM appointment
	WHERE appID=".$_GET['slodelapp'];
mysqli_query($dbconn, $sql);

echo "<script> window.location='applist.php'; </script>";

?>