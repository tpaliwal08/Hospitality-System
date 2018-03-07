<?php
include "header.php";
//if(isset($_POST['user_id']))
//{
//$id = (int)$_POST['user_id'];
//}

define('sql',"hi");
 $id = $_POST['id'];
 $ctime=$_POST['ctime'];
 $ltime=$_POST['ltime'];
//exit();
 $sql="UPDATE opd_doctor SET comming_time='$ctime',
                  leaving_time='$ltime'
	          WHERE
	          staff_id='$id'";
			  //exit();
	echo mysql_query($sql) or die(mysql_error());
	//exit();
	echo "successfully Updated";
	header("location:viewopdstaff.php");
	

?>
<?php
  
  include "footer.php";
  
?>