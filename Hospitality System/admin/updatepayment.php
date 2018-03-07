<?php

include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}

define('sql',"hi");
$id = $_POST['id'];
echo $docfee=$_POST['docfee'];
echo $medfee=$_POST['medfee'];
echo $total=$_POST['total'];
echo $advance=$_POST['advance'];
echo $mdate=$_POST['mdate'];


$sql="UPDATE patient_payment SET doctor_fee='$docfee',
	              medical_fee='$medfee',
		      total_amount='$total',
			  advance_amount='$advance',
	     modified_date='$mdate'
	          WHERE
	          patient_id='$id'";
	echo mysql_query($sql);
	
	echo "successfully Updated"
	//header("location:editadmin.php");
	

?>
<?php
  
  include "footer.php";
  
?>