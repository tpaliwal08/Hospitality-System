<?php
include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}

define('sql',"hi");
$id = $_POST['id'];
 $uname=$_POST['uname'];
 $email=$_POST['email'];
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];


$sql="UPDATE user SET username='$uname',
	              email='$email',
		      firstname='$fname',
			  lastname='$lname',
	     modified_date='".date("Y-m-d")."'
	          WHERE
	          user_id='$id'";
	 mysql_query($sql);
	
	echo "successfully Updated";
	header("location:view_admin.php");
	

?>
<?php
  
  include "footer.php";
  
?>