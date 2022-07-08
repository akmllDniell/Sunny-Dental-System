<?php
//Delete data
include('dbconn.php');

//query
$sql="UPDATE appointment SET statusapp = 'canceled'
	WHERE appID=".$_GET['slocanapp'];
mysqli_query($dbconn, $sql);

echo "<script> window.location='applist.php'; </script>";

?>