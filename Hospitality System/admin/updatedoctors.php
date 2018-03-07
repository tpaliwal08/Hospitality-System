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
 $email=$_POST['email'];
 $mob=$_POST['mob'];
 $address=$_POST['address'];



$sql="UPDATE doctors SET firstname='$fname',
                  lastname='$lname',
	              email='$email',
		      mobile='$mob',
			  address='$address',
	     modified_date='".date("Y-m-d")."'
	          WHERE
	          id='$id'";
	 mysql_query($sql);
	
	echo "successfully Updated";
	header("location:view_doctor.php");
	

?>
<?php
  
  include "footer.php";
  
?>