<?php
/* include db connection file */
include("dbconn.php");

if(isset($_POST['Tambah'])){
	/* capture values from HTML form */
	$ID = $_POST['empID'];
	$role = $_POST['empRole'];
	$un = $_POST['empUN'];
	$pwd = $_POST['empPwd'];
    $name = $_POST['empName'];
    

	$sql0 = "SELECT empID
	FROM employee WHERE empID = $ID";
	
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: " . mysqli_error($dbconn));
	
	$row0 = mysqli_num_rows($query0);
	if($row0 != 0){        
		echo "Record is existed";
	}
	else{
		/* execute SQL INSERT command */
		$sql2 = "INSERT INTO employee (empID, empRole, empUN, empPwd, empName, statusemp)
		VALUES ('".$ID."','" . $role . "', '" . $un . "','" . $pwd . "','". $name ."','active')";
		
		mysqli_query($dbconn, $sql2) or die ("Error: " . mysqli_error($dbconn));
		
		/* display a message */
		header("Location: success.html");
	}
}// close if isset()

/* close db connection */
mysqli_close($dbconn);
?>