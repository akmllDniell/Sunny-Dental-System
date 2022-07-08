<?php
session_start();
/* include db connection file */
include("dbconn.php");

if(isset($_POST['loginN'])){
	/* capture values from HTML form */
	$username = $_POST['uswN'];
	$password = $_POST['passN'];

	
	/* execute SQL command */
		$sql = "SELECT * FROM employee WHERE empUN = '$username'
				AND empPwd = '$password'" ;
				
				
		
		$query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
		
		$row = mysqli_num_rows($query);
		
			
		
		if($row == 0){
			header("Location: error1.html");
		}
		else{

			if($username[0]=='N'){
				$r = mysqli_fetch_assoc($query);
				$_SESSION['empUN'] = $r['empUN'];
				$_SESSION['empName'] = $r['empName'];
			header("Location: index.php");
            }
			else{
				header("Location: errorcode.html");
			}
		
		}
	}

		if(isset($_POST['loginD'])){
			/* capture values from HTML form */
			$username = $_POST['uswD'];
			$password = $_POST['passD'];
		
			
			/* execute SQL command */
				$sql = "SELECT * FROM employee WHERE empUN = '$username'
						AND empPwd = '$password'" ;
						
						
				
				$query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
				
				$row = mysqli_num_rows($query);
				
					
				
				if($row == 0){
					header("Location: error1.html");
				}
				else{
					if($username[0]=='D'){
						$r = mysqli_fetch_assoc($query);
						$_SESSION['empUN'] = $r['empUN'];
						$_SESSION['empName'] = $r['empName'];
					header("Location: viewapp_doctor.php");
					
						}
						else{
							header("Location: errorcode.html");
						}				
				
				}
			}
		
	

mysqli_close($dbconn);
?>