<?php
{
    $id = $_POST['empID'];
	$fname = $_POST['empName'];
	$UN = $_POST['empUN'];
	$role = $_POST['empRole'];
    $pwd = $_POST['empPwd'];

	
	// database connection 
	include("dbconn.php");
	
	$sql = "UPDATE employee SET empID = '$id',
			empName = '$fname',
			empUN = '$UN',
            empRole = '$role',
            empPwd = '$pwd'        
			WHERE empID = '$id'";

	$query = mysqli_query($dbconn,$sql);

    if($UN[0]=='N')
    {
	header("Location: nurse.php");
    }
    else
    header("Location: doctor.php");
}
?>