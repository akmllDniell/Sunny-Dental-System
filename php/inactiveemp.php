<?php
{
    $id = $_GET['snoempin'];

include("dbconn.php");
	
       $sql = "UPDATE employee
        SET statusemp = 'inactive'
        WHERE empID = $id";

	$query = mysqli_query($dbconn,$sql);
	header("Location: allemployee.php");
}
?>