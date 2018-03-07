<?php

include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}
 echo $row['advance_amount'];
 exit();
define('sql',"hi");
$id = $_POST['id'];
	        $pfname=$_POST['pfname'];
	        $plname=$_POST['plname'];
	        $pfnm=$_POST['pfnm']; 
	        $pmob=$_POST['pmob'];
			$paddress=$_POST['paddress']; 
	              
	        $pbedc=$_POST['pbedc'];
	        $docfee=$_POST['docfee'];
	        $medfee=$_POST['medfee'];
	        $total=$_POST['total'];
			$advance=$_POST['advance'];
	        $mdate=$_POST['mdate'];
			       
	 $sql="UPDATE patient_payment SET  p_firstname='$pfname',p_lastname='$plname',pfather_name='$pfnm',mobile='$pmob',address='paddress',bedcharge_total='pbedc', doctor_fee='$docfee',medical_fee=$medfee,total_amount='$total',modified_date='mdate' WHERE patient_id='$id'";
     mysql_query($sql);
	echo "successfully Updated";
	header("location:viewadmitpatients.php");
	

?>
<?php
  
  include "footer.php";
  
?>