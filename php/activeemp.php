<?php
{
    $id = $_GET['snoempac'];

include("dbconn.php");
	
       $sql = "UPDATE employee
        SET statusemp = 'active'
        WHERE empID = $id";

	$query = mysqli_query($dbconn,$sql);
	header("Location: allemployee.php");
}
?>