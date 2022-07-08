<?php
   session_start();
   if(isset($_SESSION['empUN'])){
   	// store session in var
   	$empUN = $_SESSION['empUN'];
   ?>

<DOCTYPE html>
<html>
 

<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.container{
  width: 750px;
  margin:auto;
  padding:50px;
}


.squareButton {
    font-family: "arial";
    text-decoration: none;
    background-color: #fafafa;
    color: black;
    text-align: center;
    padding: 13px 25px;
    display: inline-block;
    margin: 0px 0px 0px 950px;
}
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
</style>
</head>

<body>

<?php
  include("dbconn.php");
  $sql = "SELECT * FROM patient pat INNER JOIN appointment AS a ON a.patientIC = pat.patientIC INNER JOIN treatment t ON t.treatmentID = a.treatmentID INNER JOIN employee e on e.empID = a.empID  INNER JOIN payment p ON p.appID = a.appID where p.paymentID =".$_GET['sno2'];
$query = mysqli_query($dbconn, $sql) or 
	die ("Error: " . mysqli_error($dbconn));
$row = mysqli_num_rows($query);

$sqltotalpay="SELECT paymentTotal - total_issued AS issued_sum FROM payment where paymentID =".$_GET['sno2'];
$querytotalpay = mysqli_query($dbconn, $sqltotalpay) or 
	die ("Error: " . mysqli_error($dbconn));
$rowtotalpay = mysqli_num_rows($querytotalpay);

    if($row != 0)
	{
		$r = mysqli_fetch_assoc($query); 
    $rowtotalpay = mysqli_fetch_assoc($querytotalpay);}?>

<div class="container">   
  <div class="invoice-container" ref="document" id="html">
     <table style="width:100%; height:auto;  text-align:center; " BORDER=0 CELLSPACING=0>
       <thead style="background:#fafafa; padding:8px;">
         <tr style="font-size: 20px;">
           <td colspan="4" style="padding:20px 20px;text-align: left;">Sunny Dental Billing </td>
         </tr>
       </thead>
       <tbody style="background:#ffff;padding:20px;">
         <tr>
           <td colspan="4" style="padding:20px 0px 0px 20px;text-align:left;font-size: 16px; font-weight: bold;color:#000;">Hello, <?php echo $patname=$r['patientName'];?> </td>
         </tr>
         <tr>
           <td colspan="4" style="text-align:left;padding:10px 10px 10px 20px;font-size:14px;">Your order details</td>
         </tr>
       </tbody>
     </table>
     <table style="width:100%; height:auto; background-color:#fff;text-align:center; padding:10px; background:#fafafa">
       <tbody>
         <tr style="color:#6c757d; font-size: 20px;">
           <td style="border-right:1.5px dashed  #DCDCDC; width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Payment ID</td>
           <td style="border-right: 1.5px dashed  #DCDCDC ;width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Receipt Date.</td>
           <td style="border-right:1.5px dashed  #DCDCDC ;width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Patient IC</td>
           <td style="width:25%;font-size:12px;font-weight:700;padding: 0px 0px 10px 0px;">Patient Address</td>
         </tr>
         <tr style="background-color:#fff; font-size:12px; color:#262626;">
           <td style="border-right:1.5px dashed  #DCDCDC ;width:25%; font-weight:bold;background: #fafafa;"><?php echo $paymentID=$r['paymentID']; ?></td>
           <td style="border-right:1.5px dashed  #DCDCDC ;width:25% ; font-weight:bold;background: #fafafa;"><?php echo " ". date("Y/m/d") ."";?></td>
           <td style="border-right:1.5px dashed  #DCDCDC ;width:25%; font-weight:bold;background: #fafafa;"><?php echo $patientID=$r['patientIC'];?></td>
           <td style="width:25%; font-weight:bold;background: #fafafa;"><?php echo $address=$r['patientAddress'];?></td>
         </tr>
       </tbody>
     </table>
     <table style="width:100%; height:auto; background-color:#fff; margin-top:0px;  padding:20px; font-size:12px; border: 1px solid #ebebeb; border-top:0px;">
       <thead>
         <tr style=" color: #6c757d;font-weight: bold; padding: 5px;">
           <td style="text-align: left;">Appointment ID </td>
           <td style="text-align: center;">Appointment Time</td>
           <td style="padding: 10px;text-align:center;">Treatment Name</td>
           <td style="text-align: right;padding: 10px;">Treatment Cost</td>
         </tr>
       </thead>
       <tbody>
         <tr>
           
           <td style="width:20%;margin-left:10px;text-align: center;"><?php echo $appID=$r['appID'];?></td>
           <td style="width:20%;padding: 10px; text-align:center;"> <?php echo $time=$r['appTime'];?></td>
           <td style="width:20%;padding: 10px;text-align: center;"><?php echo $treatname=$r['treatmentName'];?></td>
           <td style="width:30%; ;font-weight: bold;font-size: 14px;">
             <table style="width:100%;">
               <tr><td style="text-align:end;font-size:13px;">RM <?php echo $price=$r['treatmentCost'];?></td></tr>
             </table>
           </td>
         </tr>
       </tbody>
     </table>
     <table style="width:100%; height:auto; background-color:#fff;padding:20px; font-size:12px; border: 1px solid #ebebeb; border-top:0">
       <tbody>
         <tr style="padding:20px;color:#000;font-size:15px">
           <td style="font-weight: bold;padding:5px 0px">Total Payment</td>
           <td style="text-align:right;padding:5px 0px;font-weight: bold;font-size:16px;"><?php echo $paymentTotal=$r['paymentTotal']; ?></td>
         </tr>
         <tr style="padding:20px;color:#000;font-size:15px">
           <td style="font-weight: bold;padding:5px 0px">Charge</td>
           <td style="text-align:right;padding:5px 0px;font-weight: bold;font-size:16px;"><?php echo $paymentTotal=$r['total_issued']; ?></td>
         </tr>
         <tr style="padding:20px;color:#000;font-size:15px">
           <td style="font-weight: bold;padding:5px 0px">Balance</td>
           <td style="text-align:right;padding:5px 0px;font-weight: bold;font-size:16px;"><?php echo $balance=$rowtotalpay['issued_sum']; ?></td>
         </tr>

         <tr>
           <td colspan="2" style="font-weight:bold;"><span style="color:#c61932;font-weight: bold;">THANK YOU</span></td>
         </tr>
         <tr>
           <td colspan="2" style="font-weight:;text-align:left;padding:5px 0px 0px 00px;font-size:14px;">RECEIPT MAKE<span> BY </span> <b><?php echo $_SESSION['empName'];?> </b></td>
         </tr>
       </tbody>
     
     </table>

     <a class="squareButton" href="resit.php">Next</a>
</div>
</div>



</body>

</html>
<?php
   }
   else{
     header("location: login.html");
   }
   
   ?>