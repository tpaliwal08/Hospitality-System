<?php

include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}

define('sql',"hi");
$id = $_POST['id'];
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $dage=$_POST['dage'];
 $wgt=$_POST['wgt'];
 $bgnm=$_POST['bgnm'];
 $address=$_POST['address'];
 $dmail=$_POST['dmail'];
 $dmob=$_POST['dmob'];



$sql="UPDATE blood_donor SET firstname='$fname',
	              lastname='$lname',
		      age='$dage',
			  weight='$wgt',
	     bloodgroup='$bgnm',
		 address='$address',
		 email='$dmail',
		 mobile='$dmob',
		 modified_date='".date("Y-m-d")."'
	          WHERE
	          donor_id='$id'";
     mysql_query($sql);
	
	echo "successfully Updated"
	//header("location:editadmin.php");
	

?>
<?php
  
  include "footer.php";
  
?>