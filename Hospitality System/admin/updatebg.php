<?php

include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}

define('sql',"hi");
$id = $_POST['id'];
 $bgname=$_POST['bgname'];
 $sqty=$_POST['sqty'];

$sql="UPDATE blood_group SET group_name='$bgname',
	              quantity='$sqty',
	     modified_date='".date("Y-m-d")."'
	          WHERE
	          group_id='$id'";
         mysql_query($sql);
	
	echo "successfully Updated"
	//header("location:editadmin.php");
	

?>
<?php
  
  include "footer.php";
  
?>