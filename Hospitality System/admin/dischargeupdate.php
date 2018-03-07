<?php

include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}

define('sql',"hi");
$id = $_POST['id'];
$disd=$_POST['disd'];


$sql="UPDATE patient_admit_record SET  discharge_date='$disd' WHERE
	          patient_id='$id'";
     mysql_query($sql);
	
	echo "successfully Updated";
	//header("location:paymentmodify.php");
	

?>
<?php
  
  include "footer.php";
  
?>