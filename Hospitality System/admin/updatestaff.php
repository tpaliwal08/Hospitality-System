<?php

include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}

//define('id',"h");
//var_dump($sid);
if(isset($_POST['submit']))
{
$sid = $_POST['id'];
$sfname=$_POST['sfname'];
$slname=$_POST['slname'];
$smail=$_POST['smail'];
$smob=$_POST['smob'];



$sql="UPDATE staff SET  staff_firstname='$sfname',staff_lastname='$slname',staff_email='$smail',staff_mobile='$smob',modified_date='".date("Y-m-d")."' WHERE
	          staff_id='$sid'";
     mysql_query($sql);
	
	echo "successfully Updated";
	//header("location:paymentmodify.php");
	
}
?>
<?php
  
  include "footer.php";
  
?>